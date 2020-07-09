@extends('layouts/master')

@section('content')
<h1>Form Komentar Pertanyaan</h1>
<form action="/komentar/{{$pertanyaan[0]->idpertanyaan}}/pertanyaan" method="POST">
{{ csrf_field() }}
 
  <div class="form-group">
    <label for="isi">ISI </label>
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



