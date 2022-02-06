<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected  $table = 'appointment';
    protected $fillable = [
        'name',
        'id_file',
        'pohne_number',
        'sex',
        'born',
        'date',
        'user_id',
        'is_c', //هل جي للموعد او لا
        'nationality_id',
        'orginzations_id',
        'appoetment_with',
    ];

    public function madenh()
    {
        return $this->belongsTo(Nationality::class,'nationality_id','id');
    }

    public function monadamh()
    {
        return $this->belongsTo(Orginzations::class,'orginzations_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
