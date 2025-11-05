<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /*-----------------------------------------------------------------------------------------------*/

    public static function rules(): array
    {
        return [
            'icon_code' => 'required|string|max:255',
            'link' => 'nullable|url:http,https|max:255',
        ];
    }
}
