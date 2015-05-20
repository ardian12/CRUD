<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

    protected $fillable = [
		'aktivitas',
		'deskripsi',
		'tgl_dead',
		'status',
	];

}