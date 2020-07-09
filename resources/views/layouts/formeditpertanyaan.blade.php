@extends('layouts/master')

@section('content')

<form action="/pertanyaan/{{$pertanyaan->idpertanyaan}}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" name="judul" value="{{$pertanyaan->judul}}" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul">
    
  </div>
  <div class="form-group">
    <label for="isi">ISI Pertanyaan</label>
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10">{{$pertanyaan->isi}}</textarea>
  </div>
  <div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" name="tag" value="{{$pertanyaan->tag}}" class="form-control" id="tag" aria-describedby="emailHelp" placeholder="Tag">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



