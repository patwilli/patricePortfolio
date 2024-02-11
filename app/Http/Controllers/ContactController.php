<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\HelloClientMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Swift_Mailer;
use Swift_SmtpTransport;
use Exception;

class ContactController extends Controller
{
    public function sendingMsg(Request $request)
    {
        $nom_prenom = $request->nom_prenom;
        $description = $request->description;
        Mail::to('patricesossavi@gmail.com')->send(new HelloClientMail($nom_prenom, $description));
        $success = "Message envoyé avec succès";
        return redirect()->back()->with('success', $success);
    }
}
