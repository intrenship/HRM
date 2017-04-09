<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class non_formal extends Model
{
	protected $table = 'pendidikan_nonformal';
	protected $primarykey = 'id';
	protected $fillable = ['jenis_pendidikan', 
	'penyelengara','durasi',
	'tahun','id_user'];
	public $timestamps = false;
}