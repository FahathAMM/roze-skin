<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreRequest;

class CustomerLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('site.auth.customer-login');
    }

    public function showRegisterForm()
    {
        return view('site.auth.customer-register');
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
            return redirect()->intended('/');
        }

        return back()->withErrors(['mobile' => 'Invalid mobile number or password']);
    }

    public function register(StoreRequest $request)
    {
        try {
            $created  = Customer::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if ($created) {
                logActivity('Customer Create', "Customer ID " . $created->id, 'Create');
                // Auth::guard('customer')->login($created);
                return  $this->response('Customer created successfully', ['data' => $created], true);
            }
        } catch (\Throwable $th) {
            throw $th;
            return  $this->response($th->getMessage(), null, false);
        }
    }


    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/customer/login');
    }
}
