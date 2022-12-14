<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table    = 'notification';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $visible = ['id', 'notification', 'status', 'created_at', 'updated_at'];
    protected $fillable = ['notification', 'status'];
}
