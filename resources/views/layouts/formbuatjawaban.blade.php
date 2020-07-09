@extends('layouts/master')

@section('content')
<h1>Form Jawaban</h1>
<form action="/jawaban/{{$pertanyaan[0]->idpertanyaan}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" name="judul"  class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul">
    <input type="hidden" name="idpertanyaan" value="{{$pertanyaan[0]->idpertanyaan}}"  class="form-control" id="idpertanyaan" aria-describedby="emailHelp" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="isi">ISI </label>
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



