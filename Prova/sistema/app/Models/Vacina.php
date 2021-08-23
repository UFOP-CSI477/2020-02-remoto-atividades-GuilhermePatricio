<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = ['nome','fabricante','doses'];

    public function registro() {
        return $this->belongsTo(Registro::class);
    }

}
