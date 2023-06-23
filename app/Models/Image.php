<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    //Para permitir asignación masiva.
    protected $guarded = [];

    //Relación polimórfica
    public function imageable()
    {
        return $this->MorphTo();
    }

}
