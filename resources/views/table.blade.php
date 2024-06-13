@extends('layouts.template')

@section('content')

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h3>Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Kelas</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Farah Nabila Haibah</td>
                        <td>PGWEBL-A</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Khairunnisa Anabila</td>
                        <td>PGWEBL-A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
