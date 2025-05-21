<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $data = $request->only(['name', 'phone', 'email']);

        // Gửi email
        Mail::send('emails.register', $data, function ($message) use ($data) {
            $message->to('tuan.nhadatvn@gmail.com') // Email admin nhận thông tin
                    ->subject('Khách hàng mới đăng ký');
        });

        return back()->with('success', 'Đăng ký thành công!');
    }
}
