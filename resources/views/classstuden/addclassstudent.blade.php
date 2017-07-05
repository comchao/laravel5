@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">จัดตารางเรียน</div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'Class','files' => true)) !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label>รายวิชา</label>
                            <select name="sub_id" class="form-control">
                                <option ></option>
                                @foreach ($subject as $subjects)
                                    <option value="{{ $subjects->sub_id }}">{{ $subjects->sub_name  }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label>ครูผู้สอน</label>

                            <select name="tch_id" class="form-control" >
                                <option ></option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->tch_id }}">{{ $teacher->tch_name }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>ห้องสอน</label>
                                <select name="class_name" class="form-control" >
                                    <option> </option>
                                    <option>ห้องเรียนA </option>
                                    <option> ห้องเรียนB  </option>
                                    <option>ห้องเรียนC </option>
                                    <option>ห้องเรียนD  </option>

                                </select>


                            </div>
                        </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label>เวลาเริ่ม</label>
                            <input name="time_start" class="form-control" type="time"/>


                        </div>
                    </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>เวลาสิ้นสุด</label>
                                <input name="time_end" class="form-control" type="time"/>


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-10">
                                <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div></div>
                </div>
            </div>
    </div>
@endsection
