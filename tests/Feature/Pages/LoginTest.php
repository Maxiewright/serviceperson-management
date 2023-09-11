<?php

use App\Models\User;

use function Pest\Laravel\get;

it('does not show the register route', function () {
    // Act & Assert
    get('/login')
        ->assertOk()
        ->assertDontSeeText('Register')
        ->assertDontSee(route('register'));
});

it('shows the login route', function () {
    // Act & Assert
    get('/login')
        ->assertOk()
        ->assertSeeText('Login')
        ->assertSee(route('login'));
});

it('show the forget password route', function () {
    // Act & Assert
    get('/login')
        ->assertOk()
        ->assertSeeText('Forgot Password?')
        ->assertSee(route('password.request'));
});

it('allows the user to login', function () {
    // Arrange
    $user = User::factory()->create([
        'name' => 'Admin User',
    ]);
    // Act and Assert
    logInAsUser($user)
        ->get(route('pages.dashboard'))
        ->assertOk()
        ->assertSeeText([
            'Admin User',
        ]);
});


