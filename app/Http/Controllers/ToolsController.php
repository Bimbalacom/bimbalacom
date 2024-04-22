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
            'keywords' => 'responsive images, tools, online, web, changelog, generator, free'
        ]]);
    }

    public function responsiveImages(): Factory|View|Application
    {
        return view('theme::tools.responsive-images', ['seo' => [
            'seo_title' => 'Resonsive images generator',
            'seo_description' => 'Responsive images generation made easily.',
            'keywords' => 'responsive images, image generator, image resonsive, image breakpoints, free, online generator, image tools, srcset, sm, xs, md, lg, 2xl, google lighthouse report'
        ]]);
    }

    public function keepALog(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('theme::tools.keep-a-log', ['seo' => [
            'seo_title' => 'Keep a log',
            'seo_description' => 'Keep a log of what has been changed in your product.',
            'keywords' => 'keep a log, changelog, changelog generator, free, product tools, product management, what is new, added, removed, version, changed, versioning, markdown, md'
        ]]);
    }
}
