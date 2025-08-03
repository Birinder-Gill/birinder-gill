<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'technologies',
        'logo_image',
        'banner_image',
        'project_url',
        'is_featured',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'technologies' => 'array'
    ];

    /**
     * Get technologies by slugs
     */
    public function getTechnologiesListAttribute()
    {
        if (!$this->technologies) {
            return collect();
        }
        
        return Technology::whereIn('slug', $this->technologies)
            ->active()
            ->get();
    }

    /**
     * Scope a query to only include active projects.
     */
    public function scopeActive($query)
     {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured projects.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Get the logo image URL
     */
    public function getLogoImageUrlAttribute()
    {
        return $this->logo_image ? asset('storage/' . $this->logo_image) : null;
    }

    /**
     * Get the banner image URL
     */
    public function getBannerImageUrlAttribute()
    {
        return $this->banner_image ? asset('storage/' . $this->banner_image) : null;
    }
}
