<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<h1 class= "text-center">Shopping application</h1>
<form action="{{route('updateTodo')}}" method="post" class="form-control p-3">
            @csrf
            <label for="" class=""><h4>Edit</h4></label><br>
            <input type="hidden" name="id" class="form-control" placeholder="Edit your Todo" value="{{$data->id}}" >
            <input type="text" name="updateName" class="form-control" placeholder="Edit your Todo" value="{{$data->Title}}"><br>

            <button type="Submit" class="btn btn-success">Update</button>
        </form>
</body>
</html>