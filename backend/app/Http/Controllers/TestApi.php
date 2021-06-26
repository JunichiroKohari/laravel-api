<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class TestApi extends BaseController
{
    public function test()
    {
        return response()->json("{test:'test'}");
    }
}
