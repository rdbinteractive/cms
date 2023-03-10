<?php

namespace RDBI\CMS\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RDBI\CMS\Factories\PublicationFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Publication extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $fillable = [
        'publication_type_id',
        'title',
        'slug',
        'excerpt',
        'page_builder',
        'layout',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'page_builder' => 'array'
    ];

    public function publicationType(): BelongsTo
    {
        return $this->belongsTo(PublicationType::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    protected static function newFactory(): PublicationFactory
    {
        return PublicationFactory::new();
    }
}
