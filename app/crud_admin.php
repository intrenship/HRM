<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class crud_admin extends Model
{
    //
	protected $table = 'berita';
	protected $primarykey = 'id';
	protected $fillable = ['judul','berita', 'gambar'];
	public $timestamps = false;
}

