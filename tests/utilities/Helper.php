<?php

namespace Tests\utilities;

trait Helper
{
    public function create($class, $attributes = [], $times = null)
    {
        return factory($class, $times)->create($attributes);
    }

    public function make($class, $attributes = [], $times = null)
    {
        return factory($class, $times)->make($attributes);
    }
}