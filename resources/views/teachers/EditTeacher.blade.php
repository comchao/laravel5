@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">แก้ไขข้อมูลครู {{ $teachers->teachers }}</div>
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
                        <?= Form::model($teachers, array('url' => 'teachers/' . $teachers->tch_id, 'method' => 'put')) ?>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <?= Form::label('tch_name', 'ชื่อครู');
                                ?>
                                <?= Form::text('tch_name', null, ['class' => 'form-control',
                                    'placeholder' => 'ชือหนังสือ']);
                                ?>
                            </div>
                        </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_position', 'ตำแหน่ง');
                                    ?>
                                    <?= Form::text('tch_position', null, ['class' => 'form-control',
                                        'placeholder' => 'ตำแหน่ง']);
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_username', 'ชื่อผู้ใช้งาน');
                                    ?>
                                    <?= Form::text('tch_username', null, ['class' => 'form-control',
                                        'placeholder' => 'ชื่อผู้ใช้งาน']);
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_password', 'รหัสผ่าน');
                                    ?>
                                    <?= Form::text('tch_password', null, ['class' => 'form-control',
                                        'placeholder' => 'รหัสผ่าน']);
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_birth', 'วันเเกิด');
                                    ?>
                                    <?= Form::date('tch_birth', null, ['class' => 'form-control',
                                        'placeholder' => 'วันเเกิด']);
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_address', 'ที่อยู่');
                                    ?>
                                    <?= Form::text('tch_address', null, ['class' => 'form-control',
                                        'placeholder' => 'ที่อยู่']);
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('tch_phone', 'เบอร์โทร');
                                    ?>
                                    <?= Form::text('tch_phone', null, ['class' => 'form-control',
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