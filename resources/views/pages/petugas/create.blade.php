@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Add Petugas Siswa</h1>
    </div>
    <hr />
    <form action="{{ route('addpetugas.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="idpetugas" class="form-control" placeholder="ID Petugas" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="col">
                <input type="text" name="nis" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection