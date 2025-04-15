<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengguna</title>
</head>
<body>
    <h1>Edit Pengguna </h1>

    <form action="/pengguna/{{ $pengguna['user_id'] }}/update" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $pengguna['nama'] }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $pengguna['email'] }}"><br><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="{{ $pengguna['password'] }}"><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="telepon" value="{{ $pengguna['telepon'] }}"><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
