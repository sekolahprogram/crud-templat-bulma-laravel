@extends('layouts.default', [
    'title' => 'Semua data users'
])

@section('content')
<div class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="title is-4">Semua data users</h1>
        </div>
    </div>
    <div class="level-right">
        <div class="level-item">
            <a href="#" class="button is-light">Tambah</a>
        </div>
    </div>
</div>

<hr>

<div class="table-container">
    <table class="table is-fullwidth is-striped is-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Febri Hidayan</td>
                <td>febrihidayan20@gmail.com</td>
                <td>1 Januari 2021</td>
                <td>20 Januari 2021</td>
                <td class="buttons">
                    <a href="#" class="button is-small is-success">Detail</a>
                    <a href="#" class="button is-small is-info">Edit</a>
                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-small is-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection