<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classstuden;
use App\teachers;
use App\subject;
use App\student;
use App\Http\Requests\ClassStudenRepequest;




class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $classstuden = classstuden::with('subject','teachers','student')->get();  //subject มาจากความสำพันธ์ จาก classstuden Model  public function subject()

        return view('classstuden/classstudent', ['classstuden' => $classstuden]);





    }

    public function enrollresult()
    {


        $enrollresult = classstuden::with('subject','teachers','student')->get();
//        dd($enrollresult[0]->student[0]->stu_name);//subject มาจากความสำพันธ์ จาก classstuden Model  public function subject()
        return view('classstuden/EnrollResult', ['enrollresult' => $enrollresult]);





    }


    public  function Searchenrollresult(Request $request)
    {
        $name = $request->get('Search');


        $enrollresult = classstuden::whereHas('student',function($q) use($name){
            $q->where('stu_name', 'LIKE', "%$name%");})->get();

        return view('classstuden/EnrollResult', ['enrollresult' => $enrollresult]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $teachers = teachers::all();
        $subject = subject::all();
        return view('classstuden.addclassstudent', compact('teachers','subject'));
    }












    public function createclass()
    {
        $student = student::all();
        $classstuden = classstuden::with('subject')->get();  //subject มาจากความสำพันธ์ จาก classstuden Model  public function subject()

        return view('classstuden/createclasss', ['classstuden' => $classstuden,'student'=> $student]);
    }


    public function store(Request $request)
    {
        $classstuden = new classstuden();
        $classstuden->class_name = $request->class_name;
        $classstuden->time_start = $request->time_start;
        $classstuden->time_end  = $request->time_end;
        $classstuden->tch_id = $request->tch_id;
        $classstuden->sub_id = $request->sub_id;
        $classstuden->save();
        return redirect()->action('ClassController@index');
    }

    public function storeclassStuden(Request $request)
    {

        $class_id = $request->get('class_id');
        $stu_id = $request->get('stu_id');
        $classstuden= classstuden::find($class_id);
        $student= student::find($stu_id);
        if($classstuden&&$student) {
            $classstuden->student()->attach($student);
            $classstuden->save();

            return redirect()->action('ClassController@enrollresult');


        }
    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public  function Search(Request $request)
    {
        $name = $request->get('Search');
        $classstuden = classstuden::whereHas('subject',function($q) use($name){
            $q->where('class_name', 'LIKE', "%$name%")
                ->orWhere('sub_name', 'LIKE', "%$name%");})->get();

        return view('classstuden/classstudent', ['classstuden'=>$classstuden]);

    }





}
