<?php

use App\Models\User;
use App\Filament\Resources\Users\Pages\ListUsers;
use function Pest\Livewire\livewire;

it('can load the page', function () {

    $users = User::factory()->count(1)->create();

    livewire(ListUsers::class)
        ->assertOk()
        ->assertCanSeeTableRecords($users);
});
