
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title></title>
    <div class="container">
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
        </li>
    </div>
</head>
  <body>
      
    <div class="container">
        
             <div class="jumbotron"><h1>Data Mahasiswa</h1>
             
             </div>
        <div class="row">
            <div class="col-6">
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                @endif
            </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                      Tambah Data Mahasiswa
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        
                          </div>
                          
                         <div class="modal-body">
                            <form action="/mahasiswa/create" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="input">Nim</label>
                                    <input name="nim" type="text" class="form-control" id="input" aria-describedby="namehelp">
                                </div>
                                    
                                <div class="form-group">
                                    <label for="input">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="input" aria-describedby="namehelp">
                                </div>
                                
                                <div class="form-group">
                                    <label for="input">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" id="input" aria-describedby="namehelp">
                                </div>
                                
                                <div class="form-group">
                                    <label for="input">Telepon</label>
                                    <input name="telepon" type="text" class="form-control" id="input" aria-describedby="namehelp">
                                </div>
                                
                                <div class="form-group">
                                    <label for="input">Email</label>
                                    <input name="email" type="text" class="form-control" id="input" aria-describedby="namehelp">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
                            
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <br></br>
                <table class="table table-striped table-dark">
                 <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                 </tr>
                @foreach($data_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{$mahasiswa->nim}}</td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                    <td>{{$mahasiswa->telepon}}</td>
                    <td>{{$mahasiswa->email}}</td>
                    <td>
                        <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning">Edit<a/>
                        <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data tersebut?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
                 </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>


