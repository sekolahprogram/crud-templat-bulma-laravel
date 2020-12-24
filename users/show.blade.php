@extends('layouts.default', [
    'title' => 'Detail data user'
])

@section('content')

<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Detail data user</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="#" class="button is-light">Edit</a>
        </div>
        <div class="level-item">
            <a href="#" class="button is-light">Kembali</a>
        </div>
    </div>
</div>

<hr>

<div class="field">
    <label class="label">Nama Lengkap</label>
    <pre>Febri Hidayan</pre>
</div>

<div class="field">
    <label class="label">Alamat E-Mail</label>
    <pre>febrihidayan20@gmail.com</pre>
</div>

<div class="field">
    <label class="label">CreatedAt</label>
    <pre>01 Januari 2021</pre>
</div>

<div class="field">
    <label class="label">UpdatedAt</label>
    <pre>20 Januari 2021</pre>
</div>
@endsection