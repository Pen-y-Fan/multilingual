<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Tests\TestCase;

class LanguageTest extends TestCase
{
    public function test_the_default_language_is_english(): void
    {
        $response = $this->get('/lang/home');

        $response->assertOk();
        $response->assertSee('This is English Language Title.');
        $this->assertSame('en', App::getLocale());
    }

    public function test_the_language_can_be_set_to_spanish(): void
    {
        $spanishMessage = "du titre en langue espagnole.";

        session()->put('locale', 'sp');
        $response = $this->get('/lang/home');

        $response->assertOk();
        $response->assertSee($spanishMessage, false);
        $response->assertSee('<option value="sp" selected>Spanish</option>', false);
        $this->assertSame('sp', App::getLocale());
    }

    public function test_the_language_can_be_set_to_french(): void
    {
        $frenchMessage = "Ceci est le titre fr langue anglaise.";
        session()->put('locale', 'fr');
        $response = $this->get('/lang/home');

        $response->assertOk();
        $response->assertSee($frenchMessage, false);
        $response->assertSee('<option value="fr" selected>France</option>', false);
        $this->assertSame('fr', App::getLocale());
    }



}
