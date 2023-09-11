<?php

use function Pest\Laravel\get;

it('gets an ok response from the home page', function () {
    // Act & Assert
    get(route('pages.home'))
        ->assertOk();
});

it('gets an ok response from the dashboard page', function () {
    // Act & Assert
    logInAsUser()
        ->get(route('pages.dashboard'))
        ->assertOk();
});