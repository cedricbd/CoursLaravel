<?php 
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
 
class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        return view('confirm');
    }
}