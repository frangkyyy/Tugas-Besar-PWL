@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
                @auth
                    @if (Auth::user()->hasRole('prodi'))
                        <h1 class="m-0 text-dark">Dashboard Prodi</h1>
                    @elseif (Auth::user()->hasRole('mahasiswa'))
                        <h1 class="m-0 text-dark">Dashboard Mahasiswa</h1>
                    @endif
                @endauth

			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <ul>
            @auth
                @if (Auth::user()->hasRole('prodi'))
                    <li><a href="{{ route('prodi.dkbs') }}">DKBS Mahasiswa</a></li>
                    <li><a href="{{ route('prodi.tawarmk') }}">Penawaran Mata Kuliah</a></li>
                @elseif (Auth::user()->hasRole('mahasiswa'))
                    <li><a href="{{ route('dkbs') }}">DKBS</a></li>
                    <li><a href="{{ route('mk_tawar') }}">Perwalian</a></li>
                @endif
            @endauth
        </ul>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
