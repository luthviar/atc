<h1>Daftar Training Modul {{ $modul['module']->nama }}</h1>
<section>
<h4>{{ $modul['module']->description }}</h4>
</section>
<br>
@foreach ($modul['training'] as $training)
  <h3>{{$training->title}}</h3>
<hr>
@endforeach

