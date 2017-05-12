<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class ortu extends Model
{
	protected $table = 'orang_tua';
	protected $primarykey = 'id';
	protected $fillable = ['anak_ke','nama_ibu', 'saudara_ke','saudara_i',
	'pekerjaan_saudara','pekerjaan','nama_ayah','pekerjaan_ayah',
	'tgl_lahir_ayah','tgl_lahir_ibu','tgl_saudara','id_user'];
	public $timestamps = false;
}