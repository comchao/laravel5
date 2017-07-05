<?php
/**
 * Created by PhpStorm.
 * User: chaowalitchaoprakhon
 * Date: 06/07/2017
 * Time: 14:19
 */
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\subject;
class SubjectControllers
{

    public function index()
    {


        $subject = subject::all();
        return view('subject/subject', ['subject' => $subject]);

    }




    public function create()
    {
        return view('subject.addsubject'); //แสดงหน้าเพิ่มข้อมูล
    }


    public function addsubject(Request $request)
    {
        $subject = new subject();
        $subject->sub_name = $request->sub_name;
        $subject->sub_unit  = $request->sub_unit ;
        $subject->save();

        $subject = subject::all();
        return view('subject.subject', compact('subject'));
    }



}