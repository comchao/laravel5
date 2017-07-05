@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">เพิ่มข้อมูลวิชา</div>

                        <div class="panel-body">
                            {!! Form::open(array('url' => 'addsub','files' => true)) !!}
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <?= Form::label('sub_name', 'ชื่อวิชา'); ?>
                                    <?= Form::text('sub_name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อวิชา']); ?>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('sub_unit', 'จำนวนหน่วยกิจ') !!}
                                    {!! Form::number('sub_unit',null,['class' => 'form-control','placeholder' => 'จำนวนหน่วยกิจ']) !!}
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="submit"  value="บันทึก" class="btn btn-primary">
                                    </div>
                                </div>

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> @endsection

