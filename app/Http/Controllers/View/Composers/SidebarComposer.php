<?php

namespace App\Http\Controllers\View\Composers;

use App\Job;
use App\Category;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('sidebarJobs', Job::whereTopRated(true)->orderBy('id', 'desc')->take(5)->get());
        $view->with('sidebarCategories', Category::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get());
    }
}
