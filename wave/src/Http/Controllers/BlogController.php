<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SchemaOrg\BlogPosting;
use Spatie\SchemaOrg\BreadcrumbList;
use Spatie\SchemaOrg\Schema;
use Wave\Post;
use Wave\Category;

class BlogController extends \App\Http\Controllers\Controller
{
    public function index(Request $request){

        $posts = Post::whereStatus(Post::STATUS_PUBLISHED)->orderBy('created_at', 'DESC')->paginate(6);
        $posts->load(['user']);
        $categories = Category::all();

        $schema = Schema::blog()->url($request->url())->blogPosts($posts->map(function(Post $post) {
           return $this->generetePostSchema($post);
        })->toArray())->toScript().$this->generateBreadCrumbSchema()->toScript();
    	$seo = [
    		'seo_title' => 'Blog',
            'seo_description' => 'Our Blog',
       	];
    	return view('theme::blog.index', compact('posts', 'categories', 'seo', 'schema'));
    }

    public function category($slug, Request $request){

        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $posts = $category->posts()->whereStatus(Post::STATUS_PUBLISHED)->orderBy('created_at', 'DESC')->paginate(6);
        $posts->load(['user']);
        $categories = Category::all();

        $seo = [
            'seo_title' => $category->name . '- Blog',
            'seo_description' => $category->name . '- Blog',
        ];
        $schema = $this->generateBreadCrumbSchema($category)->toScript();
        return view('theme::blog.index', compact('posts', 'category', 'categories', 'seo', 'schema'));
    }

    public function post($category, $slug){

    	$post = Post::where('slug', '=', $slug)->whereStatus(Post::STATUS_PUBLISHED)->firstOrFail();

        $seo = [
            'seo_title' => $post->title,
            'seo_description' => $post->seo_description,
        ];

        $schema = $this->generetePostSchema($post)->toScript().$this->generateBreadCrumbSchema(Category::where('slug', '=', $category)->firstOrFail(), $post)->toScript();
    	return view('theme::blog.post', compact('post', 'seo', 'schema'));
    }

    private function generetePostSchema(Post $post): BlogPosting
    {
        $author = Schema::person()->name($post->user->name)->image(Schema::imageObject()->url($post->user->avatar()))->email($post->user->email)->url(route('wave.profile', $post->user->username));
        return Schema::blogPosting()
            ->name($post->title)
            ->headline($post->title)
            ->url($post->link())
            ->image($post->image())
            ->author($author)
            ->publisher($author)
            ->datePublished($post->created_at)
            ->dateModified($post->updated_at);
    }

    private function generateBreadCrumbSchema(Category $category = null, Post $post = null): BreadcrumbList
    {
        $listElements = [Schema::listItem()->position(1)->url(url('wave.blog'))->name('Blog')];
        if($category !== null){
            $listElements[] = Schema::listItem()->position(2)->url(url('wave.blog.category', [$category->slug]))->name($category->name);
            if($post !== null){
                $listElements[] = Schema::listItem()->position(3)->url(url('wave.blog.post', [$post->slug]))->name($post->title);
            }
        }

        return Schema::breadcrumbList()
            ->itemListElement($listElements);
    }


}
