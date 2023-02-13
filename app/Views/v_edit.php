<?= $this->extend('v_Template');?>
<?= $this->section('content'); ?>

<section id="form-mahasiswa-store">
    <?php
    if (isset($errors)) {
        echo '<div style="width: 300px"; border-radius: 5px; >';
        echo '<ul style="background-color: red; color: white; padding: 10px;">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>
    <?= form_open('/editStore'); ?>
    <table>
    <tr>
        <td for="NIM" width="100">NIM</td>
        <td><input type="number" name="NIM" id="NIM" value="<?= $data['NIM'] ?>"></td>
    </tr>
    <tr>
        <td for="Nama" width="100">Nama Mahasiswa</td> 
        <td><input type="text" name="Nama" id="Nama" value="<?= $data['Nama'] ?>"></td>
    </tr>
    <tr>
        <td for="Umur" width="100">Umur</td> 
        <td><input type="number" name="Umur" id="Umur" value="<?= $data['Umur'] ?>"></td>
    </tr>
    <tr>
        <td><a href="/mahasiswa">&laquo; Kembali</a></td>
        <td><input type="submit" name="ubah" value="Ubah"></td>
    </tr>
</table>
<?= form_close(); ?>
</section>

<?= $this->endSection(); ?>