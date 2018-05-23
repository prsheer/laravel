<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function path()
    {
        return DIRECTORY_SEPARATOR . 'threads' . DIRECTORY_SEPARATOR . $this->id;
    }
}
