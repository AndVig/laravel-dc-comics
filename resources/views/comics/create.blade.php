
@extends('layouts.app')


@section('main')

    <div class="container text-light">
        <div class="row justify-content-center text-center py-5">
            <div class="col-3 mb-5">
                <a href="{{route('comics.index')}}" class="btn btn-dark">Torna alla lista fumetti</a>
            </div>
            <div class="col-12 mb-5">
                <h1>
                    Inserisci dati nuovo fumetto
                </h1>
            </div>

            <div>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="col-10">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Titolo OBBLIGATORIO</label>
                        <input name="title" type="text" id="textInput" class="form-control" placeholder="Titolo" value="{{old('title')}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Descrizione</label>
                        <input name="description" type="text" id="textInput" class="form-control" placeholder="Descrizione" value="{{old('description')}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Immagine copertina</label>
                        <input name="thumb" type="text" id="textInput" class="form-control" placeholder="Immagine copertina" value="{{old('thumb')}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Prezzo OBBLIGATORIO</label>
                        <input name="price" type="number" id="textInput" class="form-control" placeholder="Prezzo" value="{{old('price')}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Serie</label>
                        <input name="series" type="text" id="textInput" class="form-control" placeholder="Serie" value="{{old('series')}}">
                      </div>

                      <div class="mb-3">
                        <label for="textInput" class="form-label">Data vendita OBBLIGATORIO</label>
                        <input name="sale_date" type="date" id="textInput" class="form-control" placeholder="Data vendita" value="{{old('sale_date')}}">
                      </div>

                      <div class="mb-3">
                        <label for="select" class="form-label">Tipo</label>
                        <select name="type" id="select" class="form-select">
                          <option>comic book</option>
                          <option>graphic novel</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-dark mt-3">Aggiungi questo fumetto</button>
                  </form>
            </div>

        </div>
    </div>
@endsection
