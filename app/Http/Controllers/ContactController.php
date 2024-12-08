<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        try{

            Mail::to('kveta.prikryl@gmail.com')->send(new SendEmail($data));
            return back()->with('success', 'Odeslání e-mailu proběhlo úspěšně.');

        }catch(Exception $e){
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->witchInput();
        }
        
    }
}
