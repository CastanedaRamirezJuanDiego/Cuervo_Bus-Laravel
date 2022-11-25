<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'Name',
        'Img_User',
        'Email',
        'Password',
        'Matricula',
        'Cuatrimestre_id',
        'Direction_id',
        'Trajectory_id',
    ];
    
    public function Cuatrimeste(){
        return $this->belongsTo(Cuatrimeste::class,'Cuatrimestre_id');
    }
    public function Direction(){
        return $this->belongsTo(Direction::class,'Direction_id');
    }

    public function Trajectory(){
        return $this->belongsTo(Trajectory::class,'Trajectory_id');
    } 
}