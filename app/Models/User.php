<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function identity()
    {
        return $this->hasOne(Identitycard::class);
    }

    /**
     * Accessor for firstname (first letter to uppercase).
     *
     * @param  string  $value
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return is_string($value) ? lcfirst(strtolower($value)) : $value;
    }

    /**
     * Accessor for lastname (first letter to uppercase).
     *
     * @param  string  $value
     * @return string
     */
    public function getLastNameAttribute($value)
    {
        return is_string($value) ? lcfirst(strtolower($value)) : $value;
    }


    /**
     * Mutator for firstname (first letter to lowercase).
     *
     * @param  string  $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = is_string($value) ? ucfirst($value) : $value;
    }

    /**
     * Mutator for lastname (first letter to lowercase).
     *
     * @param  string  $value
     * @return void
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['lastname'] = is_string($value) ? ucfirst($value) : $value;
    }

    /**
     * Accessor for the full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return trim(lcfirst($this->firstname) . ' ' . lcfirst($this->lastname));
    }

    /**
     * Mutator for setting the full name (if you ever need to set it as a single field).
     * Note: This is less common when you have separate firstname and lastname columns.
     *
     * @param  string  $value
     * @return void
     */
    public function setFullNameAttribute($value)
    {
        $nameParts = explode(' ', $value);
        $this->attributes['firstname'] = ucfirst($nameParts[0] ?? '');
        $this->attributes['lastname'] = ucfirst(end($nameParts) ?? '');
    }
}