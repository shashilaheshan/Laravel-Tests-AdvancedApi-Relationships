<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;

            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 20px;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <form action="/save-role" method="post">
        @csrf
        <h1>Roles</h1>
        @foreach($roles as $role)


            <input type="checkbox" name="role[]" value="{{$role->id}}"  /> <span>{{$role->name}}</span> </br>

        @endforeach

        <input type="text" name="user"/>
        <input type="submit" value="Submit"/>
    </form>

    <div class="content">

     <h1>Users with roles</h1>

        <table class="table table-dark">
            <thead>
            <th>User</th>
            <th>Roles Granted</th>
            </thead>
            <tbody>
            @foreach($users as $user)


                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        <?php
                        $roles=json_decode($user->roles);
                        $rolename=[];
                        foreach ($roles as $role){
                            $rolename[]=\App\Role::find($role)->name;
                        }

                        $roles_names=implode(',',$rolename);
                        echo $roles_names;

                        ?>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>


    </div>
</div>
</body>
</html>
