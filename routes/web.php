<?php

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/send-email', function (Request $request) {
    $data = [
        'name' => $request->input('name'),
        'body' => $request->input('body'),
    ];

    $email = env('MAIL_FROM_ADDRESS');

    Mail::to($email)->send(new SendEmail($data));

    return redirect()->back()->with('success', 'Email has been sent successfully.');
    // try {
    // } catch (\Exception $e) {
    //     return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
    // }
});
