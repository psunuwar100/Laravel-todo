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
    <div>
        <form action="{{route('saveTodo')}}" method="post" class="form-control p-3">
            @csrf
            <label for="" class=""><h4>ToDo</h4></label><br>
            <input type="text" name="todoName" class="form-control" placeholder="Enter your Todo"><br>
            <button type="Submit" class="btn btn-success">Add</button>
        </form>
    </div>
        <table class="table table-hover w-75 mx-auto my-3">
            <thead>
                <tr class="table-primary">
                    <th scope="col">SN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
                        @foreach($lists as $value)
                        <tr class="table-primary">
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$value->Title}}</td>
                            <td>
                                <!-- <button class="btn btn-primary">Edit</button> -->
                                <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tr>
            </tbody>
        </table>
</body>
</html>