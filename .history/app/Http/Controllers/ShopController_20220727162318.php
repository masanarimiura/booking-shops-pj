<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function input(Request $request)
    {
        $postcode = mb_convert_kana($request->postcode, "a");
        if(strlen($postcode) == 7){
            $postcode = substr($postcode ,0,3) . "-" . substr($postcode ,3);
            $items = [
                'first_name' =>$request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $postcode,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ];
            return view('confirm',$items);
        } elseif (strlen($postcode) == 8){
            $items = [
                'first_name' =>$request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $postcode ,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ];
            return view('confirm',$items);
        }
    }

    public function retype(Request $request)
    {
        return redirect('/')->withInput();
    }

    public function store(Request $request)
    {
        $validate_rule = [
            'last_name' => 'required|max:100',
            'first_name' => 'required|max:100',
            'gender' => 'required',
            'email' => 'required|unique:contacts|email',
            'postcode' => 'required|max:8',
            'address' => 'required|max:255',
            'building_name' => 'max:255',
            'opinion' => 'required|max:120',
        ];
        $this->validate($request, $validate_rule);
        $form = [
            'full_name' => $request->last_name.$request->first_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
        ];
        Contact::create($form);
        return redirect('thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }

    public function manage()
    {
        $items = Contact::Paginate(10,['id', 'full_name', 'gender','email', 'opinion']);
        return view('manage', ['items' => $items]);
    }
}
