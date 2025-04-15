<!DOCTYPE html>
<html>
<head>
    <title>Data Diperbarui</title>
</head>
<body>
    <h1>Data Setelah Diedit</h1>

    <ul>
        <li><strong>Nama:</strong> {{ $data['nama'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Password:</strong> {{ $data['password'] }}</li>
        <li><strong>Telepon:</strong> {{ $data['telepon'] }}</li>
    </ul>

    <a href="/pengguna">Kembali ke daftar</a>
</body>
</html>
