<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class biodata extends Model
{
	protected $table = 'biodata';
	protected $primarykey = 'id';
	protected $fillable = ['nama' =>'array', 'no_ktp', 'alamat', 'alamat_ktp', 
	'jenis_kelamin', 'agama', 'status_perkawinan', 'hobi', 'tinggi',
	'suku', 'no_tlp', 'no_hp', 'berat','npwp', 'kendaraan','sim1', 
	'sim2','sim3','sim4','no_sim', 'id_user'];
	public $timestamps = false;
	
}

