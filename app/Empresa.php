<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
