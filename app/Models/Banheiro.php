<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banheiro extends Model
{
    use HasFactory;
    protected $table = 'banheiro';
    protected $fillable = ['name','description'];

    // public function avalicao()
    // {
    //     return $this->hasMany(Banheiro::class);
    // }
}
