@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">แสดงข้อมลูผลการลงทะเบียนเรียน</div>
                    <div class="col-xs-12">

                        {!! Form::open(['method'=>'post','url'=>'enrollresult','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                        <a href="{{ url('createclass') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>

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
                                <th>รหัสห้อง</th>
                                <th>ชื่อนักเรียน</th>
                                <th>ชื่อห้อง</th>
                                <th>วิชาสอน</th>
                                <th>ชื่อครูที่สอน</th>
                                <th>เวลาเริ่มสอน</th>
                                <th>เวลาสิ้นสุดการสอน</th>


                            </tr> @foreach ($enrollresult as $item)
                                <tr>

                                @foreach ($item->student as $student)
                                        <td>{{ $item->class_id}}</td>
                                        <td>{{ $student->stu_name}}</td>


                                    <td>{{ $item->class_name }}</td>
                                    <td>{{ $item->subject->sub_name }}</td>
                                    <td>{{ $item->teachers->tch_name }}</td>
                                    <td>{{ $item->time_start }} .น</td>
                                    <td>{{ $item->time_end  }} .น</td>


                                </tr>
                            @endforeach

                            @endforeach


                        </table>

                        {{-- {!! $teachers->render() !!}--}}

                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

 