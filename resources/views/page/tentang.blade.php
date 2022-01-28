@extends('layout.base', ['nav_about' => 'active'])

@section('title', 'Tentang')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Tentang Saya</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Saya adalah seorang Software Engineer yang berasal dari sebuah kota mungil di Jawa Timur, yakni Gresik. Saya membuat web ini agar bisa berguna untuk orang banyak. Kamu bisa menghubungiku di <a href="https://wa.me/6285270371952">WhatsApp</a>.</p>
      <hr>
      <div class="justify-content-sm-center">
        <p class="lead">Special Thanks To:</p>
        <h2>
        	<b>
	        	<span class="typer" id="main" data-words="Allah SWT,My Family,Firdausi Ridhotul Ullah,SMK NU 1 Karanggeneng,EQURAN.ID,Web Programming Unpas" data-delay="100" data-deleteDelay="1000"></span>
	  			<span class="cursor text-muted" data-owner="main"></span>
	  		</b>
        </h2>
      </div>
    </div>
</div>

<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
@endsection