@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">แก้ไขข้อมูลครู {{ $student->student }}</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-warning">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <?= Form::model($student, array('url' => 'student/' . $student->stu_id, 'method' => 'put')) ?>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_name', 'ชื่อครู');
                                ?>
                                <?= Form::text('stu_name', null, ['class' => 'form-control',
                                    'placeholder' => 'ชือหนังสือ']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_position', 'ตำแหน่ง');
                                ?>
                                <?= Form::text('stu_position', null, ['class' => 'form-control',
                                    'placeholder' => 'ตำแหน่ง']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_username', 'ชื่อผู้ใช้งาน');
                                ?>
                                <?= Form::text('stu_username', null, ['class' => 'form-control',
                                    'placeholder' => 'ชื่อผู้ใช้งาน']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_password', 'รหัสผ่าน');
                                ?>
                                <?= Form::text('stu_password', null, ['class' => 'form-control',
                                    'placeholder' => 'รหัสผ่าน']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_birth', 'วันเเกิด');
                                ?>
                                <?= Form::date('stu_birth', null, ['class' => 'form-control',
                                    'placeholder' => 'วันเเกิด']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_address', 'ที่อยู่');
                                ?>
                                <?= Form::text('stu_address', null, ['class' => 'form-control',
                                    'placeholder' => 'ที่อยู่']);
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('stu_phone', 'เบอร์โทร');
                                ?>
                                <?= Form::text('stu_phone', null, ['class' => 'form-control',
                                    'placeholder' => 'เบอร์โทร']);
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']);
                                ?>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection