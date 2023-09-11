<?php

use function Pest\Laravel\get;

it('shows login route if not logged in', function () {
    // Act & Assert
    get(route('pages.home'))
        ->assertOk()
        ->assertSeeText('Login')
        ->assertSee(route('login'));
});

it('show logout route if logged in', function () {
    // Act and Assert
    logInAsUser()
        ->get(route('pages.home'))
        ->assertOk()
        ->assertSeeText('Log Out')
        ->assertSee(route('logout'));
});
