<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Destination;
use Illuminate\Http\Request;

class BookController
{
    public function store(Request $request)
    {
        $destinations = Destination::all();
        foreach ($destinations as $destination)
        {
            if ($request->destination_id == $destination->id) {
                $destination_id = $destination->top_left_country_name ?: $destination->left_country_name ?: $destination->right_country_name;
            }
        }

        $message = <<<TEXT
        Yangi buyurtma!

        Ism-sharifi: <b> {$request->full_name} </b>
        Email manzili: <b> {$request->email} </b>
        Telefon raqami: <b> {$request->phone} </b>
        Ketish sanas: <b> {$request->datetime} </b>
        Ketish manzili: <b> {$destination_id} </b>
        Xabari: <b> {$request->message} </b>
        TEXT;

        $apiToken = '6065090602:AAF108aC2UhmdkWoeoRMHCyRY2gWRRG3Y-U';
        $data = [
            'chat_id' => '-1001941589750',
            'parse_mode' => 'html',
            'text'  =>  $message,
        ];
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));

        Book::create($request->all());

        return redirect()->route('index')->with('success', 'Buyurtmangi muvaffaqiyatli yuborildi!');
    }
}
