<!-- resources/views/education_periods.blade.php -->
<h1>Periode Pendidikan Mahasiswa</h1>

<ul>
    @foreach ($periods as $period)
        <li>{{ $period }}</li>
    @endforeach
</ul>
