<?php

namespace Tests;

use Tests\utilities\Helper;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use Helper;
    use CreatesApplication;
}
