<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['equipamento_id', 'user_id', 'descricao','data_limite','tipo'];

    public function usarios() {
        return $this->hasMany(Usuario::class);
    }

    public function equipamentos() {
        return $this->hasMany(Equipamento::class);
    }
}
