<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblotp extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'voterID'
    ];
    use HasApiTokens, HasFactory, Notifiable;
}
