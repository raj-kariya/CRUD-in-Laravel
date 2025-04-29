<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
        'status',
    ];

    
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }

    
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (int $value) => $value === 1 ? 'Active' : 'Inactive',
        );
    }

    
    protected function fullLocation(): Attribute
    {
        return Attribute::make(
            get: fn () => "{$this->name}, {$this->country->name}",
        );
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}