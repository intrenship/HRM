<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class organisasi extends Model
{
	protected $table = 'organisasi';
	protected $primarykey = 'id';
	protected $fillable = ['jenis', 'nama_organisasi', 'posisi', 'tahun', 'id_user'];
	public $timestamps = false;
}

