<?php


namespace App\Support;


use CoffeeCode\Optimizer\Optimizer;
use phpDocumentor\Reflection\Types\String_;

class Seo
{
    private $optimizer;

    public function __construct()
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(env('APP_NAME'),
        'pt_BR',
        'article')->publisher(
            env('CLIENT_SOCIAL_FACEBOOK_PAGE'),
            env('CLIENT_SOCIAL_FACEBOOK_AUTHOR'),
            env('CLIENT_SOCIAL_GOOGLE_PAGE'),
            env('CLIENT_SOCIAL_GOOGLE_AUTHOR')
        )->facebook(
            env('CLIENT_SOCIAL_FACEBOOK_APP')
        );
    }

    public function render()
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
