@extends('layouts.default', [
    'title' => 'Edit user'
])

@section('content')
<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Edit user</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="#" class="button is-light">Detail</a>
        </div>
        <div class="level-item">
            <a href="#" class="button is-light">Kembali</a>
        </div>
    </div>
</div>

<hr>


<form action="#" method="post">
    @csrf
    @method('PUT')
    
    <div class="field">
        <label for="name" class="label">Nama Lengkap</label>
        <div class="control">
            <input type="text" name="name" id="name" class="input" value="{{ old('name') }}">
        </div>
    </div>

    <div class="field">
        <label for="email" class="label">Alamat E-Mail</label>
        <div class="control">
            <input type="email" name="email" id="email" class="input" value="{{ old('email') }}">
        </div>
    </div>

    <div class="field">
        <label for="password" class="label">Kata Sandi</label>
        <div class="control">
            <input type="password" name="password" id="password" class="input">
        </div>
    </div>

    <div class="field">
        <label for="password_confirm" class="label">Konfirgurasi Kata Sandi</label>
        <div class="control">
            <input type="password" name="password_confirm" id="password_confirm" class="input">
        </div>
    </div>

    <div class="field">
        <button type="submit" class="button is-success">Simpan Perubahan</button>
    </div>

</form>
@endsection
