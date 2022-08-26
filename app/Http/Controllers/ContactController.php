<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(Request $request)
    {
      if($request->sortIndex == 'hide') {
          $contacts = Contact::where('is_checked', "=", 0)->orderBy('id', 'desc')->simplePaginate(15);
      } else {
          $contacts = Contact::orderBy('id', 'desc')->simplePaginate(15);
      }
      return view('contacts/index', ['contacts' => $contacts]);
    }

  public function store(Request $request)
    {
      $contact = new Contact;
      $validated = $request->validate([
          'name' => 'required',
          'email' => 'required|max:50',
          'content' => 'required|max:400',
        ]);
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->content = $request->content;

      $contact->save();

      return redirect('contact_form');
    }

  public function show($id)
    {
      $contact = Contact::find($id);
      return view('contacts.show', ['contact' => $contact]);
    }

  public function update(Request $request, $id)
    {
      $contact = Contact::find($id);

      $contact->is_checked = $request->is_checked;
      $contact->update();

      return redirect('inbox');
    }
}