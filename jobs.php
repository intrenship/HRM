<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class jobs extends Model
{
	protected $table = 'lowongan';
	protected $primarykey = 'id';
	protected $fillable = ['lowongan', 'kualifikasi','katagori'];
	public $timestamps = false;

}

