<center><h1>Detail Hasil Ujian</h1></center>

<table>
    <tr>
        <td>Nomor Induk</td>
        <td> : <?= $info['nim'] ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td> : <?= $info['nama_siswa'] ?></td>
    </tr>
    <tr>
        <td>Mata Pelajaran</td>
        <td> : <?= $info['nama_mapel'] ?></td>
    </tr>
    <tr>
        <td>Jenis Ujian</td>
        <td> : <?= $info['nama_ujian'] ?></td>
    </tr>   
</table>
<hr>
<center><b>Hasil Ujian</b>
<table width="80%" border="1">
    <thead>
        <th>No. </th>
        <th>Soal</th>
        <th>Jawaban Siswa</th>
        <th>Jawaban Tepat</th>
        <th>Hasil Siswa</th>    
    </thead>
    <tbody>
    <?php 
    $no = 1;
    $urut = 0;
    foreach($soal as $s):
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $s['soal'] ?></td>
        <td>
            <?php
            $jwbSiswa = explode(':',$jawaban[$urut]);
            echo $jwbSiswa[1];
            ?>
        </td>
        <td>
            <?= $s['jawaban'] ?>
        </td>
        <td>
            <?php
            if($s['jawaban'] == $jwbSiswa[1]){
                echo 'Benar';
            }else{
                echo 'Salah';
            }
            ?>
        </td>
    </tr>
    <?php 
    $no++;
    $urut++;
        endforeach; 
    ?>
    </tbody>
</table>
</center>