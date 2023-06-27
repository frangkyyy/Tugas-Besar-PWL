@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @auth
                        @if (Auth::user()->hasRole('prodi'))
                            <h1 class="m-0 text-dark">DKBS Mahasiswa</h1>
                        @elseif (Auth::user()->hasRole('mahasiswa'))
                            <h1 class="m-0 text-dark">DKBS</h1>
                        @endif
                    @endauth

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">DKBS</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <form>
                        <select name="period">
                            <option value="">Reguler Ganjil 2021/2022</option>
                            @foreach ($periods as $period)
                                <option value="{{ $period }}">{{ $period }}</option>
                            @endforeach
                        </select>
                    </form>
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>
            <!-- /.content -->
@endsection
