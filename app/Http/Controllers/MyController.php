<?php

namespace App\Http\Controllers;

use TheCodingMachine\GraphQLite\Annotations\Query;

class MyController extends Controller
{
    
    /**
     * @Query
     */
    public function hello(string $name): string
    {
        return 'Hello ' . $name;
    }
}
