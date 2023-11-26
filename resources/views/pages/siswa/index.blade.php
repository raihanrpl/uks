@extends('layouts.app')

@section('body')
    <div class="d-flex align-items justify-content-between">
        <h1>List Siswa</h1>
        <a href="{{ route('addsiswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>
    <hr />
    @if(Session::has('succes'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('succes')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Name</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($siswa->count() > 0)
                @foreach ($siswa as $s)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration}}</td>
                        <td class="align-middle">{{ $s->nis}}</td>
                        <td class="align-middle">{{ $s->name}}</td>
                        <td class="align-middle">{{ $s->jk}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('addsiswa.show', $s->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('addsiswa.edit', $s->id) }}" button type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('addnis.destroy', $s->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="10">Siswa Data not founded</td>
                </tr>
            @endif
        </tbody>
    </table>

    {{ $siswa->links() }} 

@endsection
