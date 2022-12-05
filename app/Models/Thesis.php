<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{

    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'thesis';

    public $timestamps = true;

    protected $visible = ['id','title', 'nrp', 'abstract', 'keywords', 'storage'];
}
