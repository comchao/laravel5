@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">แสดงข้อมลูวิชาที่เปิดสอน</div>
                    <div class="col-xs-12">
                        {!! Form::open(['method'=>'post','url'=>'Search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                        <a href="{{ url('Class/create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>
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
                                <th>ชื่อห้อง</th>
                                <th>วิชาสอน</th>
                                <th>ชื่อครูที่สอน</th>
                                <th>เวลาเริ่มสอน</th>
                                <th>เวลาสิ้นสุดการสอน</th>


                            </tr> @foreach ($classstuden as $item)
                                <tr>
                                    <td>{{ $item->class_id}}</td>
                                    <td>{{ $item->class_name }}</td>
                                    <td>{{ $item->subject->sub_name }}</td>
                                    <td>{{ $item->teachers->tch_name }}</td>
                                    <td>{{ $item->time_start }} .น</td>
                                    <td>{{ $item->time_end  }} .น</td>

                                </tr>

                            @endforeach
                        </table>

                        {{-- {!! $teachers->render() !!}--}}

                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

 