<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Reg extends Model
{
	protected $table = 'users';
	protected $primarykey = 'id';
	protected $fillable = ['name', 'email', 'password', 'id_group'];
    protected $hidden = ['password', 'remember_token',];
	public $timestamps = true;

}
