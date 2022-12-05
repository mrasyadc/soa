<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'nrp';
    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = true;

    protected $visible = ['nrp', 'name', 'gender', 'dob', 'address', 'phoneNumber', 'thesisDefenseDate'];
}
