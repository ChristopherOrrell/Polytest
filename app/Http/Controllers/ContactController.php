<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Address;


class ContactController extends Controller
{

  public function index() {
    $contacts = Contact::all();

    return view('welcome',compact('contacts'));
  }

}
