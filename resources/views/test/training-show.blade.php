<h1>{{$training->title}}</h1>

@foreach ($section as $trainingSection)
  <h3>{{$trainingSection->id_type->nama}}</h3>
<hr>
@endforeach