<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Maatwebsite\Excel\Concerns\ToModel;

class Graduate extends Model
{
    //
    // use SoftDeletes;
    protected $table = 'graduates';

    protected $guarded = [];

    // protected $fillable = [
    //     'nopesubk', 'nis', 'nisn', 'kls', 'name','slug', 'ttl', 'name_ortu', 'nopes_skl', 
    //         'ket', 'r_bind', 'r_bing', 'r_mat', 'r_ipa', 'r_agama', 'r_pkn',
    //        'r_ips', 'r_seni', 'r_penjas', 'r_pra', 'r_jumlah', 'r_rata', 'nus_bind', 
    //        'nus_bing', 'nus_mat', 'nus_ipa', 'nus_agama', 'nus_pkn', 'nus_ips','nus_seni', 
    //        'nus_penjas', 'nus_pra', 'nus_jumlah', 'nus_rata', 'nas_bind', 'nas_bing', 'nas_mat', 
    //        'nas_ipa', 'nas_agama', 'nas_pkn', 'nas_ips', 'nas_seni', 'nas_penjas', 'nas_pra', 'nas_jumlah', 'nas_rata', 
    // ];

// check if any term entered
// if (isset($filter['term']) && $term = strtolower($filter['term']))
// {
//     $query->where(function($q) use ($term){
//         //tambah pencarian dengan relasi ke author and category
//         $q->whereHas('nopes_skl', function($qr) use ($term) {
//             $qr->where('nopes_skl', '=', "{$term}");
//         });
//     });
// }

}
