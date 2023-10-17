@extends('layouts.app')

@section('main-content')

<section class="container mt-5">

    @forelse($trains as $train)
      <p>
        <strong>Partenza da</strong>: {{ $train->stazione_partenza }} alle {{$train->orario_partenza}}<br>
        <strong>Arrivo a</strong>: {{ $train->stazione_arrivo }} alle {{$train->orario_arrivo}}<br>
        <strong>Codice treno</strong>: {{ $train->codice_treno }}<br>
        <strong>Azienda</strong>: {{ $train->azienda }}<br>
        <strong>Il treno è</strong>: <span class="{{ $train->in_orario == 'in_orario' ? '' : 'text-danger fw-bold'}}">{{ $train->in_orario == 'in_orario' ? 'in orario' : 'in ritardo'}}</span><br>

      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
  </section>
@endsection