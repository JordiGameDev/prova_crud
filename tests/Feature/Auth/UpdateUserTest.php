<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UpdateUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_update()
    {
        $fakeUser = new User([
            'email' => 'test@test.com',
            'password' => 'password',
        ]);
    
        $this->be($fakeUser);

        $secondaryUser = User::factory()->create();
        
        $response = $this->put('/users/'.$secondaryUser->id,
            [
                'name' => $secondaryUser->name,
                'email' => $secondaryUser->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);
        $this->assertAuthenticated();
        $response->assertRedirect(route('users.index'));
    }
}
