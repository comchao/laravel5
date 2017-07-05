@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">ลงทะเบียนเรียน</div>

                    <div class="panel-body">
                       {{-- {!! Form::open(array('url' => 'addclassstuden','files' => true)) !!}--}}

                          <form method="post" action="{{ route('createclasss') }}">
                              {{csrf_field()}}
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>รายวิชา</label>
                                <select name="class_id" class="form-control">
                                    <option >เลือกวิชา</option>
                                    @foreach ($classstuden as $subjects)
                                        <option value="{{ $subjects->class_id}}">{{ $subjects->subject->sub_name }}
                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label> ชื่อนักเรียน</label>
                                <select name="stu_id" class="form-control">
                                    <option >เลือกชื่อนักเรียน</option>
                                    @foreach ($student as $students)
                                        <option value="{{ $students->stu_id}}">{{ $students->stu_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <input type="submit"  value="บันทึก" class="btn btn-primary">
                            </div>
                        </div>
                      </form>

                    </div>
                </div>
            </div>
        </div>

        <div id="app">
            {{message}}
        </div>

        <script src="{{ asset('components/vue/dist/vue.js') }}"></script>
        <script src="{{ asset('js/msage.js') }}"></script>


    </div> @endsection

