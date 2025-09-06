<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presale;

class ZelleController extends Controller
{
    public function zelle_checkout(Request $request)
    {
        $amount = (int) $request->amount;
        $email = $request->zelle_email;
        $name = $request->zelle_name;
        $phone = $request->zelle_phone;
        $product = $request->zelle_product;

        $presale = new Presale();
            $presale->name = $request->name;
            $presale->email = $request->email;
            $presale->phone = $request->phone;
            $presale->product = $request->product;            
        $presale->save();

        return view('zelle-confirmation')->with('name',$name)
                                            ->with('email',$email)
                                            ->with('phone',$phone)
                                            ->with('product',$product)
                                            ->with('id',$presale->id);

        

    }
}
