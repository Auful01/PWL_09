@extends('users.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Mahasiswa </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Nim: </b>{{$nilai->nim}}
                        </li>
                        <li class="list-group-item">
                            <b>Nama: </b>{{$nilai->nama}}
                        </li>
                        <li class="list-group-item">
                            <b>Kelas: </b>{{$nilai->kelas->nama_kelas}}
                        </li>
                        <table class="table table-bordered">
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach ($nilai->matakuliah as $nl)
                        <tr>
                            <td>{{$nl->nama_matkul}}</td>
                            <td>{{$nl->sks}}</td>
                            <td>{{$nl->semester}}</td>
                            <td>{{$nl->pivot->nilai}}</td>
                        </tr>
                        @endforeach
                        </table>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
    @endsection
