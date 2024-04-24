<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Has
class tblvoter extends Model
{
    use HasFactory;
    protected $fillable = [
        'voterID'
    ];
    use HasApiTokens, HasFactory, Notifiable;
}
