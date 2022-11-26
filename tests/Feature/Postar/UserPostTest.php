<?php

namespace Tests\Feature\Postar;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserPostTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function user_cam_publish_post()
    {
        $user = User::factory()->create();

         $this->post("/post/create_post",[
            'user_id' => $user->id,
            'title'   => 'Title',
            'body_md' => 'Body_md',
            'body_html' => 'Body_html',
            'short_url' => 'shsj'
        ])->assertCreated();

    }
}
