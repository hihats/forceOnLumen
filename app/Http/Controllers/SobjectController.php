<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Laravel\Lumen\Exceptions\Handler as Exception;

class SobjectController extends Controller
{
    public function describe($name)
    {
        $results = $this->client->describeSObjects(array($name));
        return view('sobject.describe', ['results' => $results, 'objName' => $name ]);
    }
    public function show($oid, $objName)
    {
        try {
            $client = $this->client->query("SELECT Id, {$objName}.Name,isDeleted FROM {$objName} WHERE Id = '$oid'");
            $records = $client->getQueryResult()->getRecords();
            if (!$records) throw new \Exception("NOT Found", 404);
            return view('sobject.show', ['records' => $records, 'objName' => $objName ]);
        } catch (\Exception $e) {
            header("HTTP/1.0 {$e->getCode()} {$e->getMessage()}");
            return view('error', ['message' => $e->getMessage(), 'code' => $e->getCode() ]);
        }
    }
}
