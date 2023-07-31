<?php

namespace Tests\Feature\Models;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    public function test_an_article_has_an_author()
    {
        $article = new Article();

        $this->assertInstanceOf(BelongsTo::class, $article->user());
        $this->assertInstanceOf(User::class, $article->user()->getRelated());
    }

    public function test_it_can_be_favorited_by_users()
    {
        $article = new Article();

        $this->assertInstanceOf(BelongsToMany::class, $article->favorites());
        $this->assertInstanceOf(User::class, $article->favorites()->getRelated());
    }
}
