<h2>Add Section Training</h2>


<form class="" action="/section/create" method="post">
  <select name="type">
  	@foreach ($type as $tipe)
  		<option value="{{$tipe->id}}">{{ $tipe->nama }}</option>
  	@endforeach
  </select></br>
  <input type="number" name="id_training" value="{{$training->id}}" /></br>
  <input type="number" name="sequence"  placeholder="sequence" /></br>

  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  
  <input type="submit" name="name" value="post" />
</form>