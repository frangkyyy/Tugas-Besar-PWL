@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dokumen Kontrak Beban Studi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">DKBS</li>
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
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="padding-left: 3px;">KODE MK</th>
                            <th style="padding-left: 3px;">MATA KULIAH</th>
                            <th style="padding-left: 100px;">SKS</th>
                            <th style="padding-left: 3px;">KELAS</th>
                            <th style="padding-left: 3px;">HARI</th>
                            <th style="padding-left: 3px;">WAKTU</th>
                            <th style="padding-left: 3px;">RUANG</th>
                        </tr>
                        </thead>
{{--                        <tbody>--}}
{{--                        @foreach ($matkul as $matkul)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $matkul->id }}</td>--}}
{{--                                <td>{{ $matkul->nama }}</td>--}}
{{--                                <td>{{ $matkul->sks }}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
