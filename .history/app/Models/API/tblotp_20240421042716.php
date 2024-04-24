<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Not

class tblotp extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'voterID'
    ];
    use HasApiTokens, HasFactory, Notifiable;
}
