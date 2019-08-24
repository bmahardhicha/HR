@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class='container'>
    <div class='col-sm-12'>
        <a href="{{url('home/create')}}" class='btn btn-success'>Ajukin Cuti</a>
        <table id="brands" class="table table-bordered table-hover dataTable">
            <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Position</td>
                        <td>{{$user->position}}</td>
                    </tr>
                    <tr>
                        <td>Total Cuti</td>
                        <td>{{$user->total_cuti}}</td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@stop