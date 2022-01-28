<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_number'
    ];
    public function Bills()
    {
        return $this->hasMany(Bill::class,'user_id','id');
    }

}
