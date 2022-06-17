<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create form</title>
</head>
<body>
    @if ($animal->id)
    <form action="/animals/create/{{$animal->id}}" method="post">
    @method('put')
    @else
    <form action="{{ action('App\Http\Controllers\AnimalController@store')}}" method="post">
    @endif
        @csrf
        {{-- {{dd($_GET)}} --}}
        {{-- <input type="hidden" name="owner_id" value={{$POST[ownerId]}}> --}}
        <label>Name</label>
        <input type="text" name="name" value="{{old('name', $animal->name)}}">

        <label>Breed</label>
        <input type="text" name="breed" value="{{old('breed', $animal->breed)}}">

        <label>Age</label>
        <input type="text" name="age" value="{{old('age', $animal->age)}}">

        <label>Weight</label>
        <input type="text" name="weight" value="{{old('weight', $animal->weight)}}">

        <button>submit</button>
    </form>
    @if ($animal->id)
        <form action="{{action('App\Http\Controllers\AnimalController@delete', [$animal->id])}}" method="post">
            @method('delete')
            @csrf
            <button>Delete</button>
            </form>
        @endif
    
</body>
</html>