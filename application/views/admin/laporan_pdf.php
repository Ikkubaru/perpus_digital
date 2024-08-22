<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Peminjaman</title>
    <style>
        /* Tambahkan styling untuk tampilan PDF */
        body { font-family: Arial, times; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Laporan Peminjaman</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($peminjaman as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_lengkap'] ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['tgl_dipinjam'] ?></td>
                <td><?= $row['tgl_dikembalikan'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
