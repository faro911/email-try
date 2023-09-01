<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (session()->has('success'))
    <p style="color: blue; background-color: aqua; padding: 10px">
        <strong>Success!</strong> {{ session('success') }}
    </p>
    @endif
    @if (session()->has('error'))
        <p style="color: white; background-color: red; padding: 10px">
            <strong>Error!</strong> {{ session('error') }}
        </p>
    @endif

    <h1>FORM MAIL CHECKER</h1>
    <form method="POST" action="/send-email" style="width: 500px; border: 2px black solid; padding: 10px ">
        @csrf
        <label for="name">Name
            <input type="text" name="name" id="name" required style="padding: 10px">
        </label>
        <label for="body">Mssg
            <input type="text" name="body" id="body" style="padding: 10px" required><br>
        </label>
        <button type="submit" style="width: 100%; height: 50px; margin-top: 10px">submit</button>
    </form>

</body>

</html>
