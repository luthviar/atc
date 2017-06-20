<h2>Add Question Test</h2>


<form class="" action="/question/create" method="post">
  <input type="hidden" name="id_test" value="{{$idTest}}" /></br>
  <select name="type">
  	@foreach ($type as $tipe)
  		<option value="{{$tipe->id}}">{{ $tipe->name }}</option>
  	@endforeach
  </select></br>
  <input type="number" name="no_soal" placeholder="nomor soal" /></br>
  <input type="text" name="pertanyaan"  placeholder="pertanyaan" /></br>
  <input type="text" name="skor_maks"  placeholder="skor maksimal dari pertanyaan" /></br>
  <input type="text" name="true_answer"  placeholder="true answer" /></br>

  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  
  <input type="submit" name="name" value="post" />
</form>