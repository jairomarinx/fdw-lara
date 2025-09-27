<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function deploy(Request $request)
    {
        $deploy_pass = env('DEPLOY_PASS');
        $signature = 'sha256=' . hash_hmac('sha256', $request->getContent(), $deploy_pass);

        if (!hash_equals($signature, $request->header('X-Hub-Signature-256'))) {
            abort(403, 'Invalid signature');
        }

        Artisan::call("app:deploy-command");
        return response("Deploy Completed",200);
    }
}
