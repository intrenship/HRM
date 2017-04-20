<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class crud_lamaran extends Model
{
    //
	protected $table = 'lamaran';
	protected $primarykey = 'id';
	protected $fillable = ['file_cv','id_users', 'id_lowonga','status'];
	public $timestamps = false;
}

