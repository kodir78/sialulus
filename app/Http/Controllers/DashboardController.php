<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Models\Graduate;
use Carbon\Carbon;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {

        // Role::create(['name'=>'writer']);
        // Permission::create(['name'=>'edit post']);
        // $permission = Permission::create(['name'=>'write post']);
        // $role = Role::findById(3);
        // $role->givePermissionTo($permission);
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('writer');
        // return auth()->user()->permissions;
        // return auth()->user()->getDirectPermissions();
        // return auth()->user()->getPermissionsViaRoles();
        // return auth()->user()->getAllPermissions();
        // return User::role('writer')->get(); // Returns only users with the role 'writer'
        // return User::role('admin')->get(); // Returns only users with the role 'writer'
        // return auth()->user()->revokePermissionTo('edit post'); // remove permission
        // return auth()->user()->removeRole('writer'); // remove role
        // return User::role('operator')->get(); // Returns only users with the role 'writer'

        // if($term = request('term')){
        //     $item = Graduate::where("nopes_skl", "=", "$term");
        //     return view('pages.graduates.search', compact('item')); 
        // }
        $date = Carbon::now()->toDateTimeString();
        return view('pages.dashboard', compact('date'));

    }
}
