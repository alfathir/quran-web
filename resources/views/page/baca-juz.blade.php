@extends('layout.base', ['nav_quran' => 'active'])

@section('title', "Baca Juz $id")

@section('content')

<script type="text/javascript">
	var mp3 = new Audio("https://files.muhammadantariksa.com/perjuz/misyari/{{ str_pad($id, 2, '0', STR_PAD_LEFT); }}.mp3")
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
    <h5 class="card-title fs-2">Juz {{ $id }} - {{ $juz_nama[$id - 1] }}</h5>
    <p class="card-text text-muted">{{ $juz_surat[$id - 1] }}</p>
    <button class="btn btn-success" onclick="audioHandler()" id="audio-btn">Putar Audio</button>
  </div>
</div>

@foreach($data['data']['verses'] as $ayat)
@if($ayat['number']['inSurah'] == 1 && $ayat['number']['inQuran'] != 1)
<hr>
<figure class="mb-2">
  <blockquote class="blockquote text-center fs-2 arab">
    <p><i>~ بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ ~</i></p>
  </blockquote>
</figure>
@endif
<figure class="mb-2 bg-light rounded px-2 py-2">
  <p class="text-muted" style="margin-bottom: -5px !important">{{ $ayat['number']['inSurah'] }}</p>
  <blockquote class="blockquote text-end fs-2 arab">
    <p>{{ $ayat['text']['arab'] }}</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite>{{ $ayat['translation']['id'] }}</cite>
  </figcaption>
</figure>
@endforeach

@endsection