<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  protected $client;
  public function __construct()
  {
    $uinfo = array(getenv('SF_WSDL_FILE'),getenv('SF_API_USER'),getenv('SF_API_USER_PASSWD'),getenv('SF_API_TOKEN'));
    $builder = new \Phpforce\SoapClient\ClientBuilder($uinfo[0],$uinfo[1],$uinfo[2],$uinfo[3]);
    $this->client = $builder->build();
  }
}
