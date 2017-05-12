<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class saudara extends Model
{
	protected $table = 'saudara';
	protected $primarykey = 'id';
	protected $fillable = ['saudara_i', 'tgl_lahir', 'pekerjaan', 'id_user'];
	public $timestamps = false;
}

