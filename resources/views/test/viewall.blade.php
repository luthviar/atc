<h1>Daftar Modul</h1>
<a href="/module/create"><button>Create Module</button></a>

<br>


<br>
@foreach ($module as $modul)
  <a href="/module/{{$modul->id}}"><h3>{{$modul->nama}}</h3></a>
<hr>
@endforeach

