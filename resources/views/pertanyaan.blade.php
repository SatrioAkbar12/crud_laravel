<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Daftar Pertanyaan</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Daftar Pertanyaan</h1>
                <hr class="my-4">
                <a class="btn btn-success" href="/pertanyaan/create">Buat Pertanyaan</a>
            </div>

            @foreach ($data as $d)
                <ul class="list-group">
                    <li class="list-group-item">{{$d->judul}}</li>
                    <li class="list-group-item">{{$d->isi}}</li>
                    <li class="list-group-item">
                        <a class="btn btn-primary" href="/jawaban/{{$d->id}}">Jawaban</a>
                    </li>
                </ul>
                &nbsp;
            @endforeach
        </div>
    </body>
</html>
