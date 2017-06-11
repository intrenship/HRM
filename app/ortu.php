<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class ortu extends Model
{
	protected $table = 'orang_tua';
	protected $primarykey = 'id';
	protected $fillable = [
	'anak_ke'=>'array',
	'nama_ibu'=>'array', 
	'saudara_ke'=>'array',
	'saudara_i'=>'array',
	'pekerjaan_saudara'=>'array',
	'pekerjaan','nama_ayah'=>'array',
	'pekerjaan_ayah'=>'array',
	'tgl_lahir_ayah'=>'array',
	'tgl_lahir_ibu'=>'array',
	'tgl_saudara'=>'array',
	'id_user'];
	public $timestamps = false;
}