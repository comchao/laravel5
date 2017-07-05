@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?= link_to('subject/create', $title = 'เพิ่มข้อมูล', ['class' => 'btn btn-primary'], $secure = null); ?>


                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">แสดงข้อมูลวิชา</div>


                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>ลำดับ</th>
                                <th>วิชาสอน</th>
                                <th>หน่วยกิจ</th>


                            </tr>
                            @foreach ($subject as $itme)

                                <tr>
                                    <td>{{ $itme->sub_id}}</td>
                                    <td>{{ $itme->sub_name }}</td>
                                    <td>{{ $itme->sub_unit}}</td>

                                </tr>

                            @endforeach
                        </table>

                        {{-- {!! $teachers->render() !!}--}}

                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

 