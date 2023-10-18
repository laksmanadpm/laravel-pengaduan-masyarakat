<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>PengaduanMasyarakat.com</title>
</head>

<body>
  @include('layouts.navbar')
  
  <div style="display:flex;justify-content:center;">
  <h1>{{$TextJudul}}</h1> <a href="{{'isi-pengaduan'}}" type="button" class="btn btn-info" style="margin-left: 2rem;height:50px;width:50px;margin-top:1rem;">+</a>
  </div>

  <div class="container">
        <table  style="margin-top: 2rem;" class="table">
          <thead>
            <tr>
              <th scope="col" class="table-warning">Id_laporan</th>
              <th scope="col" class="table-warning">Tanggal Laporan</th>
              <th scope="col" class="table-warning">Nik</th>
              <th scope="col" class="table-warning">Isi Laporan</th>
              <th scope="col" class="table-warning">Gambar Bukti</th>
              <th scope="col" class="table-warning">Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pengaduan as $pengaduan)
            <tr>
              <th scope="row" class="table-secondary">{{$pengaduan->id_pengaduan}}</th>
              <td class="table-secondary">{{$pengaduan->tgl_pengaduan}}</td>
              <td class="table-secondary">{{$pengaduan->nik}}</td>
              <td class="table-secondary">{{$pengaduan->isi_laporan}}</td>
              <td class="table-secondary"><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="150px" height="150px"></td>
              <td class="table-secondary">
              <a href="/hapus-pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-danger">hapus</a>
                <a href="/detail-pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-primary">detail</a>
                <a href="/update-pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-secondary">update</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</body>
</html>