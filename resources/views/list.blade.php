<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/list-owner" method="get">
        search for Owner: 
        <input type="text" name="searchOwner">
        <button>search</button>
    </form>

    <form action="/list-animal" method="get">
        search for Animal: 
        <input type="text" name="searchAnimal">
        <button>search</button>
    </form>

    @if(isset($searchAnimal))
    <h1>List of Animals</h1>
        <?php foreach($searchAnimal as $entry) : ?>
            <div class="detail">
                <ul class="detail__info">
                    <li>name: <a href="/owners/detail/{{$entry->id}}">{{$entry->name}}</a></li>
                    <li>owner: <a href="/animals/detail/{{$entry->owner_id}}">{{$entry->first_name}} {{$entry->surname}}</a></li>
                    <li>photo: <img src="/images/{{$entry->path}}" alt="{{$entry->path}}"></li>
                </ul> 
            </div>
        <?php endforeach ?>
    @endif

    @if(isset($searchOwner))
    <h1>Owner</h1>
        <?php foreach($searchOwner as $entry) : ?>
            <div class="detail">
                <ul class="detail__info">
                    <li>owner: <a href="/owners/detail/{{$entry->owner_id}}">{{$entry->first_name}} {{$entry->surname}}</a></li>
                    <li>name: <a href="/animals/detail/{{$entry->id}}">{{$entry->name}}</a></li>
                    <li>photo: <img src="/images/{{$entry->path}}" alt="{{$entry->path}}"></li>
                </ul> 
            </div>
        <?php endforeach ?>
    @endif

    
    @if(isset($animals))
    <h1>List of Animals</h1>
    @foreach($animals as $animal)
    <div class="detail">
        <ul class="detail__info">
            <li>name: <a href="/animals/detail/{{$animal->id}}">{{$animal->name}}</a></li>
            <li>owner: <a href="/owners/detail/{{$animal->owner_id}}">{{$animal->first_name}} {{$animal->surname}}</a></li>
            <li>photo: <img src="/images/{{$animal->path}}" alt="{{$animal->path}}"></li>
        </ul> 
    </div>
    @endforeach
    @endif  
</body>
</html>