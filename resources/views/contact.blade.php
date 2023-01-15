<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('test') }}" method="post">

        <Label>Name</Label><br>
      
        @method('PUT')
        @csrf
        <input type="text" name="name"><br>
        <Label>Email</Label><br>
        <input type="email" name="email"><br>
        <button type="submit">Submit</button>
    </form>
<br>


</body>

</html>