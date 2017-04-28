<title>OOP KENDARAAN</title>
<body bgcolor="gray"> //untuk pemilihan warna background
<center>
<br><br><br><br><br>

	
<?php
error_reporting(0);
//Pembuatan Class dengan nama Class Kendaraan
class kendaraan{
	var $j_roda;
	var $warna;
	var $b_bakar;
	var $harga;
	var $merek;
	var $t_pembuatan;

//Sedangkan bagian ini merupakan bagian yang diseut Method,berisi function
	function mrk(){
		return $this->merek;
	}
	function roda(){
		return $this->j_roda ;
	}
	function bbakar(){
		return $this->b_bakar ;
	}
	function hrg(){
		return $this->harga ;
	}
	function pembuatan(){
		return $this->t_pembuatan ;
	}
	function wrn(){
		return $this->warna ;
	}


	function statusharga(){
		if ($this->harga > 50000000) 
			$status = 'Mahal';
		elseif ($this->harga >= 25000000 )
			$status = 'Sedang';
		else 
			$status = 'Murah';
		return $status;
	}

	function dapatsubsidi(){
		if ($this->b_bakar == 'Premium' && $this->t_pembuatan < 2005 ) 
			$status = 'Ya';
		else 
			$status = 'Tidak';
		return $status;
	}

	function hargasecond(){
		if ($this->t_pembuatan > 2005 ) {
			$status = $this->harga - ($this->harga * 0.2) ;
		}elseif ($this->t_pembuatan >= 2000 && $this->t_pembuatan <= 2005 ) {
			$status = $this->harga - ($this->harga * 0.3) ;
		}elseif ($this->t_pembuatan < 2000 )  {
			$status = $this->harga - ($this->harga * 0.4) ;
		}
		return $status;
	}
}

// Sedangkan untuk Instantisasi Object adalah seperti dibawah ini
$kendaraan2 = new kendaraan();
$kendaraan3 = new kendaraan();
$kendaraan4 = new kendaraan();

// Memberikan Nilai Pada Property
$kendaraan2->merek = 'Toyota Yaris';
$kendaraan2->harga = 160000000;
$kendaraan2->b_bakar = 'Premium';
$kendaraan2->t_pembuatan = 2003;
$kendaraan2->j_roda = 4;
$kendaraan2->warna = 'Hitam, Abu-abu';

$kendaraan3->merek = 'Honda Scoopy';
$kendaraan3->harga = 25000000;
$kendaraan3->b_bakar = 'Premium';
$kendaraan3->t_pembuatan = 2004;
$kendaraan3->j_roda = 2;
$kendaraan3->warna = 'Pink';

$kendaraan4->merek = 'Isuzu Partner';
$kendaraan4->harga = 17000000;
$kendaraan4->b_bakar = 'Pertamax';
$kendaraan4->t_pembuatan = 2009;
$kendaraan4->j_roda = 4;
$kendaraan4->warna = 'Biru';

?>
<center><h3>Daftar Kendaraan Shorum "Joss"</h3></center>
<table border="1" cellpadding="6" cellspacing="6">

	<tr >
		<th>Obyek </th>
		<th>Merek</th>
		<th>Jumlah Roda</th>
		<th>Harga</th>
		<th>Warna</th>
		<th>Bahan Bakar</th>
		<th>Tahun Pembuatan</th>
		<th>Statu Harga</th>
		<th>Subsidi</th>
		<th>Harga Second</th>
	</tr>
    // Mencetak Hasil dan memberikan klasifikasi menggunakan Method
	<tr>
		<td>$kendaraan2</td>
		<td><?php echo $kendaraan2->mrk(); ?></td>
		<td><?php echo $kendaraan2->roda(); ?></td>
		<td><?php echo "Rp. ".$kendaraan2->hrg(); ?></td>
		<td><?php echo $kendaraan2->wrn(); ?></td>
		<td><?php echo $kendaraan2->bbakar(); ?></td>
		<td><?php echo $kendaraan2->pembuatan(); ?></td>
		<td><?php echo $kendaraan2->statusharga(); ?></td>
		<td><?php echo $kendaraan2->dapatsubsidi(); ?></td>
		<td><?php echo "Rp. ".$kendaraan2->hargasecond(); ?></td>
	</tr>
		<tr>
		<td>$kendaraan3</td>
		<td><?php echo $kendaraan3->merek; ?></td>
		<td><?php echo $kendaraan3->j_roda; ?></td>
		<td><?php echo "Rp. ".$kendaraan3->harga; ?></td>
		<td><?php echo $kendaraan3->warna; ?></td>
		<td><?php echo $kendaraan3->b_bakar; ?></td>
		<td><?php echo $kendaraan3->t_pembuatan; ?></td>
		<td><?php echo $kendaraan3->statusharga(); ?></td>
		<td><?php echo $kendaraan3->dapatsubsidi(); ?></td>
		<td><?php echo "Rp. ".$kendaraan3->hargasecond(); ?></td>
	</tr>
		<tr>
		<td>$kendaraan4</td>
		<td><?php echo $kendaraan4->merek; ?></td>
		<td><?php echo $kendaraan4->j_roda; ?></td>
		<td><?php echo "Rp. ".$kendaraan4->harga; ?></td>
		<td><?php echo $kendaraan4->warna; ?></td>
		<td><?php echo $kendaraan4->b_bakar; ?></td>
		<td><?php echo $kendaraan4->t_pembuatan; ?></td>
		<td><?php echo $kendaraan4->statusharga(); ?></td>
		<td><?php echo $kendaraan4->dapatsubsidi(); ?></td>
		<td><?php echo "Rp. ".$kendaraan4->hargasecond(); ?></td>

</tr>		
</table>

</center>