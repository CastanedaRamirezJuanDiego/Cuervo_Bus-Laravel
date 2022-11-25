<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Truck_stop extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Truck_stops';
    protected $fillable = [
        'Name_Truck_stop',
        'Length',
        'Latitude'

    ];

    
    public function Detail(){
        return $this->HasMany('App\Models\Detail');
    }
}
