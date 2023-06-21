<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;

class ContactUsController
{
    public function store(ContactUsRequest $request)
    {
        $message = <<<TEXT
        Mizojdan xabar!

        Ism-sharifi: <b> {$request->full_name} </b>
        Email manzili: <b> {$request->email} </b>
        Sarlovhasi: <b> {$request->subject} </b>
        Xabari: <b> {$request->message} </b>
        TEXT;

        $apiToken = '6065090602:AAF108aC2UhmdkWoeoRMHCyRY2gWRRG3Y-U';
        $data = [
            'chat_id' => '-1001941589750',
            'parse_mode' => 'html',
            'text'  =>  $message,
        ];
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));

        ContactUs::create($request->all());

        return redirect()->route('index')->with('success', 'Message Sent Successfully!');
    }
}
