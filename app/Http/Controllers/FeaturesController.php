<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\SchemaOrg\BreadcrumbList;
use Spatie\SchemaOrg\Schema;

class FeaturesController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function index(Request $request): Factory|View|Application
    {
        return view('theme::features', [
            'seo' => [
                'seo_title' => 'Features',
                'seo_description' => 'Check out our features'
            ],
            'schema' => $this->generateBreadCrumbSchema()->toScript()
        ]);
    }

    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function upvote(Request $request): Factory|View|Application
    {
        return view('theme::features.upvote', [
            'seo' => [
                'seo_title' => 'Upvote',
                'seo_description' => 'Let your users give you product improvement suggestions, bringing their feedback to a next level',
                'keywords' => 'upvote, product improvement, customer feedback, feedback organization, feedback voting, customer relationships, user requests, user ideas, user suggestions, support automation'
            ],
            'schema' => $this->generateBreadCrumbSchema('Upvote', route('features.upvote'))->toScript()
        ]);
    }

    /**
     *
     * @param Request $request
     * @return Factory|View|Application
     */
    public function faq(Request $request): Factory|View|Application
    {
        return view('theme::features.faq', [
            'seo' => [
                'seo_title' => 'FAQ',
                'seo_description' => 'Provide answers to all common questions',
                'keywords' => 'FAQ, frequently asked questions, frequently asked questions portal, collapsible FAQ, FAQ panel, support automation'
            ],
            'schema' => $this->generateBreadCrumbSchema('FAQ', route('features.faq'))->toScript()
        ]);
    }

    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function roadmap(Request $request): Factory|View|Application
    {
        return view('theme::features.roadmap', [
            'seo' => [
                'seo_title' => 'Product Roadmap',
                'seo_description' => 'Show your users their opinion matters, visualizing the progress on their requests',
                'keywords' => 'roadmap, product roadmap product improvement, product transparency, customer feedback, feedback organization, customer relationships, user requests, user ideas, user suggestions, product building, board, kanban'
            ],
            'schema' => $this->generateBreadCrumbSchema('Roadmap', route('features.roadmap'))->toScript()
        ]);
    }

    /**
     * @param string|null $featureName
     * @param string|null $featureRoute
     * @return BreadcrumbList
     */
    private function generateBreadCrumbSchema(string $featureName = null, string $featureRoute = null): BreadcrumbList
    {
        $indexRoute = route('features.index');
        $listElements = [
            Schema::listItem()->position(1)->url($indexRoute)->name('Features')
                ->setProperty('item', $indexRoute)
        ];
        if($featureName !== null){
            $listElements[] = Schema::listItem()->position(2)
                ->url($featureRoute)->name($featureName)
                ->setProperty('item', $featureRoute);
        }

        return Schema::breadcrumbList()
            ->itemListElement($listElements);
    }
}
