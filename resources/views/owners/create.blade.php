<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create form</title>
</head>
<body>
    @if ($owner_id)
    <form action="/owner/{{$owner_id}}" method="post">
    @else
    <form action="{{ action('OwnerController@edit')}}" method="post">
    @method('put')
    @endif
        @csrf

        <label>First Name</label>
        <input type="text" name="first_name" value="{{old('first_name', $owner->first_name)}}">

        <label>Surname</label>
        <input type="text" name="surname" value="{{old('surname', $owner->surname)}}">

        <label>Email</label>
        <input type="email" name="email" value="{{old('email', $owner->email)}}">

        <label>Phone number</label>
        <input type="text" name="phone" value="{{old('phone', $owner->phone)}}">

        <label>Address</label>
        <input type="text" name="address" value="{{old('address', $owner->address)}}">
    </form>

    
</body>
</html>