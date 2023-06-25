@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Mata Kuliah</h1>
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
            @extends('layouts.master')

            @section('content')
                <table>
                    <thead>
                    <tr>
                        <th style="padding-left: 20px;">Nama Mata Kuliah</th>
                        <th style="padding-left: 30px;">Semester</th>
                        <th style="padding-left: 40px;">Jenis</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($matakuliah as $mk)
                        <tr>
                            <td style="padding-left: 20px;">{{ $mk->nama }}</td>
                            <td style="padding-left: 60px;">{{ $mk->semester }}</td>
                            <td style="padding-left: 40px;">{{ $mk->jenis }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endsection

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
