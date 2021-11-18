
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
        
                <table class="table table-striped table-dark">
                 <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                 
                 </tr>
                @foreach($data_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{$mahasiswa->nim}}</td>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                    <td>{{$mahasiswa->telepon}}</td>
                    <td>{{$mahasiswa->email}}</td>
                </tr>
                @endforeach
                 </table>
     
      </div>
      
</div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>


