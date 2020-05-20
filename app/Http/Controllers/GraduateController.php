<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\GraduateRequest;
use Illuminate\Support\Str;
use App\Models\Graduate;
use App\Imports\GraduateImport;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use DataTables;
use DB;


class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $item = Graduate::all();

       return view('pages.graduates.index', compact('item'));
    }

    // public function index(GraduatesDataTable $dataTable)
    // {
    //     return $dataTable->render('pages.graduates.index');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Graduate::findOrFail($id);
        return view('pages.graduates.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Graduate::findOrFail($id);
        return view('pages.graduates.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
            ]);
            
            // menangkap file excel
            $file = $request->file('file');
            
                      
            if ($request->hasFile('file')) {
                
                $file = $request->file('file'); //GET MENANGKAP FILE EXCEL
                
                $nama_file = rand().$file->getClientOriginalName();  // membuat nama file unik
                
                $file->move('file_upload',$nama_file); // upload ke folder file_upload di dalam folder public
                
                Excel::import(new GraduateImport, public_path('/file_upload/'.$nama_file)); // import data
                
                unlink(public_path('/file_upload/'.$nama_file)); //MENGHAPUS FILE EXCEL YANG TELAH DI-UPLOAD
                
                // notifikasi dengan session
                Session::flash('success','Data Kelulusan Berhasil Diimport!');
                
                // alihkan halaman kembali
                return redirect('/graduates');
            }  
            
            // notifikasi dengan session
            Session::flash('error','Please choose file before or Cek Aplication data');
           
            return redirect()->back();
            
        }

       
        public function data()
        {
            // return Datatables::of(Graduate::query())->make(true);
            $graduates = Graduate::query()->get();
            
            return Datatables()->of($graduates)
                               ->addColumn('action', 'pages.graduates.action') // Data DataTables Add Column with view 
                               ->addIndexColumn() // Data DataTables nomor urut
                               ->rawColumns(['action']) // convert link ke format html pelajari lagi
                               ->toJson();
        }

        public function search(Request $request)
        {
            $messages = [
                'required' => ':Tidak boleh kosong!!!',
                'min' => ':attribute harus diisi minimal : 14 karakter, sesuai no peserta !!!',
                'max' => ':attribute harus diisi maksimal: 14 karakter, sesuai no peserta!!!',
            ];
            
            $this->validate($request,[
                'term' => 'required|min:14|max:14',
            ],$messages);

            $term = $request->term;
            if ($item = DB::table('graduates')->where('nopesubk', $term)->first()) {
                return view('pages.graduates.search', compact('item'));
            }
            
            Session::flash('error','Nomor peserta UNBK tidak sesuai'); 
            return redirect()->back();
           
        }
}
