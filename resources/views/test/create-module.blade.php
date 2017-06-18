<h2>Create Module</h2>


<form class="" action="/module" method="post">
  <select name="parent">
  	<option>null</option>
  	@foreach ($parent as $par)
  		<option value="{{$par->id}}">{{ $par->nama }}</option>
  	@endforeach
  </select><br>
  <input type="text" name="short_name" placeholder="short name"><br>
  <input type="text" name="nama"  placeholder="module name"><br>
  <textarea name="desc" rows="8" cols="80" placeholder="Description of module"></textarea><br>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
  <input type="submit" name="name" value="post">
</form>