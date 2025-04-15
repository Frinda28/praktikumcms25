<h2>Daftar Pengguna</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengguna as $user)
        <tr>
            <td>{{ $user['user_id'] }}</td>
            <td>{{ $user['nama'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['telepon'] }}</td>
            <td>
                <a href="{{ url('/pengguna/'.$user['user_id'].'/edit') }}">Edit</a> |
                <a href="{{ url('/pengguna/'.$user['user_id'].'/hapus') }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
