<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{------------------------------------------- css -------------------------------------------}}
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    {{--TODO 필요할진 모르겠다.--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">--}}
    {{------------------------------------------- js -------------------------------------------}}
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <title>Gallery</title>
</head>
<body class="no-margin">
@include('partials.header')
<div class="grid">
    @foreach($images as $image)
    <figure class="grid-item">
        <img src="{{$image}}">
        <figcaption>Random image</figcaption>
    </figure>
    @endforeach
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/js/index.js"></script>
</html>