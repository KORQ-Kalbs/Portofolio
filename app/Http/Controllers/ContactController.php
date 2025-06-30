<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw(
            "Nama: {$validated['name']}\nEmail: {$validated['email']}\nPesan:\n{$validated['message']}",
            function ($message) {
                $message->to('bbca5274@gmail.com')
                        ->subject('Pesan dari Form Kontak');
            }
        );

        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
