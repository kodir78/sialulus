<?php

namespace App\Imports;

use App\Models\Graduate;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Http\Requests\GraduateRequest;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //TAMBAHKAN CODE INI
use Session;

class GraduateImport implements ToModel, WithHeadingRow // USE CLASS YANG DIIMPORT
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graduate([
            'nopesubk' => $row['nopesubk'],
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'kls' => $row['kls'],
            'name' => $row['nama'],
            'slug' => Str::slug($row['nama']),
            'jeniskelamin' => $row['jeniskelamin'],
            'ttl' => $row['ttl'],
            'name_ortu' => $row['nama_ortu'],
            'nopes_skl' => $row['nopes_skl'],
            'ket' => $row['ket'],
           'r_bind' => $row['r_bind'],
           'r_bing' => $row['r_bing'],
           'r_mat' => $row['r_mat'],
           'r_ipa' => $row['r_ipa'],
           'r_agama' => $row['r_agama'],
           'r_pkn' => $row['r_pkn'],
           'r_ips' => $row['r_ips'],
           'r_seni' => $row['r_seni'],
           'r_penjas' => $row['r_penjas'],
           'r_pra' => $row['r_pra'],
           'r_jumlah' => $row['r_jumlah'],
           'r_rata' => $row['r_rata'],
           'nus_bind' => $row['nus_bind'],
           'nus_bing' => $row['nus_bing'],
           'nus_mat' => $row['nus_mat'],
           'nus_ipa' => $row['nus_ipa'],
           'nus_agama' => $row['nus_agama'],
           'nus_pkn' => $row['nus_pkn'],
           'nus_ips' => $row['nus_ips'],
           'nus_seni' => $row['nus_seni'],
           'nus_penjas' => $row['nus_penjas'],
           'nus_pra' => $row['nus_pra'],
           'nus_jumlah' => $row['jmlh_nus'],
           'nus_rata' => $row['nus_rata'],
           'nas_bind' => $row['nas_bind'],
           'nas_bing' => $row['nas_bing'],
           'nas_mat' => $row['nas_mat'],
           'nas_ipa' => $row['nas_ipa'],
           'nas_agama' => $row['nas_agama'],
           'nas_pkn' => $row['nas_pkn'],
           'nas_ips' => $row['nas_ips'],
           'nas_seni' => $row['nas_seni'],
           'nas_penjas' => $row['nas_penjas'],
           'nas_pra' => $row['nas_pra'],
           'nas_jumlah' => $row['nas_jmlh'],
           'nas_rata' => $row['nas_rata'],
        ]);
    }
}
