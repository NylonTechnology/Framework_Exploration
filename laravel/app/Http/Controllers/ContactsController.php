<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    //


	public function index()
	{
		$contacts = Contact::all();
		return view('contacts.index', compact('contacts'));
	}


	public function show(Contact $contact)
	{
		return view('contacts.show', compact('contact'));
	}


	public function create()
	{
		return view('contacts.create');
	}

	public function store()
	{
		//
	}


	public function edit(Contact $contact)
	{
		return view('contacts.edit', compact('contact'));
	}

	public function update(Contact $contact)
	{
		//
	}

	public function destroy(Contact $contact)
	{
		//
	}


}
