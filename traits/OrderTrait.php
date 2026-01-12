<?php

namespace App\Models\Concerns;

use App\Scopes\OrderScope;

trait OrderTrait
{
    protected static function bootOrderTrait(): void
    {
        static::addGlobalScope(new OrderScope);
    }
}
