<?php

namespace App\Http\Controllers;

class ExampleController extends ApiController
{

    public function index()
    {
        return $this->response()->success([]);
    }

}
