@extends('layout.base', ['nav_home' => 'active'])

@section('title', 'Beranda')

@section('content')

<!-- Hero -->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/08/03/2470184809.jpg" class="d-block mx-lg-auto img-fluid" alt="Al-Qur'an" loading="lazy" width="700" height="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Al-Qur'an Digital</h1>
        <p class="lead">Al-Qur'an versi digital dengan data Al-Qur'an dari Arsip Kemenag RI, semoga dengan hadirnya Al-Qur'an digital ini bisa menjadikan kita lebih giat dalam membaca Al-Qur'an.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/quran"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Baca Al-Qur'an</button></a>
          <a href="/tafsir"><button type="button" class="btn btn-secondary btn-lg px-4">Baca Tafsir</button></a>
        </div>
      </div>
    </div>
</div>

@endsection