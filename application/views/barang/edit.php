<h2><?php echo $title; ?></h2>   

<?php echo validation_errors(); ?>   

<?php echo form_open('barang/edit/'.$barang_item['kode']); ?> 
    <table>
        <tr>
            <td><label for="kode">Kode Barang</label></td>             
            <td><input type="input" name="kode" size="50" value="<?php echo $barang_item['kode'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="nama">Nama Barang</label></td>             
            <td><input type="input" name="nama" size="50" value="<?php echo $barang_item['nama'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="jumlah">Jumlah Pesanan</label></td>             
            <td><input type="input" name="jumlah" size="50" value="<?php echo $barang_item['jumlah'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="harga">Harga</label></td>             
            <td><input type="input" name="harga" size="50" value="<?php echo $barang_item['harga'] ?>"/></td>
        </tr>
        <tr>
            <td><label for="total">Total</label></td>             
            <td><input type="input" name="total" size="50" value="<?php echo $barang_item['total'] ?>"/></td>
        </tr>
        <tr>
        <td></td>
            <td><input type="submit" name="submit" value="Update barang item" /></td> 
        </tr>
    </table>
</form>