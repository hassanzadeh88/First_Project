<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\createContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact=Contact::paginate(2);
        return view('admin.contact.index',compact('contact'));
    }

    public function store(createContactRequest $request)
    {
        $request=Contact::create([
           'fullname'=>$request->fullname,
           'email'=>$request->email,
           'comment'=>$request->comment
        ]);
        session()->flash('store','با موفقیت ثبت شد');
        return redirect(url('/'));

    }


    public function show( $contact)
    {
        $contact=Contact::findOrFail($contact);
        return view('admin.contact.show',compact('contact'));
    }

    public function destroy( $contact)
    {
        Contact::destroy($contact);
        session()->flash('delete','اطلاعات موردنظر از دیتابیس پاک شد');
        return redirect()->route('contact.index');
    }
}
