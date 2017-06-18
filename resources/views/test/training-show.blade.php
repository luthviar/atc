<h1>{{$training->title}}</h1>

<a href="/section/create/{{$training->id}}"><button>Add Section</button></a>
@foreach ($section as $ts)
  <h3>{{$ts->nama}}</h3>
  @if($ts->id_type == 1 or $ts->id_type == 3)
  <a href="/test/create/{{$ts->id}}"><button>Add {{$ts->nama}}</button></a>
  @endif
  @if($ts->id_type == 2)
  <a href="/section/create/{{$training->id}}"><button>Add {{$ts->nama}}</button></a>
  @endif
  	@foreach ($content[$ts->id] as $ctn)
  		<a href="/test/{{$ctn->id}}"><h5>{{$ctn->title}}</h5></a>
	@endforeach
<hr>
@endforeach