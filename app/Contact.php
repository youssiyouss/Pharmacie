<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    public $table = 'contact';
	public $fillable = ['nom','prenom','tel','email','message'];

	use SoftDeletes;
    protected $dates = ['deleted_at'];
}
