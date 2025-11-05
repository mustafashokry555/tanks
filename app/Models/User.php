<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /*-----------------------------------------------------------------------------------------------*/

    public function imageLink(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image ? Storage::url($this->image) : ('https://ui-avatars.com/api/?name=' . explode(' ', $this->name)[0] . '.png')
        );
    }

    /*-----------------------------------------------------------------------------------------------*/

    public static function rules(): array
    {
        return [
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50|unique:users',
            'password' => 'required|string|min:8|max:25'
        ];
    }
    /*-----------------------------------------------------------------------------------------------*/

    public static function permissionRules(): array
    {
        return [
            'permissions' => 'required|array',
            'permissions.*' => 'required|distinct|exists:permissions,id'
        ];
    }

}
