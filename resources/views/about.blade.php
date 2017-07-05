<!DOCTYPE html>
@extends('layouts.app')
@section('content')

<html>
<head>

    <meta charset="UTF-8">
    <table>ทดสอบระบบ</table>
</head>
<body>
<h1> สวัสดีท่านผู้ชม</h1>

<h3>{{$fullname}}</h3>
<h3>{{$website}}</h3>


</body>

</html>
@endsection()

@section('footer')
    <script>

        alert("Hello" ,"About Page");


    </script>
    @endsection