<h1>{{$test->title}}</h1>

<hr>

<h3>Waktu test : {{$test->time}}</h3>
<h3>Jumlah soal : {{$test->jumlah_soal}}</h3>
<h3>Attemp allowed : {{$test->attemp}} kali</h3>
<h3>Batas lulus nilai : {{$test->min_score}}</h3>
	  		
<form action="/answer/{{$test->id}}" method="post">

@foreach ($question as $ques)
  <h3>{{$ques->no_soal}}. {{$ques->pertanyaan}}</h3>
  	@if($ques->id_type == 1)
	  	@foreach ($ques->opsi as $opsi)
	  		 <input type="radio" name="{{ $ques->id }}" value="{{ $opsi->pilihan }}">{{$opsi->pilihan}}. {{$opsi->isi_opsi}}</input></br>
		@endforeach
	@endif
	@if($ques->id_type ==2)
	  	<input type="radio" name="{{ $ques->id }}" value="benar">Benar</input></br>
	  	<input type="radio" name="{{ $ques->id }}" value="salah">Salah</input>
	@endif
	@if($ques->id_type ==3)
	  	<input type="text" name="{{ $ques->id }}"></input>
	@endif
	@if($ques->id_type ==4)
	  	<textarea name="{{ $ques->id }}"></textarea> 
	@endif
<hr>
@endforeach

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="submit" name="name" value="post">

</form>