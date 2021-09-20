<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Token;
use App\Notification;
use App\Settings;
use Session;
class NotificationController extends Controller
{
    public function index()
    {   Session::put('page','notification');
        return view('admin.notification');
    }

    

     public function send(Request $request)
    {
        $data = ['title' => $request->title, 'message' => $request->message, 'url' => $request->url, 'image_url' => $request->image_url];

        return $this->sendNotification($data);
    }



	public function sendNotification($notificationObj)
    {


        $settings = Settings::find(1);
        $SERVER_API_KEY = $settings->app_fcm_key;


        $device_tokensArrObj = Token::all('device_token');
        $deviceTokenArray = [];
        foreach ($device_tokensArrObj as $tokenObj) {
            array_push($deviceTokenArray, $tokenObj['device_token']);
        }




        $data = [
            "registration_ids" => $deviceTokenArray,
            "notification" => [
                "body" => $notificationObj['message'],
                "title" => $notificationObj['title'],
                "image" => $notificationObj['image_url'],
                "click_action" => '.activity.NewsLoadActivity'



            ],

            "data" =>
            ["url" =>  $notificationObj['url']]

        ];

        // $data = ['message' => ['notification' => ['body' => 'dsd', 'title' => '2.34'], 'token' => $device_token]];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        // curl_close($ch);


        // return
        //     $response;

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }
        curl_close($ch);

        if (isset($error_msg)) {
            return response()->json('error catched');
        } else {

            $notification = new Notification();
            $notification->title = $notificationObj['title'];
            $notification->message = $notificationObj['message'];
            $notification->url = $notificationObj['url'];
            $notification->image_url = $notificationObj['image_url'];

            $notification->save();


            return redirect()->back()->with('message', 'notification sent');
        }
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
}