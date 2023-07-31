<?php

namespace Tests\Feature\Models;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_it_has_favorite_articles_relationship()
    {
        $user = new User();
        $this->assertInstanceOf(BelongsToMany::class, $user->favoriteArticles());
        $this->assertInstanceOf(Article::class, $user->favoriteArticles()->getRelated());
    }
}
