<?php

use App\Mail\ClassRegistered;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

test('home2 page renders successfully', function () {
    $this->get('/')
        ->assertOk()
        ->assertSeeLivewire('pages::home2');
});

test('home2 page hero section content is present', function () {
    $this->get('/')
        ->assertSee('Running at 200% Effort, and yet…')
        ->assertSee('Still Falling Short of That 100% Life?')
        ->assertSee("Don't Question Your Ambition or Effort.", false)
        ->assertSee('Question Your Hidden Behaviour Blockers.')
        ->assertSee('Break Free')
        ->assertSee('Hidden Burnout')
        ->assertSee('Overthinking Loops')
        ->assertSee('10 Minutes a Day')
        ->assertSee('Without Meditations, Generic Affirmations, or 21-Day Challenges')
        ->assertSee('Early Access members across 5 countries')
        ->assertSee('Unique Behavioural Intelligence framework')
        ->assertSee('45+ gamified activities')
        ->assertSee('15+ years’ experience in transformation', false)
        ->assertSee('Why should you be interested in Yourbeep’s approach to behavioural wellbeing?', false)
        ->assertSee('Science in, jargon out')
        ->assertSee('Proof that the process is working')
        ->assertSee('Built for a full life, not a free one')
        ->assertSee("What You'll Discover in the BSI Masterclass", false)
        ->assertSee('Active Self-Inquiry, Not Passive Calm')
        ->assertSee('Behavioural Wellbeing the Missing Link in Wellness apps')
        ->assertSee('BSI Framework Your Personal Behavioural Intelligence System')
        ->assertSee('BSI Activities Not a Demo. The Real Thing.')
        ->assertSee('The Internal Shift Finds You – No Chase. No BS.', false)
        ->assertSee('The BSI Masterclass')
        ->assertSee('₹299')
        ->assertSee('BSI Framework:')
        ->assertSee('Introduction to the 4-pillar approach')
        ->assertSee('Educational Videos:')
        ->assertSee('Gamified Activities:')
        ->assertSee('Still searching for the right fit?', false)
        ->assertSee("You've probably tried some kind of mental wellness platform", false)
        ->assertSee('Spiritual Groups')
        ->assertSee('Mindfulness Apps')
        ->assertSee('1-1 Counselling')
        ->assertSee('BSI @ Yourbeep')
        ->assertSee('I just need a quick moment to center myself')
        ->assertSee('I want scientifically deconstructed frameworks to label my inner state.')
        ->assertSee('Yourbeep is', false)
        ->assertSee('and that', false)
        ->assertSee('It\'s for the ones who want to understand themselves, not just feel better for a day.', false)
        ->assertSee('Start my BSI Journey')
        ->assertSee('Meet the Architect')
        ->assertSee('About the Founder')
        ->assertSee('Alolika')
        ->assertSee('Senior Leader at a renowned US advisory firm')
        ->assertSee('The academic')
        ->assertSee('Vipassana')
        ->assertSee('The movement practitioner')
        ->assertSee('These aren\'t credentials.', false)
        ->assertSee('Everything You Get Today')
        ->assertSee('The BSI Masterclass')
        ->assertSee('6 Gamified BSI Activities')
        ->assertSee('Your Partial RQ Dashboard')
        ->assertSee('Monthly Founding Member Community Meets')
        ->assertSee('Full Masterclass Fee Credited to the Full Course')
        ->assertSee('Total value')
        ->assertSee('₹2,495')
        ->assertSee('₹299')
        ->assertSee('₹2,196')
        ->assertSee('This price closes soon.')
        ->assertSee('Claim Early Member Price Before It Closes')
        ->assertSee('Got Questions?')
        ->assertSee('Is this a live masterclass or recorded?')
        ->assertSee('The BSI Masterclass is pre-recorded, self-paced, and split into digestible 10-minute segments.')
        ->assertSee('How long do I get access to the materials?')
        ->assertSee('You get 1-year access to the masterclass, guided exercises, and the partial Resonance Quotient (RQ) dashboard.')
        ->assertSee('How is BSI different from standard mindfulness/meditation?')
        ->assertSee('Standard mindfulness teaches you to calm yourself *after* you\'re already stressed.', false)
        ->assertSee('Will this take up a lot of my time?')
        ->assertSee('Not at all. Juggling work and life is hard enough.');
});

test('home2 masterclass form validation works', function () {
    Livewire::test('pages::home2')
        ->set('name', '')
        ->set('email', '')
        ->set('phone', '')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'phone']);
});

test('home2 form registers successfully', function () {
    Mail::fake();

    Livewire::test('pages::home2')
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
