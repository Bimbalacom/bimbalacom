<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\SitemapGenerator;
use function in_array;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs
        SitemapGenerator::create(config('app.url'))
            ->shouldCrawl(function (UriInterface $url) {
                $blackList = [
                    '/',
                    '/sitemap.xml',
                    '/discord',
                    '/register'
                ];

                return !in_array($url->getPath(), $blackList);
            })
            ->writeToFile(public_path('sitemap.xml'));
    }
}
