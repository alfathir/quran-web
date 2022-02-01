@extends('layout.base', ['nav_tafsir' => 'active'])

@section('title', "Baca Tafsir Surat $data[nama_latin]")

@section('content')

<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title fs-2">{{ $data['nama_latin'] }} - {{ $data['nama'] }}</h5>
    <p class="card-text text-muted">{{ $data['tempat_turun'] }} :: {{ $data['jumlah_ayat'] }} ayat :: {{ $data['arti'] }}</p>
    <a href="/quran/{{ $data['nomor'] }}" class="btn btn-primary">Baca Surat</a>
  </div>
</div>

@foreach($data['tafsir'] as $tafsir)
<figure class="mb-2 bg-light rounded px-2 py-2">
  <p class="text-muted" style="margin-bottom: -5px !important">{{ $data['nomor'] }}:{{ $tafsir['ayat'] }}</p>
  <blockquote class="blockquote">
    <p>{{ $tafsir['tafsir'] }}</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite>Q.S {{ $data['nama_latin'] }} ayat {{ $tafsir['ayat'] }}</cite>
  </figcaption>
</figure>
@endforeach

@endsection