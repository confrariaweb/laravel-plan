<?php

namespace ConfrariaWeb\Plan\Traits;

trait PlanTrait
{
    public function plan()
    {
        return $this->belongsTo('ConfrariaWeb\Plan\Models\Plan');
    }
}
