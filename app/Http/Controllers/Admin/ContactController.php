<?php


namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.email.index', [
            'emails' => Contact::all(),
        ]);
    }

    /**
     * Создание нового пользователя
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.email.create');
    }

    /**
     * Сохранение пользователя
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);


        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {

        $email = Contact::find($id);
        if (0 == $email->status) {
            $email->status = 1;
            $email->save();
        }

        return view('admin.email.edit', [
            'email' => $email,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $email = Contact::find($id);

        $this->validate($request, [
            'name' => 'required',
        ]);

        $email->edit($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->remove();

        return redirect()->route('admin.email.index');
    }
}