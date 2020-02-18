<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> HELLO </title>

	<style type="text/css">

	::selection { background-color: #222; color: white; }
	::-moz-selection { background-color: #111; color: white; }

	body {
		background-color: lightgrey;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: grey;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>LUAS PERSEGI PANJANG <?= base_url() ?> </h1>

	<div id="body">
    <form action="<?php echo base_url()."welcome/hitung_luas"; ?>" method="POST" name="form1">
    <table>
        <tbody>
             <tr> 
                <td> PANJANG </td>
                <td> <input type="number" name="panjang" value="<?= isset ($panjang) ? $panjang : null ?>"></td>
            </tr>
                <td> LEBAR </td>
                <td> <input type="number" name="lebar" value="<?= isset ($lebar) ? $lebar : null ?>"></td>
            </tr>
                <td> LUAS </td>
                <td> <input type="number" name="luas" value="<?= isset ($luas_pp) ? $luas_pp: null ?>"></td>
            </tr>
                <td> 
                    <button type="submit">HITUNG</button>
                <td>
            </tr>
        <tbody>
    </table>
</form>
</div>
</body>
</html>