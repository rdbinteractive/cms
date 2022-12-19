<?php

namespace RDBI\CMS;

use RDBI\CMS\Models\Publication;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use LaravelIdea\Helper\App\Models\_IH_Publication_C;

class PublicationViewService
{
    public static function index(string $publicationSlug): LengthAwarePaginator|\Illuminate\Pagination\LengthAwarePaginator|_IH_Publication_C|array
    {
        return Publication::whereHas('publicationType', function ($query) use ($publicationSlug) {
            $query->where('slug', $publicationSlug);
        })
            ->with('publicationType')
            ->paginate(10);
    }

    public static function single(string $publicationSlug, string $publicationType): Publication
    {
        return Publication::whereHas('publicationType', function ($query) use ($publicationType) {
            $query->where('slug', $publicationType);
        })
            ->where('slug', $publicationSlug)
            ->firstOrFail();
    }
}
