<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'client',
        'date',
        'category',
        'image',
        'gallery',
        'featured',
        'order',
    ];
    
    /**
     * Les attributs qui doivent être castés.
     *
     * @var array
     */
    protected $casts = [
        'gallery' => 'array',
        'featured' => 'boolean',
        'order' => 'integer',
    ];
    
    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }
}
