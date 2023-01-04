<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Trajectory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'trajectories';

    protected $fillable = [
        'Name_Trajectory',
        'Length',
        'Latitude'

    ];

    public function User(){
        return $this->hasOne(User::class);
}
        
  

    public function Detail(){
        return $this->hasMany('App\Models\Detail');
    }
}