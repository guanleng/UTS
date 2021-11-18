<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
            <div class="modal-body">
                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input">Nim</label>
                    <input name="nim" type="text" class="form-control" id="input" aria-describedby="namehelp" placeholder="Nim" value="{{$mahasiswa->nim}}">
                </div>
                                    
                <div class="form-group">
                    <label for="input">Nama</label>
                    <input name="nama" type="text" class="form-control" id="input" aria-describedby="namehelp" placeholder="Nama" value="{{$mahasiswa->nama}}">
                 </div>
                                
                <div class="form-group">
                    <label for="input">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="input" aria-describedby="namehelp" placeholder="Alamat" value="{{$mahasiswa->alamat}}">
                </div>
                                
                <div lass="form-group">
                    <label for="input">Telepon</label>
                    <input name="telepon" type="text" class="form-control" id="input" aria-describedby="namehelp" placeholder="Telepon" value="{{$mahasiswa->telepon}}">
                </div>
                                
                <div class="form-group">
                    <label for="input">Email</label>
                    <input name="email" type="text" class="form-control" id="input" aria-describedby="namehelp" placeholder="Email" value="{{$mahasiswa->email}}">
                </div>
                    <button type="submit" class="btn btn-warning float-right">Update</button>
                </form>
                </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>


