<?php

namespace ConfrariaWeb\Plan\Services;

use ConfrariaWeb\Plan\Models\Plan;

class PlanService
{
    public $response;

    public function __construct()
    {
        $this->response = collect(['obj' => Plan::class, 'error' => false, 'message' => '']);
    }

    public function all(){
        return Plan::all();
    }

    public function create($data){
        $plan = Plan::create($data);
        $this->response->put('obj', $plan);
        return $this->response;
    }

}
