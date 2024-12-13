<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function confirm(Request $request){
        $contact = $request->only(['first_name', 'last_name', 'gender' , 'email', 'tel1','tel2','tel3', 'address', 'category_id','building', 'detail']);
        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];
        unset($contact['tel1'], $contact['tel2'], $contact['tel3']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request){
        $validatedData = $request -> only(['first_name', 'last_name', 'gender' , 'email', 'tel', 'address', 'building','category_id' ,'detail']);
        $genderMap = [
        '男' => 1,
        '女' => 2,
        'その他' => 3,
        ];
        $contact = [
        'first_name' => $validatedData['first_name'],
        'last_name' => $validatedData['last_name'],
        'gender' => $genderMap[$validatedData['gender']],
        'email' => $validatedData['email'],
        'tel' => $validatedData['tel'],
        'address' => $validatedData['address'],
        'building' => $validatedData['building'],
        'category_id' => $validatedData['category_id'], // `kinds` を `category_id` に対応
        'detail' => $validatedData['detail'], // `content` を `detail` に対応
    ];
        Contact::create($contact);
        return view('thanks');
    }
}
