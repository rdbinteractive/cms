<?php

namespace RDBI\CMS\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use RDBI\CMS\Factories\FAQFactory;

class FAQ extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'question', 'answer'];

    public function publications(): BelongsToMany
    {
        return $this->belongsToMany(Publication::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    protected static function newFactory(): FAQFactory
    {
        return FAQFac::new();
    }
}
