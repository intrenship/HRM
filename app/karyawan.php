<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class karyawan extends Model
{
	protected $table = 'pegawai';
	protected $primarykey = 'id';
	protected $fillable = ['nama', 'alamat','no_hp','gaji'];
	public $timestamps = false;

}

