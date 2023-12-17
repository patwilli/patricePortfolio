<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendingMsg(Request $request)
    {
        $mon_email = "patricesossavi@gmail.com";
        $nom_prenom = $request->nom_prenom;
        $telephone = $request->telephone;
        $email = $request->email;
        $message = $request->message;
        // return view('mail-contact', compact(
        //     'nom_prenom',
        //     'telephone',
        //     'email',
        //     'message'
        // ));
        Mail::to($mon_email)->send(new ContactMail($nom_prenom, $telephone, $email, $message));

        // try {
        //     Mail::to($mon_email)->send(new ContactMail($nom_prenom, $telephone, $email, $message));
        //     return 'mail envoyé avec succes !';
        // } catch (\Exception $e) {
        //     return 'échec !';
        // }
    }
}
