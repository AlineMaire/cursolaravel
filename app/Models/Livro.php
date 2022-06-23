<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Livro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(){
    return $this->belongsTo(User::class);
    }

    public static function tipos(){
        return[
            'Nacional',
            'Internacional'
        ];
    }

    public function setPrecoAttribute($value){
        $this->attributes['preco'] = str_replace(',','.',$value);
    }
    
    public function getPrecoAttribute($value){
        return number_format($value, 2, ',', '');
    }

    public function files()
    {
        return $this->hasMany(\App\Models\File::class);
    }
}

class File extends Model
{
    public function livro(){
        return $this->belongsTo(\App\Models\Livro::class);
    }
}

