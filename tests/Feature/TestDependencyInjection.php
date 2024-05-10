<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class TestDependencyInjection extends TestCase
{
    public function testDendencyInjection()
    {
        $foo = new Foo();
        $bar = new Bar($foo);
        self::assertEquals('Foo and Bar', $bar->bar());
    }
}
