<?php

namespace RDBI\CMS;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PublicationController extends Controller
{
    /**
     * Articles
     */
    public function articles(): View
    {
        return view('rdbi-cms::publication.index', ['publications' =>
            PublicationViewService::index('articles')
        ]);
    }

    public function article(string $slug): View
    {
        return view('rdbi-cms::publication.single', ['publication' =>
            PublicationViewService::single($slug, 'articles')
        ]);
    }

    /**
     * Pages
     */
    public function pages(): View
    {
        return view('rdbi-cms::publication.index', ['publications' =>
            PublicationViewService::index('pages')
        ]);
    }

    public function page(string $slug): View
    {
        return view('rdbi-cms::publication.single', ['publication' =>
            PublicationViewService::single($slug, 'pages')
        ]);
    }

    /**
     * Recipes
     */
    public function recipes(): View
    {
        return view('rdbi-cms::publication.index', ['publications' =>
            PublicationViewService::index('recipes')
        ]);
    }

    public function recipe(string $slug): View
    {
        return view('rdbi-cms::publication.single', ['publication' =>
            PublicationViewService::single($slug, 'recipes')
        ]);
    }

    /**
     * Videos
     */
    public function videos(): View
    {
        return view('rdbi-cms::publication.index', ['publications' =>
            PublicationViewService::index('videos')
        ]);
    }

    public function video(string $slug): View
    {
        return view('rdbi-cms::publication.single', ['publication' =>
            PublicationViewService::single($slug, 'videos')
        ]);
    }
}

