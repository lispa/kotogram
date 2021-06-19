<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {

        //$user = Auth::user();
        //$id = Auth::id();

        $id = 123;

        $responseData = [
            'menu' => [
                'right' => [
                    'home' => '/',
                    ],
                'left' => [
                    'profile' => '/profile/'. $id . '/',
                    'logout' => '/personal/' . $id . '/logout/'
                ],
            ],
            'user' => [
                'id' => '123',
                'name' => 'Yulia',
            ],
            'info' => [
                'title' => 'Photo\'s wall',
                'phone' => '+7 (914) 903 - 91 - 48',
                'email' => 'info@kotogram.ru'
            ],
            'items' => [
                0 => [
                    'title' => 'Summer holidays',
                    'photo' => 'url',
                    'text' => 'some text about photo',
                ],
                1 => [
                    'title' => 'Summer holidays#2',
                    'photo' => 'url',
                    'text' => 'some text about photo',
                ],
                2 => [
                    'title' => 'Summer holidays#3',
                    'photo' => 'url',
                    'text' => 'some text about photo',
                ],
            ]
        ];

        return response()
            ->view('index', $responseData, 200);
    }
}
