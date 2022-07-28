<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'gender', 'email','postcode','address','building_name','opinion'];

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|max:8|/^[a-zA-Z0-9\-]+$/u',
        'address' => 'required|regex:/^[a-zA-Z0-9]+$/',
        'building-name' => 'regex:/^[a-zA-Z0-9]+$/',
        'opinion' => 'required|max:120',
    );
}
