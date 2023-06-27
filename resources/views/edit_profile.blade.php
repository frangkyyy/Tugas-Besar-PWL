@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <table>
                <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>: {{ Auth::user()->nama }}</td>
                    </tr>
                    <tr>
                        <td><strong>NRP</strong></td>
                        <td>: {{ Auth::user()->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>: {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Role</strong></td>
                        <td>: {{ Auth::user()->role }}</td>
                    </tr>
{{--                    <tr>--}}
{{--                        <td><strong>Program Studi:</strong></td>--}}
{{--                        <td>--}}
{{--                            @if(Auth::user()->program_studi === 72)--}}
{{--                                Teknik Informatika--}}
{{--                            @elseif(Auth::user()->program_studi === 73)--}}
{{--                                Sistem Informasi--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td><label for="photo">Photo</label></td>
                        <td>:<input type="file" name="photo" accept="image/*"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Address</label></td>
                        <td>:<input type="text" name="alamat" value="{{ $user->alamat }}"></td>
                    </tr>
                    <tr>
                        <td><label for="nohp">Phone Number</label></td>
                        <td>:<input type="text" name="nohp" value="{{ $user->nohp }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" style="margin-top: 10px; background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 4px;">Update Profile</button>
                        </td>
                    </tr>
                </form>
            </table>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
