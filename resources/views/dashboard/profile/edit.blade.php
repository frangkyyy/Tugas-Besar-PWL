@extends('dashboard.blade')

@section('content')
    <h1>Edit Profil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- tambahkan input form untuk atribut-atribut lainnya sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
