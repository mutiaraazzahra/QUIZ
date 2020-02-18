<h2><?php echo $title; ?></h2> 
<a href="<?php echo site_url('barang/create'); ?>"> ADD </a> 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Kode Barang</strong></td>        
        <td><strong>Nama Barang</strong></td>         
        <td><strong>Jumlah Pesanan</strong></td>
        <td><strong>Harga </strong></td>
        <td><strong>Total </strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($barang as $barang_item): ?>
    <tr>
    <td><?php echo $barang_item['kode']; ?></td>          
    <td><?php echo $barang_item['nama']; ?></td>                
    <td><?php echo $barang_item['jumlah']; ?></td>             
    <td><?php echo $barang_item['harga']; ?></td>             
    <td><?php echo $barang_item['total']; ?></td> 
    <td>
                         
        <a href="<?php echo site_url('barang/edit/'.$barang_item['kode']); ?>">Update</a> |                  
        <a href="<?php echo site_url('barang/delete/'.$barang_item['kode']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>
