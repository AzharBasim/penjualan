<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan data penjualan</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
</table>

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;padding-left:20px;"><center><h4>LAPORAN PENJUALAN PRODUK</h4></center><br/></td>
</tr>
</table>

<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
    <tr>
        <th style="width:50px;">No</th>
        <th>No Faktur</th>
        <th>Tanggal</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Satuan</th>
        <th>Harga Jual</th>
        <th>Qty</th>
        <th>Diskon</th>
        <th>Pembeli</th>
        <th>Total</th>
    </tr>
</thead>
<tbody>
<?php
$no=0;
foreach ($data->result_array() as $i) {
    $no++;
    $nofak=$i['jual_nofak'];
    $tgl=$i['jual_tanggal'];
    $produk_id=$i['d_jual_produk_id'];
    $produk_nama=$i['d_jual_produk_nama'];
    $produk_satuan=$i['d_jual_produk_satuan'];
    $produk_harjul=$i['d_jual_produk_harjul'];
    $produk_qty=$i['d_jual_qty'];
    $produk_diskon=$i['d_jual_diskon'];
    $produk_pembeli=$i['jual_pembeli'];
    $produk_total=$i['d_jual_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $nofak;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:center;"><?php echo $produk_id;?></td>
        <td style="text-align:left;"><?php echo $produk_nama;?></td>
        <td style="text-align:left;"><?php echo $produk_satuan;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($produk_harjul);?></td>
        <td style="text-align:center;"><?php echo $produk_qty;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($produk_diskon);?></td>
        <td style="text-align:center;"><?php echo $produk_pembeli;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($produk_total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>
<?php
    $b=$jml->row_array();
?>
    <tr>
        <td colspan="10" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Bandung, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>

    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>
    <tr>
        <td align="right">( <?php echo $this->session->userdata('nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>
