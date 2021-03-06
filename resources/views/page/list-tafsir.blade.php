@extends('layout.base', ['nav_tafsir' => 'active'])

@section('title', 'Baca Tafsir Al-Qur\'an')

@section('content')

<!-- Hero -->
<div class="px-4 py-5 my-5 text-center brand">
    <h1 class="display-5 fw-bold">Baca Tafsir Al-Qur'an</h1>
</div>

@foreach($datas as $data)
<div class="row mb-lg-2">
	@foreach($data as $dt)
		<div class="col-lg-4">
			<a href="/tafsir/{{ $dt['nomor'] }}" style="text-decoration: none !important;">
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

@endsection