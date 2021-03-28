<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Phone;


class ApiController extends Controller
{
    public function getFirstPhone() {
        $firstPhone = Phone::orderBy('id', 'asc')->first();
        dd($firstPhone);
    }
}
