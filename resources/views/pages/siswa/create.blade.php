@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Add Siswa</h1>
    </div>
    <hr />
    <form action="{{ route('addsiswa.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nis" class="form-control" placeholder="NIS" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection