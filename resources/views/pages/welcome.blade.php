@extends('layout.master')

@section('judul')
Welcome
@endsection

@section('content')
<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
        </head>
        <body>
            <h1>SELAMAT DATANG {{$firstName}} {{$lastName}}</h1>
                <h3>Terima kasih telah bergabung di Website Kami, Media Belajar kita bersama !</h3>
        </body>
    </html>

@endsection