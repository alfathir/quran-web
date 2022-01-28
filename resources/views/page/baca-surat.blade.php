@extends('layout.base', ['nav_quran' => 'active'])

@section('title', "Baca Surat $data[nama_latin]")

@section('content')

<script type="text/javascript">
	var mp3 = new Audio("{{ $data['audio'] }}")
	var audio = "Putar Audio"

	function audioHandler() {
		let btn = document.getElementById('audio-btn')
		if (audio == "Putar Audio") {
			btn.innerHTML = "Hentikan Audio"
			btn.classList.remove('btn-success')
			btn.classList.add('btn-danger')
			audio = "Hentikan Audio"
			mp3.play()
		} else {
			btn.innerHTML = "Putar Audio"
			btn.classList.remove('btn-danger')
			btn.classList.add('btn-success')
			audio = "Putar Audio"
			mp3.pause()
			mp3.currentTime = 0
		}
	}
</script>

<div class="card mb-4">
  <div class="card-body">
    <h5 class="card-title fs-2">{{ $data['nama_latin'] }} - {{ $data['nama'] }}</h5>
    <p class="card-text text-muted">{!! $data['deskripsi'] !!}</p>
    <a href="/tafsir/{{ $data['nomor'] }}" class="btn btn-primary">Lihat Tafsir</a>
    <button class="btn btn-success" onclick="audioHandler()" id="audio-btn">Putar Audio</button>
  </div>
</div>

@foreach($data['ayat'] as $ayat)
<figure class="mb-2">
  <p class="text-muted" style="margin-bottom: -5px !important">{{ $data['nomor'] }}:{{ $ayat['nomor'] }}</p>
  <blockquote class="blockquote text-end fs-2 arab">
    <p>{{ $ayat['ar'] }}</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite>{{ $ayat['idn'] }}</cite>
  </figcaption>
</figure>
@endforeach

@endsection