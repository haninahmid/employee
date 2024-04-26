<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="id_emp">ID Employee</label>
            <input type="text" id="id_emp" name="id_emp" required autofocus>
        </div>

        <div>
            <label for="emp_number">Employee Number</label>
            <input type="text" id="emp_number" name="emp_number" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
