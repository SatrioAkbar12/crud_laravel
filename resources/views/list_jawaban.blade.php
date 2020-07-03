<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Jawaban Pertanyaan</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Jawaban Pertanyaan</h1>
                <hr class="my-4">
                <a href="/pertanyaan" class="btn btn-success">Kembali</a>
            </div>

            <ul class="list-group">
                @foreach ($pertanyaan as $p)
                <li class="list-group-item list-group-item-primary">
                    <h4>{{$p->judul}}</h4>
                </li>
                <li class="list-group-item">
                    <p>{{$p->isi}}</p>
                    <h6 class="text-right">{{$p->created_at}}</h6>
                </li>

                <li class="list-group-item">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <form action="/jawaban/{{$p->id}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_pertanyaan" value="{{$p->id}}">
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" placeholder="Isi jawabanmu disini"></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" class="btn btn-secondary" value="Simpan">
                                </div>
                            </form>
                        </li>
                @endforeach
                        @foreach($jawaban as $j)
                            <li class="list-group-item">
                                <p>{{$j->isi}}</p>
                                <h6 class="text-right">{{$j->created_at}}</h6>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            &nbsp;
            &nbsp;
        </div>
    </body>
</html>
