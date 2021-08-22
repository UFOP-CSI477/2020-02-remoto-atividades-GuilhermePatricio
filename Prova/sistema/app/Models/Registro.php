<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['pessoa_id','unidade_id','vacina_id','dose','data'];

    public function pessoas() {
        return $this->hasMany(Pessoa::class);
    }

    public function unidades() {
        return $this->hasMany(Unidade::class);
    }

    public function vacinas() {
        return $this->hasMany(Vacina::class);
    }
}

