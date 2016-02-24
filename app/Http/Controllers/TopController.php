<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Exceptions\Handler as Exception;
use Illuminate\Http\Request;
use Log;

class TopController extends Controller
{
    public function index()
    {
        $results = null;
        //$results = $this->client->describeGlobal();
        return view('top.index', ['results' => $results]);
    }
    public function query(Request $req)
    {
        try {
            $query = $req->input('query');
            $res = $this->client->query($query);
            Log::info('Sobject query: '. print_r($res->count(),true));
            $records = $res->getQueryResult()->getRecords();
            if (!$records) throw new \Exception("NOT Found", 404);
            return view('top.query', ['records' => $records, 'query'=> $query]);
        } catch (\Exception $e) {
            header("HTTP/1.0 {$e->getCode()} {$e->getMessage()}");
            return view('error', ['message' => $e->getMessage(), 'code' => $e->getCode() ]);
        }
    }
}
