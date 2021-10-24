@extends('adminlte::page')

@section('title', 'Create Mapel')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">

    </div>
  </div>
@stop

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h5>Create Mapel</h5>
                 {{-- alert error --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('mapel.store')}}" method="POST">
                    @csrf
                    @include('pages.admin.mapel.form')
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
@stop
