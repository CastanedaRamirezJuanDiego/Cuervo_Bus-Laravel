<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Center extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'Centers';
    
    protected $fillable=[
'Center',
    ];
    public function Driver(){
        return $this->hasOne(User::class, 'Center_id','id');
    }
}
