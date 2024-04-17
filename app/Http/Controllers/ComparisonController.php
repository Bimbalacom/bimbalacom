<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\SchemaOrg\BreadcrumbList;
use Spatie\SchemaOrg\Schema;

class ComparisonController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {

    }


    public function canny(Request $request): Factory|View|Application
    {
        $seo = [
            'seo_title' => 'Canny alternative',
            'seo_description' => 'Features and overall product comparison between Bimbala and Canny',
            'keywords' => 'Bimbala, Canny, differences, comparison, 2024, features, product improvement, user feedback, feedback organization, feedback voting, customer relationships, user requests, user ideas, user suggestions, support automation',
        ];
        $schema = $this->generateBreadCrumbSchema('canny', $request->url())->toScript();

        return view('theme::comparison.canny', compact( 'seo', 'schema'));
    }

    /**
     * @param string|null $name
     * @param string|null $url
     * @return BreadcrumbList
     */
    private function generateBreadCrumbSchema(string $name = null, string $url = null): BreadcrumbList
    {
        $listElements = [
            Schema::listItem()->position(1)->url(route('comparison.index'))->name('Comparison')
                ->setProperty('item', route('comparison.index'))
        ];
        if($name !== null){
            $listElements[] = Schema::listItem()->position(2)
                ->url($url)->name($name)
                ->setProperty('item', $url);
        }

        return Schema::breadcrumbList()
            ->name('Comparison Breadcrumbs')
            ->itemListElement($listElements);
    }
}
