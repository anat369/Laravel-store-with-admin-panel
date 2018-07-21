<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function contactForm(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:250',
            'description' => 'required|max:2000',
            'email' => 'required|email',
        ]);

        $phone = preg_replace("/[^,.0-9]/", '', $request->phone);

        DB::table('mail_admin')->insert([
            'name' => $request->name,
            'phone' => $phone,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('status', 'Сообщение успешно отправлено!');
    }
}
