@extends('layout.base', ['nav_home' => 'active'])

@section('title', 'Beranda')

@section('content')

<!-- Hero -->
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Al-Qur'an Digital</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Al-Qur'an versi digital dengan data Al-Qur'an dari Arsip Kemenag RI, semoga dengan hadirnya Al-Qur'an digital ini bisa menjadikan kita lebih giat dalam membaca Al-Qur'an.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/quran"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Mulai Baca Al-Qur'an</button></a>
        <a href="/tafsir"><button type="button" class="btn btn-secondary btn-lg px-4">Mulai Baca Tafsir</button></a>
      </div>
    </div>
</div>

@endsection