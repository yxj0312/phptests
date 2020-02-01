<?php

namespace Tests;

use App\User;
use Tests\utilities\Helper;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use Helper;
    use CreatesApplication;

    /**
     * Sign in as a User.
     */
    protected function signInUser($attributes = [])
    {

        $auth = $this->create(User::class, $attributes);

        $this->actingAs($auth);

        return $auth;
    }
}
