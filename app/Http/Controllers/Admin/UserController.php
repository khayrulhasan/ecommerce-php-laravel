<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view('admin.user.registration');
    }

    public function storeEmployee(Request $request)
    {
        $data = [
            'first_name' => $request->f_name,
            'last_name' => $request->l_name,
            'phone' => $request->phone,
            'mail' => $request->email,
        ];

        Employee::create($data);

        return redirect()->back();
    }
}
