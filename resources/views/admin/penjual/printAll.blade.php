<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Semua Data Penjual</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="font-family: sans-serif" onload="window.print()">
      <br>
      <br>
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <h3>Data Penjual</h3>
                        <div class="table-responsive">
                              <table class="table table-bordered">
                                    <thead>
                                          <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Penjual</th>
                                                <th style="text-align: center;">Jenis Kelamin</th>
                                                <th style="text-align: center;">Alamat</th>
                                                <th style="text-align: center;">No. Telp</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($penjual as $item)
                                                <tr>
                                                      <td>{{ $loop->iteration }}</td>
                                                      <td>{{ $item->nama_penjual }}</td>
                                                      <td>{{ $item->jenis_kelamin }}</td>
                                                      <td>{{ $item->alamat }}</td>
                                                      <td>{{ $item->no_telp }}</td>
                                                </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>