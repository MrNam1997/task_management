<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Task</title>
</head>
<body>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
            <button><a href={{route('task.create')}}>create</a></button>
            <button><a href={{route('task.edit',["id"=>1])}}>edit</a></button>
            <button><a href={{route('task.destroy',['id'=>2])}}>delete</a></button>
        </td>

    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>
            <button><a href={{route('task.create')}}>create</a></button>
            <button><a href={{route('task.edit',["id"=>1])}}>edit</a></button>
            <button><a href={{route('task.destroy',['id'=>2])}}>delete</a></button>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>
            <button><a href={{route('task.create')}}>create</a></button>
            <button><a href={{route('task.edit',["id"=>1])}}>edit</a></button>
            <button><a href={{route('task.destroy',['id'=>2])}}>delete</a></button>
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>
