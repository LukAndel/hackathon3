<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details of {{$animal->name}}</title>
</head>
<body>
    <h1>{{$animal->name}}</h1>
    <h2>{{$animal->breed}}</h2>
    <h4>{{$animal->age}} Years old</h4>
    @if ($animal->weight)
    
    <h4>Weight: {{$animal->weight}} Kg</h4>
    
    @endif
    <h3>Owner: <a href="/owners/detail/{{$animal->owner->id}}">{{$animal->owner->first_name}} {{$animal->owner->surname}}</a></h3>
    <img src="/images/{{$image->path}}" alt="">
</body>
</html>