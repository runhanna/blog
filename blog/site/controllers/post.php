<?php

# Controller for the single post page
return function ($page, $pages, $site, $kirby) {

    # Fetch the page content
    $posts = $kirby->collection('post');
    $post  = $page;
    $title = $post->title()->html();
    $url   = $post->parent()->url();
    $text  = $post->text()->kt();

    # Seo Content
    $metaDescription = r($page->text()->isNotEmpty() && !$page->isHomePage() , $page->text()->excerpt(150)->html() , $site->description()->html());
    $metaTitle       = r($page->isHomePage() , "{$site->title()->html()} - {$site->subtitle()->html()}" , "{$page->title()->html()} - {$site->title()->html()}");

    # Return some data and pass it to the template
    return compact('title' , 'url' , 'text' , 'posts' , 'post' , 'metaDescription' , 'metaTitle');

};