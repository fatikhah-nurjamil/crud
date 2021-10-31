<html>
    <head>
        <title>Form Input Matakuliah</title>
    </head>

    <body>
        <center>
            <form action="<?= base_url('Matakuliah/cetak'); ?>"method="post">
                <table>
                    <tr>
                        <th colspan="3">
                            Form Input Data Mata Kuliah
                        </th>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <th>Kode MTK</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>" placeholder="Required">
                        </td>
                        <td><?php echo form_error('kode'); ?></td>
                    </tr>

                    <tr>
                        <th>Nama MTK</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" placeholder="Required">
                        </td>
                        <td><?php echo form_error('nama'); ?></td>
                    </tr>

                    <tr>
                        <th>SKS</th>
                        <td>:</td>
                        <td>
                            <select name="sks" id="sks">
                                <option value="">PILIH SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td><?php echo form_error('sks'); ?></td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Simpan">
                            <input type="reset" value="Batal">
                        </td>
                    </tr>
                </table>
            </form>
            <br><br>
            <table border='1pt'>
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th colspan='2'>Action</th>
                </tr>
                <?php
                $no=1;
                ?>
                <?php foreach ($matkul as $matkul): ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $matkul->kode;?></td>
                        <td><?= $matkul->nama;?></td>
                        <td><?= $matkul->sks;?></td>
                        <td><a href="<?= base_url('Matakuliah/edit/'.$matkul->kode)?>">Edit</td>
                        <td><a href="<?= base_url('Matakuliah/hapus/'.$matkul->kode)?>">Hapus</td>
                    </tr>

                <?php endforeach ?>

            </table>
        </center>
    </body>
</html>
