@extends('layouts.app')

@section('content')


    <div id="app">
       @{{aaa}}
        <example></example>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>View</th>
            </tr>
            <tr v-for="teach in teacher">
                <td>@{{ teach['tch_id'] }}</td>
                <td>@{{ teach['tch_name'] }}</td>
                <td>
                    {{--<button v-on:click="sentId( teach['id_teacher'])">View</button>--}}
                </td>
            </tr>
        </table>
        {{--///////////////////////////////////////////////////////////////////////////////////////////////--}}
        <br><br><br>
       {{-- <table border="3">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Tel.</th>
            </tr>
            <tr>
                <td>@{{teacherDe['id_teacher'] }}</td>
                <td>@{{ teacherDe['name_teacher'] }}</td>
                <td>@{{ teacherDe['code_teacher'] }}</td>
                <td>@{{ teacherDe['tel_teacher'] }}</td>
                <td>
                </td>
            </tr>
        </table>--}}



    </div>




    <script>
        window.onload= function () {


        var app = new Vue({
            el: '#app',
            data: {
                'teacher':[],
                'teacherDe':[]
            },
            created: function () {
                axios.get('/api/vue')
                    .then((response) => {
                        this.teacher = response.data['list'];
                        console.log(this.teacher);
                    }, error => {
                        console.log(error.message);
                    });
            },

        })
        }
    </script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>


@endsection