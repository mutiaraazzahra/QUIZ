<h2><?php echo $title; ?></h2>   

<?php echo validation_errors(); ?>   

<?php echo form_open('barang/checkout'); ?>
    <table>
        <tr>
            <td><label for="kode">KODE BARANG</label></td>             
            <td><input type="input" name="kode" size="50" /></td>
        </tr>
        <tr>
             <td><label for="nama">NAMA BARANG</label></td>             
            <td><input type="input" name="nama" size="50" /></td>
        </tr>
        <tr>
            <td><label for="jumlah">JUMLAH BARANG</label></td>             
            <td><input type="input" name="jumlah" size="50" /></td>
        </tr>
        <tr>
            <td><label for="harga">HARGA BARANG</label></td>             
            <td><input type="input" name="harga" size="50" /></td>
        </tr>
        <tr>
            <td></td>             
            <td><input type="submit" name="submit" value="KIRIM" /></td>
        </tr>
    </table>
</form>     