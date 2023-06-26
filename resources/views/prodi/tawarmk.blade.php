@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            {{-- main content here --}}
            <h1>Penawaran mata kuliah</h1>
            <form action="{{ route('storeMataKuliah') }}" method="POST">
                @csrf
                <label for="mata_kuliah_id">Mata Kuliah:</label>
                <select name="mata_kuliah_id">
                    @foreach ($mataKuliahList as $mataKuliah)
                        <option value="{{ $mataKuliah->id }}">{{ $mataKuliah->nama }}</option>
                    @endforeach
                </select>
                <br>
                <label for="proyek_pendidikan_id">Study Period:</label>
                <select name="proyek_pendidikan_id">
                    @foreach ($proyekPendidikanList as $proyekPendidikan)
                        <option value="{{ $proyekPendidikan->id }}">{{ $proyekPendidikan->nama }}</option>
                    @endforeach
                </select>
                <br>
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas">
                <br>
                <label for="hari">Hari:</label>
                <input type="text" name="hari">
                <br>
                <label for="jam">Waktu:</label>
                <input type="text" name="jam">
                <br>
                <label for="kuota">Kuota Mahasiswa:</label>
                <input type="number" name="kuota">
                <br>
                <button type="submit">Tawarkan</button>
            </form>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
