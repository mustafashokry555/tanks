<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /*-----------------------------------------------------------------------------------------------*/

    public function imageLink(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->image ? Storage::url($this->image) : Storage::url('defaults/logo.png')
        );
    }

    /*-----------------------------------------------------------------------------------------------*/

    public static function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string|max:1000',
            'description_en' => 'nullable|string|max:1000',
            'link' => 'nullable|url:http,https|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'show' => 'nullable|in:on'
        ];
    }
}
