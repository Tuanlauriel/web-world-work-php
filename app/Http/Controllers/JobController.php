<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function  index() {
        $jobs = Job::all();
        if ($jobs->isEmpty()) {
            return $this->response(204, "No jobs found.");
        }

        return response()->json($jobs, 200);
    }

    private function response($code, $message)
    {
        return response()->json(["message" => $message], $code);
    }
}
