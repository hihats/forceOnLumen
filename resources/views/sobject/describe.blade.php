@extends('layout')

@section('content')
<h4>{{$objName}} <button class="button-alert">{{ $results[0]->getLabel() }}</button> Description</h4>
<h4>{{$objName}} Fields</h4>
@foreach ($results[0]->getFields() as $key => $field)
<p><button class="button-primary">{{ $field->getlabel() }}</button> :{{ $field->getName() }}
  <ul>
    <li>Type: {{ $field->getType() }}</li>
@if (is_array($field->getPicklistValues()))
    <li>Pick List Values: <pre>{{ print_r($field->getPicklistValues()) }}</pre></li>
@endif
  </ul>
</p>
@endforeach
<h4>fetch data</h4>
<form action='{{ url("sobject/{$objName}/show") }}'>
  <div class="row">
    <div class="six columns">
      <label for="fitchObject">ID</label>
      <input class="u-full-width" type="text" id="oid">
    </div>
  </div>
  <input class="button-primary" type="submit" value="Submit">
</form>
@stop
