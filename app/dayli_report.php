<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class dayli_report extends Model
{
    //
	protected $table = 'report_harian';
	protected $primarykey = 'id';
	protected $fillable = ['date','taks', 'tercapai','id_pegawai'];
	public $timestamps = false;
}

