<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use PulkitJalan\GeoIP\GeoIP;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('index');
    }
    public function postHome(Request $rq)
    {
        $count  = 0;
        $emails = Email::all();
        foreach ($emails as $value) {
            if ($rq->email == $value->email) {
                $count++;
            }
        }
        if ($count > 0) {
            return redirect('/');
        } else {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_FORWARDED'])) {
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            } else if (isset($_SERVER['REMOTE_ADDR'])) {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            } else {
                $ipaddress = 'UNKNOWN';
            }

            $geoip = new GeoIP();
            $geoip->setIp($ipaddress);
            $nation = $geoip->getCountry();

            $code       = rand(100000, 999999);
            $codeChecks = Email::all();
            foreach ($codeChecks as $value) {
                if ($code = $value->code) {
                    $code = rand(100000, 999999);
                }
            }

            $email                = new Email();
            $email->email         = $rq->email;
            $email->code          = $code;
            $email->referral_code = $rq->code;
            $email->ip            = $ipaddress;
            $email->nation        = $nation;
            $email->save();
            return view('index_popup', ['referral_code' => $email->code]);
        }

    }
    public function checkMail(Request $rq)
    {
        $count  = 0;
        $emails = Email::all();
        foreach ($emails as $value) {
            if ($rq->email == $value->email) {
                $count++;
            }
        }
        if ($count > 0) {
            return "false";
        } else {
            return "true";
        }
    }
}
