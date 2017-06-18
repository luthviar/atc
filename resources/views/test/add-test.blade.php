<h2>Add Test</h2>


<form class="" action="/test/create" method="post">
  
  <input type="hidden" name="id_section" value="{{$id_section}}" /></br>
  <input type="text" name="title"  placeholder="title of the test" /></br>
  <input type="text" name="time"  placeholder="time of the test" /></br>
  <input type="number" name="jml_soal"  placeholder="jumlah soal" /></br>
  <input type="number" name="attemp"  placeholder="jumlah attemp" /></br>
  <input type="number" name="question_per_page"  placeholder="question per page" /></br>
  <input type="number" name="min_score"  placeholder="minimum score" /></br>


  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  
  <input type="submit" name="name" value="post" />
</form>