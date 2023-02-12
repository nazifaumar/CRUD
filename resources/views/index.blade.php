<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<body>
    <table class="table dark">
        <thead>
            <tr style="text-align: center" class="table-striped">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Bentuk</th>
                <th scope="col">Dikonsumsi Oleh</th>
                <th scope="col">Harga</th>
                <th scope="col" style="text-align: center">Action</th>
            </tr>
        </thead>
        @foreach ($obat as $item)
            <tbody>
                <tr style="text-align: center">
                    <th scope="row"></th>
                    <td>{{ $item->nama }} </td>
                    <td>{{ $item->bentuk }} </td>
                    <td>{{ $item->konsumsi }} </td>
                    <td>{{ $item->harga }} </td>
                    <td style="text-align: center">
                        <form action="/edit/{{ $item['id'] }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-primary text-white me-2" >Edit</button>
                        </form>
                        <form action="/delete/{{ $item['id'] }}" method="POST"  class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger text-white me-2">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>
</html>