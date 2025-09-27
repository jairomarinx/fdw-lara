<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function deploy(Request $request)
    {
        $deploy_pass = env('DEPLOY_PASS');
        $pass= $request->input('pass'); 

        if ($pass != $deploy_pass)
        {
            abort(403, 'Unauthorized');
        }

        Artisan::call("app:deploy-command");
        return response("Deploy Completed",200);
    }
}
