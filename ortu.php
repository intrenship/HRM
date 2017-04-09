<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class ortu extends Model
{
	protected $table = 'orang_tua';
	protected $primarykey = 'id';
	protected $fillable = ['nama_ibu', 
	'alamat_ortu','id_user'];
	public $timestamps = false;
}