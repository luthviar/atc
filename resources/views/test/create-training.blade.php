<h2>Create Training</h2>


<form class="" action="/training" method="post">
  <select name="module">
  	@foreach ($module as $modul)
  		<option value="{{$modul->id}}">{{ $modul->nama }}</option>
  	@endforeach
  </select><br>
  <input type="text" name="title" placeholder="title of the Training"><br>
  <input type="text" name="enroll_key"  placeholder="enroll_key"><br>
  <textarea name="desc" rows="8" cols="80" placeholder="description of Training"></textarea><br>
  <select name="trainer">
    @foreach ($personnel as $prs)
      <option value="{{$prs->id_user}}">{{ $prs->fname }} {{ $prs->lname }}</option>
    @endforeach
  </select><br>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
  <input type="submit" name="name" value="post">
</form>