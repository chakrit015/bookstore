<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table = 'Typebooks'; //กำหนดชื่อตารางให้ตรงกับฐานข้อมูล

    public function books(){
        return $this->hasMany(Books::class);//One to Many
    }
}
