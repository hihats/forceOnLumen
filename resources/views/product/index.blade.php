<h1>Product オブジェクト</h1>
@foreach ($results->getField() as $key => $res)
<p>{{ $key }}</p>
<br />
<br />
<p>{{ print_r($res) }}</p>
<br />
<br />
@endforeach
