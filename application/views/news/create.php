<h2><?php echo $title; ?></h2>   

<?php echo validation_errors(); ?>   

<?php echo form_open('news/create'); ?>
    <table>
        <tr>
            <td><label for="KODE BARANG">KODE BANRANG</label></td>             
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
             <td><label for="NAMA BARANG">NAMA BARANG</label></td>             
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="JUMLAH PESANAN">JUMLAH BARANG</label></td>             
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td></td>             
            <td><input type="submit" name="submit" value="KIRIM" /></td>
        </tr>
    </table>
</form>