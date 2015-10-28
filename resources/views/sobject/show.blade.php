@extends('layout')
@section('content')
<h4>{{$objName}} Data</h4>
<p>
@foreach ($records as $record)
<ul>
@foreach ($record as $key => $val)
<li><button>{{$key}}</button> : {{$val}}</li>
@endforeach
</ul>
@endforeach
</p>
@stop
