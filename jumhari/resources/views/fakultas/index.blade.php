@extends("layout.master")

@section('content')

    <h1>Fakultas</h1>
    {{-- <p>{{$ilkom. " " .$feb }}</p>
    <p>{{$feb}}</p> --}}
    @foreach ($fakultas as $f)
        <li>{{$f}}</li>
    @endforeach

@endsection