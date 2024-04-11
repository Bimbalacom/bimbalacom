<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('theme::tools', ['seo' => [
            'seo_title' => 'Free tools',
            'seo_description' => 'Our free for use online tools.',
            'seo_keywords' => 'responsive images, tools, online, web, changelog, generator, free'
        ]]);
    }

    public function responsiveImages(): Factory|View|Application
    {
        return view('theme::tools.responsive-images', ['seo' => [
            'seo_title' => 'Resonsive images generator',
            'seo_description' => 'Responsive images generation made easily.',
            'seo_keywords' => 'responsive images, image generator, image resonsive, image breakpoints, free, online generator, image tools, srcset, sm, xs, md, lg, 2xl, google lighthouse report'
        ]]);
    }
}
