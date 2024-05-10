<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;

use Tests\TestCase;

class testConfig extends TestCase
{
    public function config()
    {
        $firstname = config('contoh.author.firstName');
        $lastname = config('contoh.author.lastName');
        $email = config('contoh.email');
        // $firstname = config()
        // self::assertEquals()
        self::assertEquals('Dwi', $firstname);
        self::assertEquals('Armandhani', $lastname);
        self::assertEquals('dwiar55.arman@gmail.com', $email);
        // self::assertEquals()
    }
}
