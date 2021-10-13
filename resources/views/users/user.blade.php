<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <form action="/user" method="post">
        @csrf
        <input type="text" name="name" placeholder="Add User">
        <input type="submit" value="submit">
    </form>

    <form action="/user" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Update User">
        <input type="submit" value="submit">
    </form>

    <form action="/user" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" placeholder="Update Name">
        <input type="submit" value="submit">
    </form>

    <form action="/user" method="post">
        @csrf
        @method('delete')
        <input type="text" name="name" placeholder="Delete User">
        <input type="submit" value="submit">
    </form>

</body>
</html>