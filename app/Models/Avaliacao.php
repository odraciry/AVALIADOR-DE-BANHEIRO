<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $table = 'avaliacao';
    protected $fillable = ['description', 'banheiro_id'];

    // public function avalicao()
    // {
    //     return $this->hasMany(Banheiro::class);
    // }
}
