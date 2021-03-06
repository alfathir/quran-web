@extends('layout.base', ['nav_quran' => 'active'])

@section('title', 'Baca Al-Qur\'an')

@section('content')

<script type="text/javascript">
	function showSurat() {
		document.title = "{!! env('APP_NAME') !!} | Daftar Surat Al-Qur'an"
		let a = document.getElementById("surat")
		let b = document.getElementById("juz")
		let c = document.getElementById("surat_btn")
		let d = document.getElementById('juz_btn')
		b.classList.remove("d-block")
		b.classList.add("d-none")
		d.classList.remove("pil_quran")
		d.classList.add("text-muted")
		a.classList.remove("d-none")
		a.classList.add("d-block")
		c.classList.remove("text-muted")
		c.classList.add("pil_quran")
	}

	function showJuz() {
		document.title = "{!! env('APP_NAME') !!} | Daftar Juz Al-Qur'an"
		let a = document.getElementById("surat")
		let b = document.getElementById("juz")
		let c = document.getElementById("surat_btn")
		let d = document.getElementById('juz_btn')
		a.classList.remove("d-block")
		a.classList.add("d-none")
		d.classList.remove("text-muted")
		d.classList.add("pil_quran")
		b.classList.remove("d-none")
		b.classList.add("d-block")
		c.classList.remove("pil_quran")
		c.classList.add("text-muted")
	}
</script>

<!-- Hero -->
<div class="px-4 py-5 my-5 text-center brand">
    <h1 class="display-5 fw-bold">Baca Al-Qur'an</h1>
</div>

<!-- Pilihan -->
<div class="text-center"><h4>baca berdasarkan</h4></div>
<ul class="nav justify-content-center mb-2">
  <li class="nav-item">
    <a class="nav-link fs-3 text-muted" id="surat_btn" onclick="showSurat()" href="#">Surat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fs-3 text-muted" id="juz_btn" onclick="showJuz()" href="#">Juz</a>
  </li>
</ul>


<div id="surat" class="d-none text-primary">
	@foreach($datas as $data)
		<div class="row mb-lg-2">
			@foreach($data as $dt)
				<div class="col-lg-4">
					<a href="/quran/surat/{{ $dt['nomor'] }}" style="text-decoration: none !important;">
						<div class="card bg-card">
						  <div class="card-body">
						    <blockquote class="blockquote mb-0">
						    	<p class="fs-5">{{ $dt['nomor'] }} - {{ $dt['nama_latin'] }}</p>
						      <div class="text-end fs-2 text-cyan">
						      	<p class="text-primary">{{ $dt['nama'] }}</p>
						      </div>
						      <footer class="blockquote-footer"><cite title="{{ $dt['arti'] }}">{{ $dt['arti'] }}</cite></footer>
						    </blockquote>
						  </div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	@endforeach
</div>

<div id="juz" class="d-none text-primary">
	@php($juz = 1)
	@for($i = 1; $i <= 10; $i++)
		<div class="row mb-lg-2">
			@for($j = 1; $j <= 3; $j++)
				<div class="col-lg-4">
					<a href="/quran/juz/{{ $juz }}" style="text-decoration: none !important;">
						<div class="card bg-card">
						  <div class="card-body">
						    <blockquote class="blockquote mb-0">
						    	<p class="fs-5">Juz {{ $juz }}</p>
						      <div class="text-end fs-2 text-cyan">
						      	<p class="text-primary">{{ $juz_nama[($juz) - 1] }}</p>
						      </div>
						      <footer class="blockquote-footer"><cite title="">{{ $juz_surat[($juz) - 1] }}</cite></footer>
						    </blockquote>
						  </div>
						</div>
					</a>
				</div>
			@php($juz++)
			@endfor
		</div>
	@endfor
</div>

@endsection