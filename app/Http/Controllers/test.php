<?php

namespace App\Http\Controllers;
use Sheets;
use Illuminate\Http\Request;

class test extends Controller
{
    public function test() {
        $values = Sheets::spreadsheet('1UvdZjvqY6PmpvPe_g6mWtGB_VQmM5ChakD9omCMCIJk')->sheet('แผ่น1')->all();

        return view('welcome',['values'=>$values]);
    }
}
