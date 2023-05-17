<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prodi</title>
</head>
<body>
    <h2>Form Prodi</h2>
    <form action = "{{http://127.0.0.1:8000/prodi/create}}" method= "POST">
        @csrf
        <div class = "form-group">
            <label for ="nama">Nama</label>
            <input type = "text" name="nama" id="nama" class="form-control" 
            value ="{{old('nama')}}">
            @error('nama')
                <div class = "text-danger">{{$message}}</div>
            @enderror
        </div>
        <button type = "submit" class ="btn btn-primary mt-2">Simpan</button>
   </form>
</body>
</html>