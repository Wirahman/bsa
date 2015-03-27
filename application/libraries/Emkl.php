<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Emkl
{
	function __construct()
	{
	}

	function cek_format_tanggal($date)
	{
		//match the format of the date
		if (preg_match ("/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/", $date, $parts))
		{
			//check weather the date is valid of not
			if(checkdate($parts[2],$parts[1],$parts[3]))
				return true;
			else
				return false;
		}
		elseif (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts)) {
			//check weather the date is valid of not
			if(checkdate($parts[2],$parts[3],$parts[1]))
				return true;
			else
				return false;
		}
		else {
			return false;
		}
	}

	function awal_bulan( $tanggal ){
		date_default_timezone_set('Asia/Jakarta');
		$tgl = getdate( strtotime( $tanggal ) );
		$awal = "1-" . $tgl[ 'mon' ] . "-" . $tgl[ 'year' ];
		$d = strtotime( $awal );
		return date( "d-m-Y", $d );
	}

	function akhir_bulan( $tanggal ){
		date_default_timezone_set('Asia/Jakarta');
		$tgl = getdate( strtotime( $tanggal ) );
		if( $tgl[ 'mon' ] == '12' ){
			$akhir = "31-12-" . $tgl[ 'year' ];
			$d = strtotime( $akhir );
		} else {
			$akhir = "1-" . ( $tgl[ 'mon' ] + 1 ) . "-" . $tgl[ 'year' ];
			$d = strtotime( $akhir ) - 1;
		}
		return date( "d-m-Y", $d );
	}

	function date_add( $tanggal,$interval_add,$format_add='Y-m-d' ){
		date_default_timezone_set('Asia/Jakarta');
		$date = new DateTime($tanggal);
		$date->add(new DateInterval('P'.$interval_add));
		return $date->format($format_add);
	}

	function currency( $angka ){
		$temp = explode( '.', $angka );
		if( isset( $temp[1] ) ){
			return ( substr( strrev( chunk_split( strrev( $temp[0] ), 3, "," ) ), 1 ) ) . '.' . $temp[1];
		} else {
			return ( substr( strrev( chunk_split( strrev( $temp[0] ), 3, "," ) ), 1 ) );
		}
	}

	function angka_ke_huruf( $angka_temp ) {
		$angka = abs( $angka_temp );
		$angka_array = array( "", "satu", "dua", "tiga", "empat", "lima",
		"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas" );
		$temp = "";
		if ( $angka < 12 ) {
			$temp = " ". $angka_array[ $angka ];
		} else if ( $angka < 20 ) {
			$temp = $this->angka_ke_huruf( $angka - 10 ). " belas";
		} else if ( $angka <100 ) {
			$temp = $this->angka_ke_huruf( $angka / 10 )." puluh". $this->angka_ke_huruf( $angka % 10 );
		} else if ( $angka < 200 ) {
			$temp = " seratus" . $this->angka_ke_huruf( $angka - 100 );
		} else if ( $angka < 1000 ) {
			$temp = $this->angka_ke_huruf( $angka / 100 ) . " ratus" . $this->angka_ke_huruf( $angka % 100 );
		} else if ( $angka < 2000 ) {
			$temp = " seribu" . $this->angka_ke_huruf( $angka - 1000 );
		} else if ( $angka < 1000000 ) {
			$temp = $this->angka_ke_huruf( $angka / 1000 ) . " ribu" . $this->angka_ke_huruf( $angka % 1000 );
		} else if ( $angka < 1000000000 ) {
			$temp = $this->angka_ke_huruf( $angka / 1000000 ) . " juta" . $this->angka_ke_huruf( $angka % 1000000 );
		} else if ( $angka < 1000000000000 ) {
			$temp = $this->angka_ke_huruf( $angka / 1000000000 ) . " milyar" . $this->angka_ke_huruf( fmod( $angka, 1000000000 ) );
		} else if ( $angka < 1000000000000000 ) {
			$temp = $this->angka_ke_huruf( $angka / 1000000000000 ) . " trilyun" . $this->angka_ke_huruf( fmod( $angka, 1000000000000 ) );
		}
		return ucwords( $temp );
	}

	function ubah_ke_huruf( $angka ) {
		if( $angka < 0 ) {
			$hasil = "minus " . trim( $this->angka_ke_huruf( $angka ) );
		} else {
			$hasil = trim( $this->angka_ke_huruf( $angka ) );
		}
		return $hasil;
	}

	function change_format( $tanggal ){
		if( $this->cek_format_tanggal( $tanggal ) ){
			$tgl = explode( "-", $tanggal );
			return $tgl[ 2 ] . "-" . $tgl[ 1 ] . "-" . $tgl[ 0 ];
		} else {
			return NULL;
		}
	}

	function pisah($kata,$maxlen,$minlen)
	{
	$teks=trim($kata,' ');
		if (strlen($teks)===0){
			$hasil[0]='';
		}else{
			$pos=0;
			$pecah=explode( ' ',$teks);
			if (is_array($pecah)){
				for ($i=0; $i<count($pecah);$i++)
				{
					if (!isset($hasil[$pos]))
					{
						$hasil[$pos]=$pecah[$i];
					}else{
						if (strlen($hasil[$pos].' '.$pecah[$i])<=$maxlen)
						{
							$hasil[$pos]=$hasil[$pos].' '.$pecah[$i];
						}else{
							if (strlen($hasil[$pos].' '.$pecah[$i])>$minlen)
							{
								$pos++;
								$hasil[$pos]=$pecah[$i];
							}else{
								$hasil[$pos]=$hasil[$pos].' '.$pecah[$i];
							}
						}
					}
				}
			}
		}
		return $hasil;
	}

	function nama_hari( $kode ){
		if (intval($kode)===0){
			$hari='Minggu';
		}elseif (intval($kode)===1){
			$hari='Senin';
		}elseif (intval($kode)===2){
			$hari='Selasa';
		}elseif (intval($kode)===3){
			$hari='Rabu';
		}elseif (intval($kode)===4){
			$hari='Kamis';
		}elseif (intval($kode)===5){
			$hari='Jumat';
		}elseif (intval($kode)===6){
			$hari='Sabtu';
		}else{
			$hari='Error';
		}
		return $hari;
	}
	function waktu_saat_ini( $format='Y-m-d H:i:s',$lokal='Asia/Jakarta' ){
		date_default_timezone_set($lokal);
		return date($format);
	}
	function nama_bulan( $bulan ){
		switch( $bulan ){
			case '01':
			case '1':
				return 'Januari';
			case '02':
			case '2':
				return 'Februari';
			case '03':
			case '3':
				return 'Maret';
			case '04':
			case '4':
				return 'April';
			case '05':
			case '5':
				return 'Mei';
			case '06':
			case '6':
				return 'Juni';
			case '07':
			case '7':
				return 'Juli';
			case '08':
			case '8':
				return 'Agustus';
			case '09':
			case '9':
				return 'September';
			case '10':
				return 'Oktober';
			case '11':
				return 'November';
			case '12':
				return 'Desember';
			default:
				return 'Error';
		}
	}
	
	function formattanggal($tglx,$format='dmy',$awal='y',$tipe='id',$batas='-',$setting='0,1,2')
	{
		$pos=explode(',',$setting);
		if ($awal==='y'){
			$tglx=$tglx;
		}else{
			$pecah=explode('-',$tglx);
			$tglx=$pecah[2].'-'.$pecah[1].'-'.$pecah[0];
		}
		
		$tgl=date_create( $tglx );
		if (date_format( $tgl, "m" )=='01'){
			$bulan="Januari";
			$bulan2="Jan";
		}elseif (date_format( $tgl, "m" )=='02'){
			$bulan="Februari";
			$bulan2="Feb";
		}elseif (date_format( $tgl, "m" )=='03'){
			$bulan="Maret";
			$bulan2="Mar";
		}elseif (date_format( $tgl, "m" )=='04'){
			$bulan="April";
			$bulan2="Apr";
		}elseif (date_format( $tgl, "m" )=='05'){
			$bulan="Mei";
			$bulan2="Mei";
		}elseif (date_format( $tgl, "m" )=='06'){
			$bulan="Juni";
			$bulan2="Jun";
		}elseif (date_format( $tgl, "m" )=='07'){
			$bulan="Juli";
			$bulan2="Jul";
		}elseif (date_format( $tgl, "m" )=='08'){
			$bulan="Agustus";
			$bulan2="Agu";
		}elseif (date_format( $tgl, "m" )=='09'){
			$bulan="September";
			$bulan2="Sep";
		}elseif (date_format( $tgl, "m" )=='10'){
			$bulan="Oktober";
			$bulan2="Okt";
		}elseif (date_format( $tgl, "m" )=='11'){
			$bulan="November";
			$bulan2="Nov";
		}elseif (date_format( $tgl, "m" )=='12'){
			$bulan="Desember";
			$bulan2="Des";
		}else{
			$bulan="{error}";
			$bulan2="{err}";
		}
		
		$xtgl[0]=date_format( $tgl, "d" );
		if (substr($format,1,1)==='m'){
			$xtgl[1]=date_format( $tgl, "m" );
		}elseif (substr($format,1,1)==='M'){
			if ($tipe==='id'){
				$xtgl[1]=$bulan2;
			}else{
				$xtgl[1]=date_format( $tgl, "M" );
			}
		}elseif (substr($format,1,1)==='F'){
			if ($tipe==='id'){
				$xtgl[1]=$bulan;
			}else{
				$xtgl[1]=date_format( $tgl, "F" );
			}
		}else{
			$xtgl[1]=date_format( $tgl, "m" );
		}

		if (substr($format,2,1)==='y'){
			$xtgl[2]=date_format( $tgl, "y" );
		}elseif (substr($format,2,1)==='Y'){
				$xtgl[2]=date_format( $tgl, "Y" );
		}else{
			$xtgl[2]=date_format( $tgl, "y" );
		}
		$hasil=$xtgl[intval($pos[0])]. $batas .$xtgl[intval($pos[1])]. $batas .$xtgl[intval($pos[2])];
		return $hasil;
	}

	public function bulanx($bln,$jenis='romawi')
	{
	$xblnr='';
	$xblni='';
		if (intval($bln)==1){
			$xblnr='I';
			$xblni='Januari';
		}elseif (intval($bln)==2){
			$xblnr='II';
			$xblni='Februari';
		}elseif (intval($bln)==3){
			$xblnr='III';
			$xblni='Maret';
		}elseif (intval($bln)==4){
			$xblnr='IV';
			$xblni='April';
		}elseif (intval($bln)==5){
			$xblnr='V';
			$xblni='Mei';
		}elseif (intval($bln)==6){
			$xblnr='VI';
			$xblni='Juni';
		}elseif (intval($bln)==7){
			$xblnr='VII';
			$xblni='Juli';
		}elseif (intval($bln)==8){
			$xblnr='VII';
			$xblni='Agustus';
		}elseif (intval($bln)==9){
			$xblnr='IX';
			$xblni='September';
		}elseif (intval($bln)==10){
			$xblnr='X';
			$xblni='Oktober';
		}elseif (intval($bln)==11){
			$xblnr='XI';
			$xblni='November';
		}elseif (intval($bln)==12){
			$xblnr='XII';
			$xblni='Desember';
		}else{
			$xblnr='-';
			$xblni='-';
		}
		if ($jenis==='romawi'){
			return $xblnr;
		}elseif ($jenis==='indonesia'){
			return $xblni;
		}else{
			return $xblni;
		}
	}
	function terbilang($angka)
	{
		$tmp=( preg_replace( "/[^0-9.]/", "", $angka ) );
		$pecah=explode('.',$tmp);
		
		if (isset($pecah[1])){
			if (intval($pecah[1])){
				$desimal=strrev(floatval(strrev($pecah[1])));
				if (intval($desimal)==0){
					return ucwords($this->kataterbilang($pecah[0]));
				}else{
					return ucwords($this->kataterbilang($pecah[0]).'koma '.$this->kataterbilang($desimal));
				}
			}else{
				return ucwords($this->kataterbilang($pecah[0]));
			}
		}else{
			return ucwords($this->kataterbilang($pecah[0]));
		}
	}
	function kataterbilang($angka)
	{
		if($angka==0){
			return $this->pecahkataterbilang($angka,true) .' ';
		}
		$katanya='';
		$pos=0;
		$tambahan[0]='';
		$tambahan[1]='ribu';
		$tambahan[2]='juta';
		$tambahan[3]='miliar';
		$tambahan[4]='triliun';
		$xxx='';
		while (strlen($angka) >=4) {
			$baca=substr($angka , intval(strlen($angka)-3),3);
			
			if (intval($baca)>0){
				if (empty($katanya)){
					if ($tambahan[$pos]=='ribu' && intval($baca)==1){
						$katanya='Se'. $tambahan[$pos];
					}else{
						$katanya=$this->pecahkataterbilang($baca).' '. $tambahan[$pos];
					}
				}else{
					if ($tambahan[$pos]=='ribu' && intval($baca)==1){
						$katanya='Se'. $tambahan[$pos].' '. $katanya;
					}else{
						$katanya=$this->pecahkataterbilang($baca).' '. $tambahan[$pos].' '. $katanya;
					}
				}
			}
			$pos++;
			if ($pos==5){
				$pos=0;
			}
			$angka=substr($angka,0,-3);//explode('.',strval($angka / 1000));
			$xxx.=' '.($angka) ;
		}
		$xxx=$this->pecahkataterbilang($angka);
		if (empty($katanya)){
			if ($tambahan[$pos]=='ribu' && intval($angka)==1){
				$katanya='Se'. $tambahan[$pos];
			}else{
				$katanya=$this->pecahkataterbilang($angka).' '. $tambahan[$pos];
			}
		}else{
			if ($tambahan[$pos]=='ribu' && intval($angka)==1){
				$katanya='Se'. $tambahan[$pos].' '. $katanya;
			}else{
				$katanya=$this->pecahkataterbilang($angka).' '. $tambahan[$pos].' '. $katanya;
			}
		}
		return $katanya;
	}
	
	function pecahkataterbilang($angka,$boleh=false)
	{
	$angka=intval($angka);
	if (intval($angka)==0){
		if (!$boleh){
		return '';
		}
	}
		$tambahanx[0]='ratus';
		$tambahanx[1]='puluh';
		$tambahanx[2]='belas';

		$kata[0]='nol';
		$kata[1]='satu';
		$kata[2]='dua';
		$kata[3]='tiga';
		$kata[4]='empat';
		$kata[5]='lima';
		$kata[6]='enam';
		$kata[7]='tujuh';
		$kata[8]='delapan';
		$kata[9]='sembilan';
		$kata[10]='sepuluh';
		$kata[11]='sebelas';
		if (intval($angka)>=100){
			$x1=substr($angka, 0, 1);
			if (intval($x1)==1){
				$hasil='se'. $tambahanx[0];
			}else{
				$hasil=$kata[intval($x1)] .' '. $tambahanx[0];
			}
			if (intval(substr($angka, 1, 2))>=20){
				$hasil.=' '.$kata[intval(substr($angka, 1, 1))] .' '. $tambahanx[1];
				if (intval(substr($angka, 2, 1))>=1){
					$hasil.=' '. $kata[intval(substr($angka, 2, 1))];
				}
			}elseif (intval(substr($angka, 1, 2))>=12){
				$hasil.=' '. $kata[intval(substr($angka, 2, 1))] .' '. $tambahanx[2];
			}elseif (intval(substr($angka, 1, 2))>=1){
				$hasil.=' '. $kata[intval(substr($angka, 1, 2))];
			}
		}elseif (intval($angka)>=20){
			$hasil=$kata[intval(substr($angka, 0, 1))] .' '. $tambahanx[1];
			if (intval(substr($angka, 1, 1))>=1){
				$hasil.=' '. $kata[intval(substr($angka, 1, 1))];
			}
		}elseif (intval($angka)>=12){
			$hasil=$kata[intval(substr($angka, 1, 1))] .' '. $tambahanx[2];
		}elseif (intval($angka)>=10){
			$hasil=$kata[intval($angka)];
		}else{
			$hasil=$kata[intval($angka)];
		}
		return $hasil;
	}
	

}

/* End of file Emkl.php */
/* Location: ./application/libraries/Emkl.php */