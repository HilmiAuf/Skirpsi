<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory; //mengambil data booking user 
      // biar gapake fillable, ini artinya cuma id doang yg gaboleh di masukin mass assigment
      protected $guarded = ['id'];
      public function author()
      {
          //relasi one to one
          //namanya jadi author, dan mengambil user id
          return $this->belongsTo(User::class, 'user_id');
      }
}
