<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /*-----------------------------------------------------------------------------------------------*/

    public function logoLink(): Attribute
    {
        return new Attribute(
            get: fn () => $this->logo ? Storage::url($this->logo) : Storage::url('defaults/logo.png')
        );
    }
}
