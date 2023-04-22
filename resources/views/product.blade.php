<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produtos</title>
</head>
<body>
  <br>
  {{-- print content converted for html using htmlspecialchars() --}}
  {{ $titulo_html }}
  <br>
  {{-- print content ignoring converted for html using htmlspecialchars() --}}
  {!! $titulo_html !!}
</body>
</html>