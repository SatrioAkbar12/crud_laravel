<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Edit Pertanyaan</title>
    </head>
    <body>
        <div class="container">
            <h1>Edit Pertanyaan</h1>

            @foreach ($pertanyaan as $p)
                <form action="/pertanyaan/{{$p->id}}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <label for="form-judul">Judul Pertanyaan :</label>
                        <input type="text" id="form-judul" name="judul" class="form-control" placeholder="Isi Judul Pertanyaan" value="{{$p->judul}}" required>
                    </div>
                    <div class="form-group">
                        <label for="form-isi">Isi Pertanyaan :</label>
                        <textarea class="form-control" id="form-isi" name="isi" placeholder="Isi Pertanyaan" required>{{$p->isi}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <a href="/pertanyaan/{{$p->id}}" class="btn btn-danger">Batal</a>
                </form>
            @endforeach
        </div>
    </body>
</html>
