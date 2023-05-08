<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD SIMPLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 mt-5">Data User</h1>
    <div class="container">
    <a href="/tambahdata" class="btn btn-success mb-4" >Tambah +</a>

        <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @endif        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kel</th>
      <th scope="col">No Telp</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->jenis_kelamin}}</td>
      <td>0{{$row->notelp}}</td>
      <td>{{$row->created_at}}</td>
        <td>
            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning" >Edit</a>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger" >Delete</a>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>