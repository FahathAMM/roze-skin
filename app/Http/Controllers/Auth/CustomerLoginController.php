<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CustomerLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.customer-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'password' => 'required',
        ]);

        $customer = Customer::where('mobile', $request->mobile)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            Auth::guard('customer')->login($customer);
            return redirect()->intended('/customer/dashboard');
        }

        return back()->withErrors(['mobile' => 'Invalid mobile number or password']);
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/customer/login');
    }
}
