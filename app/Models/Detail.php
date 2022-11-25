<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Detail extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'Details';
    
    protected $fillable=[
        'Bus_id',
        'Truck_stop_id',
        'Trajectory_id'
    ];
    public function Trajectory(){
        return $this->belongsTo('App\Models\Trajectory');
    }

   public function Bus(){
        return $this->belongsTo(' App\Models\Bus');
    }

    public function TruckStop(){
        return $this->belongsTo(' App\Models\TruckStop');
    }
}
