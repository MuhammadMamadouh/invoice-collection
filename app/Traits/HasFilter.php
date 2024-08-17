<?php

namespace App\Traits;

trait HasFilter{

    public function scopeFilter($builder,$filter){
        return $filter->apply($builder);
    }

}
