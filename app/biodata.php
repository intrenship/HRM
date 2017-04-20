<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class biodata extends Model
{
	protected $table = 'biodata';
	protected $primarykey = 'id';
	protected $fillable = ['nama', 'no_ktp', 'alamat', 'alamat_ktp', 'jenis_kelamin', 'agama', 'status_perkawinan', 'hobi', 'suku', 'no_tlp', 'no_hp', 'no_sim', 'id_user'];
	public $timestamps = false;
}

