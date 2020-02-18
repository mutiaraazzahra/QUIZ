<h2><?php echo $title; ?></h2>   

<?php echo validation_errors(); ?>   
<?php echo form_open('barang/create'); ?>
    <table>
        <tr>
            <td><label for="kode">KODE BARANG</label></td>             
            <td><input type="input" name="kode" size="50" value="<?= $this->input->post('kode'); ?>" readonly/></td>
        </tr>
        <tr>
             <td><label for="nama">NAMA BARANG</label></td>             
            <td><input type="input" name="nama" size="50" value="<?= $this->input->post('nama'); ?>" readonly/></td>
        </tr>
        <tr>
            <td><label for="jumlah">JUMLAH BARANG</label></td>             
            <td><input type="input" name="jumlah" size="50" value="<?= $this->input->post('jumlah'); ?>" readonly/></td>
        </tr>
        <tr>
            <td><label for="harga">HARGA BARANG</label></td>             
            <td><input type="input" name="harga" size="50" value="<?= $this->input->post('harga'); ?>" readonly/></td>
        </tr>
        <tr>
            <td><label for="total">TOTAL</label></td>             
            <td><input type="input" name="total" size="50" value="<?= $total ?>" readonly/></td>
        </tr>
        <tr>
            <td></td>             
            <td>
                <input type="submit" name="submit" value="KIRIM" />
                <?= anchor(site_url('barang'), '<input type="button" value="CANCEL" />') ?>
            </td>
        </tr>
    </table>
</form>     