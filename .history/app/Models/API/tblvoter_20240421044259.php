<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use noti

class tblvoter extends Model
{
    use HasFactory;
    protected $fillable = [
        'voterID'
    ];
    use HasApiTokens, HasFactory, Notifiable;
}
