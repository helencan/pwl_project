<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>

    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <table border="1" bgcolor="black" cellpadding="8" cellspacing="0">
                <tr>
                    <td colspan="2" align="center">
                        <font color="white">
                            <h2>Register User</h2>
                        </font>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font color="white">Nama</font>
                    </td>
                    <td>
                        <input type="text"
                               name="name"
                               size="50"
                               value="{{ old('name') }}"
                               placeholder="User Name"
                               required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font color="white">Email</font>
                    </td>
                    <td>
                        <input type="email"
                               name="email"
                               size="50"
                               value="{{ old('email') }}"
                               placeholder="Email"
                               required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font color="white">Password</font>
                    </td>
                    <td>
                        <input type="password"
                               name="password"
                               size="50"
                               placeholder="Password"
                               required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font color="white">Konfirmasi Password</font>
                    </td>
                    <td>
                        <input type="password"
                               name="password_confirmation"
                               size="50"
                               placeholder="Masukkan password kembali"
                               required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Create">
                        <input type="reset" value="Batal">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        Sudah punya akun?
                        <a href="/login">
                            <b>Login</b>
                        </a>
                    </td>
                </tr>

            </table>
        </form>
    </div>

</body>
</html>