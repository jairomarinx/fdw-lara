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

/*        if (!hash_equals($signature, $request->header('X-Hub-Signature-256'))) {
            Artisan::call("app:deploy-command");
        $output = Artisan::output();
        return response()->json(['Msg'=> 'Error', 'headers'=>$request->header('X-Hub-Signature-256'), 'FullContent' => $request->getContent() ],403);
        }
*/

        Artisan::call("app:deploy-command");
        $output = Artisan::output();
        return response()->json(['Msg'=> 'Deploy Successfull', 'details'=>$output?? 'Error, returned null the artisan command'],200);
    }
}
