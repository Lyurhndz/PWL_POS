<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <h1>Form Add Data User</h1>
        <form method="post" action="{{ url('/user/add_save') }}">
        @csrf
        <label>Username</label>
        <input type="text" name="username" placeholder="Insert Username">
        <br>
        <label>Nama</label>
        <input type="text" name="name" placeholder="Insert Name">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Insert Password">
        <br>
        <label>Level Id</label>
        <input type="number" name="level_id" placeholder="Insert ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="save">
        </form>

        @if(session('success'))
            <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif
    </body>
</html>