<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatesurat extends Model
{
    

	protected $table = 'template_surat';

	public function mahasiswa()
    {
        return $this->hasMany('App\Record','nama_surat');
    }
}
