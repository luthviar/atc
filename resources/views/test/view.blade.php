<h1>Daftar Training Modul {{ $modul['module']->nama }}</h1>
<section>
<h4>{{ $modul['module']->description }}</h4>
</section>
<br>
@foreach ($modul['training'] as $training)
  <a href="/training/{{$training->id}}"><h3>{{$training->title}}</h3></a>
<hr>
@endforeach

<a href="/training/create"><button>Create Training</button></a>

