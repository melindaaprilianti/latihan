<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Tampil data profile</h1>
<a href="<?=base_url('profile/tambah_data')?>"> <p calss="text-center">Tambah Data Profile</p> </a>
    <form action="<?= base_url('profile/action_tambah_data') ?>" method="post">
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama depan</th>
                <th>Nama belakang</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Jenis kelamin</th>
                <th>Alamat</th>
                <th>Jenjang pendidikan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($profile as $p) { ?>
            <tr>
                <td><?=$no ?></td>
                <td><?=$p->nama_depan ?></td>
                <td><?=$p->nama_belakang ?></td>
                <td><?=$p->tempat_lahir ?></td>
                <td><?=$p->tanggal_lahir ?></td>
                <td><?=$p->jenis_kelamin ?></td>
                <td><?=$p->alamat ?></td>
                <td><?=$p->jenjang_pendidikan ?></td>
            <td><a href="<?= base_url('profile/update_data/'.$p->id)?>"> <p class="text-center"> Edit </p> </a></td>
            <td><a href="<?= base_url('profile/hapus_data/'.$p->id)?>"> <p class="text-center"> hapus </p> </a></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>