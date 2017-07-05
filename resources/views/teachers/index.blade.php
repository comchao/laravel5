@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">แสดงข้อมลูอาจารย์</div>
                    <div class="col-xs-12">

                        {!! Form::open(['method'=>'post','url'=>'SearchTeachers','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                        <a href="{{ url('teachers/create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>

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
                                <th>ชื่อครู</th>
                                <th>ตำแหน่ง</th>
                                <th>ลบข้อมูล</th>
                                <th>แก้ไขข้อมูล</th>

                            </tr>     @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->tch_id }}</td>
                                    <td>{{ $teacher->tch_name }}</td>
                                    <td>{{ $teacher->tch_position }}</td>
                                    {{--<td> <a href="{{ asset('images/'.$teacher->image) }}"><img src="{{ asset('images/'.$teacher->tch_image) }}" width="40" height="40"> </a>  <td>--}}
                                    <td><a href="{{ url('/teachers/destroy/'.$teacher->tch_id)  }}"> <i
                                                    class="fa fatrash"></i> ลบ</a></td>
                                    <td><a href="{{ url('/teachers/'.$teacher->tch_id.'/edit')}}"><i class="fa fa-pencil"></i>แก้ไข้</a></td>

{{--

--}}

                                </tr>

                            @endforeach
                        </table>

                        <div class="pagination"> {{ $teachers->links() }} </div>


                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

 