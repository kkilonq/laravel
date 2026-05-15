<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table ='posts';
    public $timestamps = false;
    protected $fillable = ['title','desc','text','date'];
    protected $dates = ['deleted_at'];
    Schema::table('flights', function ($table) {
  $table->softDeletes();
});

}
