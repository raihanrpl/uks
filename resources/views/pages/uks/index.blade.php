@extends ('layouts.app')

@section('body')
    <div class="d-flex align-items justify-content-between">
        <h1>List Data Sakit</h1>
        <a href="{{ route('uks.create') }}" class="btn btn-primary">Add Data</a>
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
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Jenis Kelamin</th>
                <th>Sakit</th>
                <th>Penanganan</th>
                <th>Petugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($uks->count() > 0)
                @foreach ($uks as $uks)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration}}</td>
                        <td class="align-middle">{{ $uks->nis}}</td>
                        <td class="align-middle">{{ $uks->name}}</td>
                        <td class="align-middle">{{ $uks->kelas}}</td>
                        <td class="align-middle">{{ $uks->jurusan}}</td>
                        <td class="align-middle">{{ $uks->angkatan}}</td>
                        <td class="align-middle">{{ $uks->jk}}</td>
                        <td class="align-middle">{{ $uks->sakit}}</td>
                        <td class="align-middle">{{ $uks->penanganan}}</td>
                        <td class="align-middle">{{ $uks->petugas}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('uks.show', $uks->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('uks.edit', $uks->id) }}" button type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('uks.destroy', $uks->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="10">Data Sakit not founded</td>
                </tr>
            @endif
        </tbody>
    </table>

    {{ $uks->links() }}  

@endsection