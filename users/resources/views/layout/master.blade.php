<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>APTECH PHP 13</title>
  <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('./css/bootstrap-grid.css')}}">
  <link rel="stylesheet" href="{{asset('./css/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{asset('./css/bootstrap-reboot.css')}}">
  <link rel="stylesheet" href="{{asset('./css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('./css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body class="mau-nen">
  @include('layout.header') 
@section('content') @show
  @include('layout.section')
  @include('layout.footer')
  @include('layout.css')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
   integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
   crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
  crossorigin="anonymous"></script>

</body>

</html>