Tampilkan data mhs parent dari variable menggunakan HTML Table
<br/>

Tampilkan Nama, NPM, TTL(Tempat Tanggal Lahir),
Nama Ortu, Email Ortu dan HP Ortu
<br/>

@foreach ($data as $d )
<td>{{$d->tempat_lahir}}, {{$d->tanggal_lahir}}</td>
@endforeach

