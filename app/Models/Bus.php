<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'buses';
    
    protected $fillable=[
'Matricula',
'Driver_id'
    ];
    public function Driver(){
        return $this->belongsTo(Driver::class);
    }

    public function Detail(){
        return $this->hasMany('App\Models\Detail');
    }
}
