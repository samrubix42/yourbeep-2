<?php

use App\Mail\ClassRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

test('home page renders successfully', function () {
    $this->get('/')
        ->assertOk()
        ->assertSeeLivewire('pages::home2');
});

test('courses page renders successfully', function () {
    if (!Route::has('courses.index')) {
        $this->markTestSkipped('Courses route is disabled.');
    }

    $this->get('/courses')
        ->assertOk()
        ->assertSeeLivewire('pages::home');
});

test('masterclass form validation works', function () {
    Livewire::test('pages::home')
        ->set('name', '')
        ->set('email', '')
        ->set('phone', '')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'phone']);
});

test('form registers successfully', function () {
    Mail::fake();

    Livewire::test('pages::home')
        ->set('name', 'Amit Sharma')
        ->set('email', 'amit@gmail.com')
        ->set('phone', '9876543210')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('success', true)
        ->assertSet('price', 299)
        ->assertRedirect('https://www.yourbeep.com/courses/6a41f00fdc0af597eb154d43/pricing');

    Mail::assertSent(ClassRegistered::class);
});
