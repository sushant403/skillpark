<?php

namespace App\Http\View\Composers;

use App\Job;
use App\Category;
use Illuminate\View\View;

class JandCComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('topJobs', Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(7)
            ->pluck('name', 'id'));

        $view->with('allCategories',  Category::orderBy('created_at', 'desc')
            ->take(9)
            ->pluck('name', 'id'));

        $view->with('recentJobs', Job::orderBy('id', 'desc')
            ->take(4)
            ->get());

        $view->with('trendingJobs', Job::all()->random(50)
            ->take(2));
    }
}
