<?php

namespace App\Http\Controllers;
use TheCodingMachine\GraphQLite\Annotations\Query;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * @Query
     * @return \App\User
     */
    public function greetings(string $message): \App\User
    {
        //return $message;
        $user = \App\User::find(1);
        //dd($user);
        return $user;
    }
}
