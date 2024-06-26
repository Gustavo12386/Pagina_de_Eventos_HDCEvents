@extends('layouts.main')
@section('title', 'Crie um evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
     <label for="image">Imagem do Evento:</label>
     <input type="file" id="image" name="image" class="form-control" required>
     </div> 
     <br>
     <div class="form-group">
     <label for="title">Evento:</label>
     <input type="text" class="form-control" id="title" name="title" placeholder="digite nome do evento" required>
     </div> 
     <br>
     <div class="form-group">
     <label for="title">Data do evento:</label>
     <input type="date" class="form-control" id="date" name="date" required>
     </div> 
     <br>
     <div class="form-group">
     <label for="title">Cidade:</label>
     <input type="text" class="form-control" id="city" name="city" placeholder="digite nome do local" required>
     </div>
     <br>
     <div class="form-group">
     <label for="title">O evento é privado?</label>
     <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
     </select>
     </div>
     <br>
     <div class="form-group">
     <label for="title">Descrição:</label>
     <textarea id="description" name="description" class="form-control" required></textarea>
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
     </div>  
     <br>
     <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>
  
@endsection 