<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Surat Boro Nikah</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.kop {
	font-family:Geneva, Arial, Helvetica, sans-serif;
	letter-spacing: 2px;
	font-stretch:extra-condensed;
	word-spacing: 10px;
}
table.data {
	border:1px solid black;
	border-collapse:collapse;
}
table.data td {
	border:1px solid black;
	padding:1px 5px;
}
table.data th {
	border:1px solid black;
	font-weight:bold;
	padding:2px 5px;
}
-->
</style>
</head>
<body onLoad="window.print()">
<table width="700" align="center" border="0">
  <tr>
    <td colspan="4" align="center" class="kop"><strong><font size="+1" >PEMERINTAH KABUPATEN BLITAR<br>
      KECAMATAN SRENGAT<br>
      KANTOR KEPALA DESA SELOKAJANG</font><br>
      <font size="-1"><em> JLN. A. YANI NO.1 TELP 552296</em></font></strong> </td>
  </tr>
  <tr>
    <td colspan="4" align="center"><hr style="padding:0px;margin:0px;height:4px;color:#000000;"/>
    </td>
  </tr>  
</table>
<table width="700" align="center" border="0">
  <tr>
    <td colspan="6"><div align="center"><strong>SURAT KETERANGAN IJIN ISTRI/SUAMI/ORANG TUA</strong></div></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="3"><strong>Nomor :<? echo $content['noSurat'] ; ?></strong></td>
  </tr>
  <tr> 
    <td width="22%">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td width="34%" colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Yang bertanda tangan di bawah ini, Kepala 
        Desa Selokajang, Kecamatan Srengat, Kabupaten Blitar dengan ini menerangkan 
    dengan sebenarnya  :</p></td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td colspan="3">: <? echo $content['nama']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Tempat, Tanggal Lahir</td>
    <td colspan="3">: <? echo $content['tempatLahir']; ?>, <? echo $content['tglLahir']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td colspan="3">: <? echo $content['kelamin']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgama']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Pekerjaan </td>
    <td colspan="3">: <? echo $content['pekerjaan']; ?> </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Alamat</td>
    <td colspan="3">: <? echo $content['alamat']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3"></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Memberikan ijin kepada istri / suami / anak untuk bekerja         ke : <? echo $content['keperluan']; ?></p></td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td colspan="3">: <? echo $content['namaIjin']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Tempat, Tanggal Lahir</td>
    <td colspan="3">: <? echo $content['tempatLahirIjin']; ?>, <? echo $content['tglLahirIjin']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td colspan="3">: <? echo $content['kelaminIjin']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgamaIjin']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Pekerjaan </td>
    <td colspan="3">: <? echo $content['pekerjaanIjin']; ?> </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Alamat</td>
    <td colspan="3">: <? echo $content['alamatIjin']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Demikian surat keterangan ini kami buat untuk dipergunakan         sebagaimana mestinya.</p></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2" style="padding-left:30px;">Selokajang , <? echo $content['tglSurat'];?></td>
  </tr>
  <tr> 
    <td><div align="center">Pemegang Surat </div></td>
    <td colspan="3"><div align="center">Pemberi Ijin</div></td>
    <td colspan="2"> <div align="center">Kepala Desa Selokajang</div></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td><div align="center" style="text-decoration:underline;"><? echo $content['namaIjin']; ?></div></td>
    <td colspan="3"><div align="center"  style="text-decoration:underline;"><? echo $content['nama']; ?></div></td>
    <td colspan="2"> <div align="center" style="text-decoration:underline;"><? echo $content['kades']; ?></div></td>
  </tr>
</table>
</body>
</html>
