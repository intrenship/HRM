<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class formal extends Model
{
	protected $table = 'pendidikan_formal';
	protected $primarykey = 'id';
	protected $fillable = ['tingkat_pendidikan', 
	'jurusan','sekolah',
	'th_masuk','th_keluar','id_user'];
	public $timestamps = false;
}

