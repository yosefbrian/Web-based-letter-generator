<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    	protected $table = 'employees';
        protected $fillable  = ['nip','no_karpeg','nama','jenis_kelamin','agama','tempat_lahir','tanggal_lahir', 'tmt_cpns', 'tmt_pns', 'tmt_pangkat_terakhir', 'pangkat', 'golongan', 'jabatan', 'unit_kerja', 'instansi', 'pendidikan_terakhir', 'pendidikan_tahun_lulus', 'pendidikan_univ', 'pendidikan_tempat', 'pendidikan_jurusan', 'status'];
        
}
