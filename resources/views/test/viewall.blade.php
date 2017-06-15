<h1>Daftar Modul</h1>

<br>
@foreach ($module as $modul)
  <a href="/module/{{$modul->id}}"><h3>{{$modul->nama}}</h3></a>
<hr>
@endforeach

