<?php

namespace App\Http\Controllers;

class TopController extends Controller
{
  public function index()
  {
    $results = $this->client->describeGlobal();
    return view('top.index', ['results' => $results->sobjects]);
  }
}
