<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cart;
use Mail;

use App\model\LayoutContactModel;

use App\Http\Requests\SendMailContactRequest;

class ContactController extends Controller
{
    public function getContact(){
        $data['cart_items']     = Cart::content();
        $data['cart_count']     = Cart::count();
        $data['cart_get_total'] = Cart::total();
        
        $data['contact_item']   = LayoutContactModel::find(1);
        
        return view('frontend.contact', $data);
    }

    public function sendMail(SendMailContactRequest $request){

        $data = [
            'name'      => $request->contact_name,
            'email'     => $request->contact_email,
            'phone'     => $request->contact_phone,
            'content'   => $request->contact_content,
        ];

        Mail::send('mail.contact', $data, function ($message) {
            $message->from('tuananhdinh.vn@gmail.com', 'TuanAnh Dinh');
            $message->to('tuananh.a.bk@gmail.com', 'Customer');
            $message->subject('Khách hàng liên hệ');
        });

        return redirect('contact')->with('sent_mail', 'Email đã được gửi, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
    }
}
