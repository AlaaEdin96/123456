<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orginzations extends Model
{
    //جدول المونظمات
    use HasFactory;
    protected  $table = 'orginzation';
    protected $fillable = [
        'name',
        'user_id',
        'code',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
