<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cuatrimeste extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'Cuatrimestes';
    
    protected $fillable=[
'Cuatrimestre'
    ];
    
    public function User(){
        return $this->HasMany('App\Models\User');
    }
}
