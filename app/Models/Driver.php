<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Driver extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'Drivers';
    
    protected $fillable=[
        'Name_Driver',
        'Email',
        'Password',
        'Phone_Number',
        'Age',
        'License',
        'Center_id'
    ];
    public function Center(){
        return $this->belongsTo(Center::class);
    }
    public function Bus(){
        return $this->hasOne(Bus::class);
    }
   
}
