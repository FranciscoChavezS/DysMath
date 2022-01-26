<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getDownload()

    {
       
        $file= public_path(). "/D680290C2B277FDEEA9CEEB4621C8D1A.txt";
     
    $headers = [
                  'Content-Type' => 'application/txt',
               ];

     return response()-> download($file, 'D680290C2B277FDEEA9CEEB4621C8D1A.txt', $headers);
    
    }
}
