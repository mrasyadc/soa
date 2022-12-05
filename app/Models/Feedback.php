<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Schema::create('feedback', function (Blueprint $table) {
//            $table->id();
//            $table->foreign('thesisId')->references('id')->on('thesis');
//            $table->text('feedback');
//            $table->timestamps();
//        });

class Feedback extends Model
{

    use HasFactory;

    protected $table    = 'feedback';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $visible = ['id', 'thesisId', 'feedback', 'created_at', 'updated_at'];
    protected $fillable = ['thesisId', 'feedback'];
}
