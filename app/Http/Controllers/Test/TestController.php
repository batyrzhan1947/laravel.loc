<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
  public function test(){
    return __FILE__;
  }
}
