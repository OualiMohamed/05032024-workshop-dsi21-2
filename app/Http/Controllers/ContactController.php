<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact() {
        $c1 = new Contact();
        $message = $c1->getContact();
        return view("contact", ['msg' => $message]);
    }
}
