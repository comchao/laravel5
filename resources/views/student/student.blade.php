@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">แสดงข้อมลูนักเรียน</div>
                    <div class="col-xs-12">
                        {!! Form::open(['method'=>'post','url'=>'Searchstu','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                        <a href="{{ url('student/create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="Search" placeholder="Search...">
                            <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"> Search
        </button>
    </span>
                        </div>
                    </div>
                    {!! Form::close() !!}


                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>รหัส</th>
                                <th>ชื่อนักเรียน</th>
                                <th>ตำแหน่ง</th>
                                <th>ลบข้อมูล</th>
                                <th>แก้ไขข้อมูล</th>

                            </tr> @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->stu_id }}</td>
                                    <td>{{ $student->stu_name }}</td>
                                    <td>{{ $student->stu_position}}</td>
                                    <td><a href="{{ url('/student/destroy/'.$student->stu_id)  }}"> <i
                                                    class="fa fatrash"></i> ลบ</a></td>

                                    <td><a href="{{ url('/student/'.$student->stu_id.'/edit')}}"><i
                                                    class="fa fa-pencil"></i>แก้ไข้</a></td>

                                </tr>

                            @endforeach
                        </table>

                        <div class="pagination"> {{ $students->links() }} </div>

                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

 