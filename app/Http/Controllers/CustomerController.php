<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class CustomerController extends Controller
{
    private $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function show()
    {
        $customers = $this->customer->latest()->paginate(10);
        return view('Admin.customer.index', compact('customers'));
    }

    public function index()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {

        if ($customer = $this->customer->create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'customer_address' => $request->customer_address,
            'customer_password' => Hash::make($request->customer_password),
        ])) {
            Mail::send('emails.active_account', compact('customer'), function ($email) use ($customer) {
                $email->subject('Min Store - Xác nhận đăng kí');
                $email->to($customer->customer_email, $customer->customer_name);
            });
            return  redirect()->to('login');
        }
        return  redirect()->to('/register');
    }
}
