<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['data_limite','equipamento_id', 'user_id','tipo','descricao'];

    public function usuarios() {
        return $this->belongsTo(Usuario::class);
    }

    public function equipamentos() {
        return $this->belongsTo(Equipamento::class);
    }
}
