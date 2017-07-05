<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\Http\Requests\StoreStudentRequest;
class StudentController extends Controller
{
    public function index()
    {

        $students = student :: join('classview','classview.stu_id' ,'=','student.stu_id')
            ->select('student.stu_id','classview.class_id')
            ->where('student.stu_id', 1)->get();

        return  response() ->json([$students]);




        /*return view('student.student', compact('students'));*/


     /*  return view('student.student', compact('students'));*/

       /* return  response()->json([$students]);
        return Response::json(array(view('student.student')->with('students',$students);*/



    }
//555


    public  function SearchStudent(Request $request)
    {

        $name = $request->get('Search');

        $students = student::where('stu_name', 'LIKE', "%$name%")->paginate(5);

        return view('student.student', ['students' => $students]);

    }


    //ปุ่มเพิ่มข้อมูลนักเรียน
    public function create()
    {
        return view('student.create');

        //สิ้นสุดเพิ่มข้อมูลนักเรียน
    }


    public function destroy($stu_id)
    {
        student::destroy($stu_id);
        return back();
    }
    public function store(StoreStudentRequest $request)
    {
        $student = new student();
        $student->stu_name = $request->stu_name;          //ชื่อครู
        $student->stu_position = $request->stu_position;  //ตำแหน่งครู
        $student->stu_username = $request->stu_username;  //ชื่อผู้ใช้
        $student->stu_password = $request->stu_password;  //รหัสผู้ใช้
        $student->stu_birth = $request->stu_birth;        //วันเกิด
        $student->stu_address = $request->stu_address;  //ที่อยู่
        $student->stu_phone = $request->stu_phone;      //เบอร์โทร

        if ($request->hasFile('image')) {
            $student = str_random(10) . '.' . $request->file('image') > getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $student);
            Image::make(public_path() . '/images/' . $student)->resize(50, 50) > save(public_path() . '/images/resize/' . $student);
            $student->stu_image = $student;
        } else {
            $student->stu_image = 'nopic.jpg';
        }

        $student->save();
        return redirect()->action('StudentController@index');
    }
    //สิ้นสุดปุ่มเพิ่มข้อมูลครู
    public function edit($stu_id)
    {
        $student = student::findOrFail($stu_id);
        return view('student.EditStudant', ['student' => $student]);
    }//สิ้นสุดรับค่าเพื่อแสดงหน้าแก้ไขข้อมูลของครู

    //ส่วนของupdateข้อมูลที่แก้ไข
    public function update(StoreStudentRequest $request,$stu_id)
    {
        $student = student::find($stu_id);
        $student->stu_name = $request->stu_name;
        $student->stu_position = $request->stu_position;
        $student->stu_username = $request->stu_username;
        $student->stu_password = $request->stu_password;
        $student->stu_birth = $request->stu_birth;
        $student->stu_address = $request->stu_address;
        $student->stu_phone = $request->stu_phone;
        $student->update($request->all());
        return redirect()->action('StudentController@index');
    }









}
