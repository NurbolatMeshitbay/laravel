<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>LIST of Products</h1>
@foreach($data as $oneData)
    <div>
        <h2>{{$oneData->Name}}</h2>
        {{$oneData->SKU}}<br>
        {{$oneData->Price}}$<br>
        <h>______________________________________________</h>
    </div>
@endforeach
</body>
</html>
