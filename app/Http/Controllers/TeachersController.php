<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\teachers;
use App\Http\Requests\TeacherRequest;
use Intervention\Image\ImageManagerStatic as Image;


class TeachersController extends Controller
{

    //function แสดงข้อมูล teachers
    public function index()
    {

        $teachers = teachers::paginate(5);
        return view('teachers.index', compact('teachers'));


    }

    public  function SearchTeachers(Request $request)

    {
        $name = $request->get('Search');
        $teachers = teachers::where('tch_name', 'LIKE', "%$name%")->paginate(5);
        return view('teachers/index', ['teachers' => $teachers]);
    }



    //สำหรับลบข้อมูลครู
    public function destroy($tch_id)
    {
        teachers::destroy($tch_id);
        return back();
    }
    //สิ้นสุดสำหรับลบข้อมูลครู


    //ปุ่มเพิ่มข้อมูลครู
    public function create()
    {
        return view('teachers.create'); //แสดงหน้าเพิ่มข้อมูล
    }

    public function store(TeacherRequest $request)
    {
        $teachers = new teachers();
        $teachers->tch_name = $request->tch_name;          //ชื่อครู
        $teachers->tch_position = $request->tch_position;  //ตำแหน่งครู
        $teachers->tch_username = $request->tch_username;  //ชื่อผู้ใช้
        $teachers->tch_password = $request->tch_password;  //รหัสผู้ใช้
        $teachers->tch_birth = $request->tch_birth;        //วันเกิด
        $teachers->tch_address = $request->tch_address;  //ที่อยู่
        $teachers->tch_phone = $request->tch_phone;      //เบอร์โทร

        if ($request->hasFile('image')) {
            $teachers = str_random(10) . '.' . $request->file('image') > getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $teachers);
            Image::make(public_path() . '/images/' . $teachers)->resize(50, 50) > save(public_path() . '/images/resize/' . $teachers);
            $teachers->tch_image = $teachers;
        } else {
            $teachers->tch_image = 'nopic.jpg';
        }

        $teachers->save();
        return redirect()->action('TeachersController@index');
    }
    //สิ้นสุดปุ่มเพิ่มข้อมูลครู

    //รับค่าเพื่อแสดงหน้าแก้ไขข้อมูลของครู
    public function edit($tch_id)
    {
        $teachers = teachers::findOrFail($tch_id);
        return view('teachers.EditTeacher', ['teachers' => $teachers]);
    }//สิ้นสุดรับค่าเพื่อแสดงหน้าแก้ไขข้อมูลของครู

    //ส่วนของupdateข้อมูลที่แก้ไข
    public function update(TeacherRequest $request, $tch_id)
    {
        $teachers = teachers::find($tch_id);
        $teachers->tch_name = $request->tch_name;
        $teachers->tch_position = $request->tch_position;
        $teachers->tch_username = $request->tch_username;
        $teachers->tch_password = $request->tch_password;
        $teachers->tch_birth = $request->tch_birth;
        $teachers->tch_address = $request->tch_address;
        $teachers->tch_phone = $request->tch_phone;
        $teachers->update($request->all());
        return redirect()->action('TeachersController@index');
    }


}


