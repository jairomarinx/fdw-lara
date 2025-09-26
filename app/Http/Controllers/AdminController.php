<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function deploy(Request $request)
    {
        $deploy_pass = env('DEPLOY_PASS');
        $pass= $request->query('pass'); 

        if ($pass != $deploy_pass)
        {
            abort(403, 'Unauthorized');
        }

        echo "Hola, estoy haciendo un deploy";

    }
}
