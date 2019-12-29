<?php

namespace Tests\Unit;

use App\Test;
use PHPUnit\Framework\TestCase;

class ReviveStringTest extends TestCase
{
    /** @test */
    public function all_unique_possible_substrings_can_be_calculated()
    {
        $test = Test::reviveString('dbac', 3);
        $this->assertEquals('c', $test);
    }
}
