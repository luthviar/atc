<h2>Add Opsi Jawaban</h2>


<form class="" action="/opsi/create" method="post">
  
  <input type="hidden" name="id_question" value="{{$id_question}}" /></br>
  <input type="text" name="isi_opsi"  placeholder="isi opsi" /></br>
  <input type="text" name="pilihan"  placeholder="pilihan" /></br>

  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  
  <input type="submit" name="name" value="post" />
</form>