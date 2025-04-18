<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'company',
        'content',
        'avatar',
        'rating',
        'featured',
        'order',
    ];
    
    /**
     * Les attributs qui doivent être castés.
     *
     * @var array
     */
    protected $casts = [
        'rating' => 'integer',
        'featured' => 'boolean',
        'order' => 'integer',
    ];
}
