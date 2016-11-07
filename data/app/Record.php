<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    

	protected $table = 'record';

    public function mahasiswa()
	{
		return $this->belongsTo('App\employees','nip');
	}

	public function surat()
	{
		return $this->belongsTo('App\Templatesurat','nama_surat');
	}
}
