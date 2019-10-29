<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function getSuport(){
        return view('admin/support');
    }
    public function sendMailSupport(Request $request){
        // $data = [
        //     "name"      => 'TuanAnh Dinh',
        //     "phone"     => '01212162360',
        //     "message"   => 'Nội dung email',
        // ];

        // Mail::send('admin.sendmail', $data, function ($message) {
        //     $message->from('tuananhdinh.vn@gmail.com', 'Khách hàng yêu cầu');
        //     // $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to('tuananh.a.bk@gmail.com', 'Me');
        //     // $message->cc('john@johndoe.com', 'John Doe');
        //     // $message->bcc('john@johndoe.com', 'John Doe');
        //     // $message->replyTo('john@johndoe.com', 'John Doe');
        //     $message->subject('Thư test');
        //     // $message->priority(3);
        //     // $message->attach('pathToFile');
        // });

        return back();

    }
}
