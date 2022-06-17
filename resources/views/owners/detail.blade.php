<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details of {{$owner->first_name}} {{$owner->surname}}</title>
</head>
<body>
    @include('common/messages')
    <h1>{{$owner->first_name}} {{$owner->surname}}</h1>
    <p>email: {{$owner->email}}</p>
    <p>phone: {{$owner->phone}}</p>
    <p>address: {{$owner->address}}</p>
    <ul>Pets:
    @foreach ($owner->animals as $pet)
    <li><a href="/animals/detail/{{$pet->id}}">{{$pet->name}}</a></li>
    @endforeach
    </ul>
    <button onclick="window.location.href='../../owners/create/{{$owner->id}}'">Edit</button>
    <br>
    <form action="/animals/create" method="get">
    @csrf
    <input type="hidden" name="ownerId" value="{{$owner->id}}">
    <button>Add animal</button>
    {{-- onclick="window.location.href='../../animals/create'" --}}
    </form>
</body>
</html>