<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class lamaran extends Model
{
	protected $table = 'lamaran';
	protected $primarykey = 'id';
	protected $fillable = ['id_user', 'id_lowongan', 'status'];
	public $timestamps = false;
}

