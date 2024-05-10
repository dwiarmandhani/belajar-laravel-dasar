<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
// use Illuminate\Support\Env;
use Tests\TestCase;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    public function appEnvTest()
    {
        $app = App::environment();
    }
}
