<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'percentage',
        'icon',
        'category',
        'order',
    ];
    
    /**
     * Les attributs qui doivent être castés.
     *
     * @var array
     */
    protected $casts = [
        'percentage' => 'integer',
        'order' => 'integer',
    ];
}
