@extends('layout')

@section('content')
<h4>SObject List</h4>
<ul>
@foreach ($results as $res)
<li>
  <a class="button" href="sobject/{{ $res->name }}">{{ $res->name }}</a> : {{ $res->label }}
</li>
@endforeach
</ul>
@stop
