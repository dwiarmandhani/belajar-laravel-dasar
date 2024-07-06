<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $author = Env::get('AUTHOR', 'dwi');
        self::assertEquals('dwi', $author);
    }

    public function testDependency()
    {
        $foo = new Foo();
        $bar = new Bar($foo);
        self::assertEquals('Foo and Bar', $bar->bar());
    }
}
