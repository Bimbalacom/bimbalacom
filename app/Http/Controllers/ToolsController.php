<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Spatie\SchemaOrg\BreadcrumbList;
use Spatie\SchemaOrg\Schema;

class ToolsController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('theme::tools', [
            'seo' => [
                'seo_title' => 'Free tools',
                'seo_description' => 'Our free for use online tools.',
                'keywords' => 'responsive images, tools, online, web, changelog, generator, free'
            ],
            'schema' => $this->generateBreadCrumbSchema()->toScript()
        ]);
    }

    public function responsiveImages(): Factory|View|Application
    {
        return view('theme::tools.responsive-images', [
            'seo' => [
                'seo_title' => 'Resonsive images generator',
                'seo_description' => 'Responsive images generation made easily.',
                'keywords' => 'responsive images, image generator, image resonsive, image breakpoints, free, online generator, image tools, srcset, sm, xs, md, lg, 2xl, google lighthouse report'
            ],
            'schema' => $this->generateBreadCrumbSchema('Responsive images generator', route('tools.responsive-images'))->toScript()
        ]);
    }

    public function keepALog(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('theme::tools.keep-a-log', [
            'seo' => [
                'seo_title' => 'Keep a log',
                'seo_description' => 'Keep a log of what has been changed in your product.',
                'keywords' => 'keep a log, changelog, changelog generator, free, product tools, product management, what is new, added, removed, version, changed, versioning, markdown, md'
            ],
            'schema' => $this->generateBreadCrumbSchema('Keep a log', route('tools.keep-a-log'))->toScript()
        ]);
    }

    /**
     * @param string|null $toolName
     * @param string|null $toolRoute
     * @return BreadcrumbList
     */
    private function generateBreadCrumbSchema(string $toolName = null, string $toolRoute = null): BreadcrumbList
    {
        $indexRoute = route('tools.index');
        $listElements = [
            Schema::listItem()->position(1)->url($indexRoute)->name('Tools')
                ->setProperty('item', $indexRoute)
        ];
        if($toolName !== null){
            $listElements[] = Schema::listItem()->position(2)
                ->url($toolRoute)->name($toolName)
                ->setProperty('item', $toolRoute);
        }

        return Schema::breadcrumbList()
            ->itemListElement($listElements);
    }
}
