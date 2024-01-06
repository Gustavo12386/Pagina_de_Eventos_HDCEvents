@extends('layouts.main')
@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{$event->title}}</h1>
  <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label for="image">Imagem do Evento:</label>
     <input type="file" id="image" name="image" class="form-control" required>
     <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
     </div> 
     <br>
     <div class="form-group">
     <label for="title">Evento:</label>
     <input type="text" class="form-control" id="title" name="title" placeholder="digite nome do evento" value="{{$event->title}}" required>
     </div> 
     <br>
     <div class="form-group">
     <label for="title">Data do evento:</label>
     @if($event->date)
     <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}" required>
     @endif
     </div>     
     <br>
     <div class="form-group">
     <label for="title">Cidade:</label>
     <input type="text" class="form-control" id="city" name="city" placeholder="digite nome do local" value="{{$event->city}}" required>
     </div>
     <br>
     <div class="form-group">
     <label for="title">O evento é privado?</label>
     <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
     </select>
     </div>
     <br>
     <div class="form-group">
     <label for="title">Descrição:</label>
     <textarea id="description" name="description" class="form-control" required>{{$event->description}}</textarea>
     </div> 
     <div class="form-group">
     <label for="title">Adicione items de infraestrutura:</label>
     <div class="form-group">
       <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
     </div>
     <div class="form-group">
       <input type="checkbox" name="items[]" value="Palco"> Palco
     </div>
     <div class="form-group">
       <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
     </div>
     <div class="form-group">
       <input type="checkbox" name="items[]" value="Brindes"> Brindes
     </div>
     <div class="form-group">
       <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
     </div>
     </div>  
     <br>
     <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>
</div>
  
@endsection 