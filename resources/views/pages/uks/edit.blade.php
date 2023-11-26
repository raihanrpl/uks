@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Edit Data Sakit</h1>
    </div>
    <hr />
    <form action="{{ route('uks.update', $uks->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $uks->nis }}">
            </div>
            <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $uks->name }}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $uks->kelas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $uks->jurusan}}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Angkatan</label>
            <textarea class="form-control" name="angkatan" placeholder="Angkatan" value="{{ $uks->jurusan}}"></textarea>
            </div>
        </div>
        <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="{{ $uks->jk }}">
            </div>
            <label class="form-label">Sakit</label>
                <input type="text" name="sakit" class="form-control" placeholder="Sakit" value="{{ $uks->sakit }}">
            </div>
            <label class="form-label">Penanganan</label>
                <input type="text" name="penanganan" class="form-control" placeholder="Penanganan" value="{{ $uks->penanganan }}">
            </div>
            <label class="form-label">Petugas</label>
                <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="{{ $uks->petugas }}">
            </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    @endsection