<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\TheoDoi;
use App\Jobs\SendEmail;
use App\Repositories\TheoDoi\TheoDoiRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TheoDoiController extends Controller
{
    private $TheoDoi;
    public function __construct(TheoDoiRepository $TheoDoi)
    {
        $this->TheoDoi=$TheoDoi;
    }

    public function store(TheoDoi $request){
        $CheckEmail=$this->TheoDoi->CheckEmail($request->email);
        if (empty($CheckEmail) == false){
            $gui= $this->SendMail($request->email);
        }
        else{
            $CreateEmail=[
                'email'=>$request->email
            ];
            $add=$this->TheoDoi->create($CreateEmail);
            if ($add){
                $gui= $this->SendMail($request->email);
            }
        }
        if (!$gui) {
            return redirect()->back()->with('guilienhe', 'Cảm ơn bạn đã liên hệ cho chúng tôi. Chúng tôi sẽ nhanh chóng phản hồi email của bạn.');
        }else{
            return redirect()->back()->with('guilienhethatbai', 'Gửi thất bại. Bạn vui lòng kiểm tra email');
        }
    }

    public function SendMail($email){
        $message = [
            'type' => 'SPA FBeauty',
            'task' => $email,
            'content' => '[FBeauty]',
        ];
        SendEmail::dispatch($message, $email)->delay(now()->addMinute(1));
    }
}
