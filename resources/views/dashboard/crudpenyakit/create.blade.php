@extends('dashboard.layout.mainuser')

@section('containerr')
<div class="container mt-4">
    <h1>Tambah Penyakit</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('diseases.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Kode Penyakit</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Penyakit</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pilih Gejala (Symptoms)</label>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>Kode Gejala</th>
                        <th>Nama Gejala</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($symptoms as $symptom)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" name="symptoms[]" value="{{ $symptom->id }}" id="symptom{{ $symptom->id }}">
                        </td>
                        <td>{{ $symptom->code }}</td>
                        <td>{{ $symptom->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
