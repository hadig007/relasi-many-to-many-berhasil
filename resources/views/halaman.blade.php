<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-bordered mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Post</th>
                    <th>Slug</th>
                    <th>category</th>
                </tr>
            </thead> 
            <tbody>
            @foreach($user as $us) 
            @foreach($us->posts as $ps)
            @foreach($ps->categories as $cat)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td>{{ $us->id }}</td>
                <td>{{ $us->name }}</td>
                <td>{{ $us->email }}</td>
                <td>
                    {{ $ps->title }} 
                </td>
                <td>
                    {{ $ps->body }} 
                </td>
                <td>
                        
                    {{ $cat->slug }}
                </td>
                <td>
                    {{ $cat->category }}            
                </td>
            </tr>
            @endforeach
            @endforeach
            @endforeach
        </tbody>
        </table>
       
    </div>
</body>
</html>