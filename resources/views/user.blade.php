<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="/user/add">+ Add User</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>ID Level User</th>
                <th>Level Code</th>
                <th>Level Name</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->user_id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->level_id}}</td>
                    <td>{{$d->level->level_code}}</td>
                    <td>{{$d->level->level_name}}</td>
                    <td><a href="{{ url('/user/change/' . $d->user_id) }}">Change</a> | <a href="{{ url('/user/delete/' . $d->user_id) }}">Delete</a></td>
                </tr>
            @endforeach
            
            <tr>
                    {{-- <td>{{$data->user_id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->level_id}}</td> --}}
        </table>
        {{-- <table border="1" cellpadding="5" cellspacing="0">
            <th>Total User</th>
            <tr>
                <td>{{$total}}</td>
            </tr> --}}
        </table>
    </body>
</html>