<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $fullname = 'chaowalit chaoprakhon';
      $website = 'chaowalitchaoprakhon.@gmail.com';
      return view('about' , [

                             'fullname' => $fullname,
                             'website' => $website
/*
          เราสามารถส่งตัวแปร และข้อมูลทีต้องการเพือไปแสดงผลในหน้า
View ได้ หากมีตัวแปรทีต้องการส่งหลายตัวก็ให้
คันด้วยเครืองหมายคอมม่า
โดยในตัวอย่างจะส่งตัวแปร $fullname และ $website เพือไปแสดงผลทีหน้า
View
(about.blade.php)*/
        ]);

    }
}
