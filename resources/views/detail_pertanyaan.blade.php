<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Detail Pertanyaan</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Detail Pertanyaan</h1>
                <hr class="my-4">
                <a href="/pertanyaan" class="btn btn-success">Kembali</a>
            </div>

            <ul class="list-group">
                <li class="list-group-item list-group-item-primary"">
                    <h5>Detail</h5>
                </li>
                <li class="list-group-item">
                    @foreach ($pertanyaan as $p)
                        <div class="row">
                            <div class="col-2">
                                <p>Judul Pertanyaan</p>
                            </div>
                            <div class="col-10">
                                <p>: {{$p->judul}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Isi Pertanyaan</p>
                            </div>
                            <div class="col-10">
                                <p>: {{$p->isi}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Tanggal dibuat</p>
                            </div>
                            <div class="col-10">
                                <p>: {{$p->created_at}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Tanggal diperbarui</p>
                            </div>
                            <div class="col-10">
                                <p>: {{$p->updated_at}}</p>
                            </div>
                        </div>
                        <form action="/pertanyaan/{{$p->id}}" method="POST">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <a href="/pertanyaan/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </form>
                    @endforeach
                </li>
            </ul>
            <br>
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">
                    <h5>Jawaban-jawaban yang tersimpan</h5>
                </li>
                <li class="list-group-item">
                    <ul class="list-group list-group-flush">
                        @if(count($jawaban) != 0)
                            @foreach($jawaban as $j)
                                <li class="list-group-item">
                                    <p>{{$j->isi}}</p>
                                    <h6 class="text-right">{{$j->created_at}}</h6>
                                </li>
                            @endforeach
                        @else
                            <li class="list-group-item">
                                <p>Belum ada jawaban yang tersimpan</p>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
            &nbsp;
            &nbsp;
        </div>
    </body>
</html>
