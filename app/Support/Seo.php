<?php


namespace App\Support;


use CoffeeCode\Optimizer\Optimizer;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\String_;

class Seo
{
    private $optimizer;

    public function __construct()
    {

        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            getenv('APP_NAME'),
            'pt_BR',
            'article'
        )->twitterCard(
            getenv('CLIENT_SOCIAL_TWITTER_CREATOR'),
            getenv('CLIENT_SOCIAL_TWITTER_PUBLISHER'),
            getenv('APP_URL')
        )->publisher(
            getenv('CLIENT_SOCIAL_FACEBOOK_PAGE'),
            getenv('CLIENT_SOCIAL_FACEBOOK_AUTHOR'),
            getenv('CLIENT_SOCIAL_GOOGLE_PAGE'),
            getenv('CLIENT_SOCIAL_GOOGLE_AUTHOR')
        )->facebook(
            getenv('CLIENT_SOCIAL_FACEBOOK_APP')
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow)
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
