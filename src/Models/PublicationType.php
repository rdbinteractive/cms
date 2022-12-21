<?php

namespace RDBI\CMS\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use RDBI\CMS\Factories\PublicationTypeFactory;

class PublicationType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function publications(): HasMany
    {
        return $this->hasMany(Publication::class);
    }

    protected static function newFactory(): PublicationTypeFactory
    {
        return PublicationTypeFactory::new();
    }
}
