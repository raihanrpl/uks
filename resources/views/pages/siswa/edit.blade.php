@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Edit Data Siswa</h1>
    </div>
    <hr />
    <form action="{{ route('addsiswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $siswa->nis }}">
            </div>
            <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $siswa->name }}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="{{ $siswa->jk }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    @endsection