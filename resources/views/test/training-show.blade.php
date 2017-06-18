<h1>{{$training->title}}</h1>

@foreach ($section as $ts)
  <h3>{{$ts->nama}}</h3>
  	@foreach ($content[$ts->id] as $ctn)
  		<a href="/test/{{$ctn->id}}"><h5>{{$ctn->title}}</h5></a>
	@endforeach
<hr>
@endforeach