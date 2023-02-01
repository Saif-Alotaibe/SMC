<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class CommonController extends Controller
{
    public function login(Request $request)
    {
        // Redis::set("email", $request->email);
        $isSeller = $request->type === 'Seller';
        if($isSeller){
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(Auth::guard('sellers')->attempt($credentials))
                $request->session()->regenerate();
        }else{
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(Auth::guard('buyers')->attempt($credentials))
                $request->session()->regenerate();
        }
        
        return redirect("/");
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'required',
            'phone_number' => 'required'
        ]);

        $isSeller = $request->type === 'Seller';
        $input = $request->except(['type']);
        $input['password'] = bcrypt($input['password']);
        if ($isSeller)
            Seller::create($input);
        else
            Buyer::create($input);

        return redirect("/");
    }

    public function logout(Request $request){
        if(Auth::guard('sellers')->check())
            Auth::guard("sellers")->logout();
        else
            Auth::guard("buyers")->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect("/");
    }
}
