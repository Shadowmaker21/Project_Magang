<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'fpdf.php';

if (function_exists('mcrypt_encrypt')) {

	function RC4($key, $data) {
		return mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $data, MCRYPT_MODE_STREAM, '');
	}

} else {

	function RC4($key, $data) {
		static $last_key, $last_state;

		if ($key != $last_key) {
			$k = str_repeat($key, 256 / strlen($key) + 1);
			$state = range(0, 255);
			$j = 0;
			for ($i = 0; $i < 256; $i++) {
				$t = $state[$i];
				$j = ($j + $t + ord($k[$i])) % 256;
				$state[$i] = $state[$j];
				$state[$j] = $t;
			}
			$last_key = $key;
			$last_state = $state;
		}
		else
			$state = $last_state;

		$len = strlen($data);
		$a = 0;
		$b = 0;
		$out = '';
		for ($i = 0; $i < $len; $i++) {
			$a = ($a + 1) % 256;
			$t = $state[$a];
			$b = ($b + $t) % 256;
			$state[$a] = $state[$b];
			$state[$b] = $t;
			$k = $state[($state[$a] + $state[$b]) % 256];
			$out .= chr(ord($data[$i]) ^ $k);
		}
		return $out;
	}

}

class Pdf_custom extends FPDF {
	var $encrypted = false;  //whether document is protected
	var $Uvalue;             //U entry in pdf document
	var $Ovalue;             //O entry in pdf document
	var $Pvalue;             //P entry in pdf document
	var $enc_obj_id;         //encryption object id
	function __construct($params) {
		// Call parent constructor
		parent::__construct($params['orientation'], $params['unit'], $params['size']);
		if($params['perihal']){
			$this->perihal = $params['perihal'];
		}
	}

	function Header(){
		if($this->perihal == 1){
		   
			$this->SetFont('Arial','B',14);
			$this->Cell(335,6,'DATA LAYANAN',0,1,'C');
			$this->Cell(335,6,'DINAS KEARSIPAN DAN PERPUSTAKAAN PROV JATENG',0,1,'C');
			//$this->Cell(335,6,'TAHUN ANGGARAN '.date('Y'),0,1,'C');
			$this->ln();
			$this->SetFont('Arial','B',10);
			$this->Cell(8,18,'NO',1,'','C');
			$this->Cell(57,18,'KEGIATAN',1,'','C');
			$this->Cell(264,9,'BULAN',1,'','C');
			$this->ln();
			$this->Cell(65,18);
			$this->Cell(22,9,'JAN',1,'','C');
			$this->Cell(22,9,'FEB',1,'','C');
			$this->Cell(22,9,'MAR',1,'','C');
			$this->Cell(22,9,'APR',1,'','C');
			$this->Cell(22,9,'MEI',1,'','C');
			$this->Cell(22,9,'JUN',1,'','C');
			$this->Cell(22,9,'JUL',1,'','C');
			$this->Cell(22,9,'AGS',1,'','C');
			$this->Cell(22,9,'SEP',1,'','C');
			$this->Cell(22,9,'OKT',1,'','C');
			$this->Cell(22,9,'NOV',1,'','C');
			$this->Cell(22,9,'DES',1,'','C');
			$this->ln();
		} else if($this->perihal==2){
			$image_file = 'includes/logopemprov.png';
			$this->Image($image_file, 10, 7, 30, 30, 'PNG', '', 'B', false, 0, '', false, false, 0, false, false, false);
			$this->SetFont('Arial','B',14);
			$this->Cell(34,6,"",0,'','C');
			$this->Cell(146,6,'PEMERINTAH PROVINSI JAWA TENGAH',0,1,'C');
			$this->SetFont('Arial','B',18);  
			$this->Cell(34,6,"",0,'','C');
			$this->Cell(146,6,'DINAS PETERNAKAN DAN KESEHATAN HEWAN',0,1,'C');
			$this->SetFont('Arial','',11);
			$this->Cell(34,5,"",0,'','C');  
			$this->Cell(146,5,'JL. JENDERAL GATOT SOEBROTO (TARUBUDAYA) TELP. (024) 6921023',0,1,'C');
			$this->Cell(34,5,"",0,'','C');  
			$this->Cell(146,5,'FAX. (024) 6921397, KODE POS 50501 U N G A R A N',0,1,'C');
			$this->Cell(34,5,"",0,'','C');  
			$this->Cell(146,5,'WEBSITE http://dinakkeswan-jateng.com',0,1,'C');
			$this->Ln(8);
			$this->Rect(13,38,185,1,'F');
			$this->Rect(13,40,185,0,'','');
			$this->SetFont('Arial','',9);
			$this->Cell(30,5,'Perihal ',0,'','L');
			$this->Cell(4,5,':',0,'','C');
			$this->Cell(20,5,'Rekapitulasi Proposal ',0,'','L');
			$this->Ln();
			$this->Cell(30,5,'Kabupaten ',0,'','L');
			$this->Cell(4,5,':',0,'','C');
			$this->Cell(20,5,$this->kab,0,'','L');
			$this->Ln();
			$this->Cell(30,5,'Jenis Kelompok Tani ',0,'','L');
			$this->Cell(4,5,':',0,'','C');
			$this->Cell(20,5,$this->jkt,0,'','L');
			$this->Ln();
			$this->Cell(30,5,'Status Proposal ',0,'','L');
			$this->Cell(4,5,':',0,'','C');
			$this->Cell(20,5,$this->status,0,'','L');
			$this->Ln(10);
			$this->SetFont('Arial','B',9);
			$this->Cell(13,9,'Nomor',1,'','C');
			$this->Cell(35,9,'Nama Kelompok',1,'','C');
			$this->Cell(30,9,'Tanggal Disposisi',1,'','C');
			$this->Cell(25,9,'Anggaran',1,'','C');
			$this->Cell(30,9,'Rekomendasi',1,'','C');
			$this->Cell(30,9,'Ketua',1,'','C');
			$this->Cell(25,9,'Input',1,'','C');
			$this->SetFont('Arial','',9);
			$this->ln();
		}
	}
	
	// Page footer
	function Footer() {
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial 8
		$this->SetFont('Arial', '', 9);

		// Text color in gray
		$this->SetTextColor(128);
		// Page number
		$this->Cell(0,10,'Page '.$this->PageNo().' of {nb}',0,0,'C');
		// Arial italic 8
		$this->SetFont('Arial', '', 8);
		// Date printed
		$this->Cell(0, 10, 'Downloaded from E-Visitor BARPUS on '.date('d F Y H:i:s'), 0, 0, 'R');
	}
	
	//Cell with horizontal scaling if text is too wide
	function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
	{
		//Get string width
		$str_width=$this->GetStringWidth($txt);

		//Calculate ratio to fit cell
		if($w==0)
			$w = $this->w-$this->rMargin-$this->x;
		$ratio = ($w-$this->cMargin*2)/$str_width;

		$fit = ($ratio < 1 || ($ratio > 1 && $force));
		if ($fit)
		{
			if ($scale)
			{
				//Calculate horizontal scaling
				$horiz_scale=$ratio*100.0;
				//Set horizontal scaling
				$this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
			}
			else
			{
				//Calculate character spacing in points
				$char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
				//Set character spacing
				$this->_out(sprintf('BT %.2F Tc ET',$char_space));
			}
			//Override user alignment (since text will fill up cell)
			$align='';
		}

		//Pass on to Cell method
		$this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);

		//Reset character spacing/horizontal scaling
		if ($fit)
			$this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
	}

	//Cell with horizontal scaling only if necessary
	function CellFitScale($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
	{
		$this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,false);
	}

	//Cell with horizontal scaling always
	function CellFitScaleForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
	{
		$this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,true,true);
	}

	//Cell with character spacing only if necessary
	function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
	{
		$this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
	}

	//Cell with character spacing always
	function CellFitSpaceForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
	{
		//Same as calling CellFit directly
		$this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,true);
	}

	//Patch to also work with CJK double-byte text
	function MBGetStringLength($s)
	{
		if($this->CurrentFont['type']=='Type0')
		{
			$len = 0;
			$nbbytes = strlen($s);
			for ($i = 0; $i < $nbbytes; $i++)
			{
				if (ord($s[$i])<128)
					$len++;
				else
				{
					$len++;
					$i++;
				}
			}
			return $len;
		}
		else
			return strlen($s);
	}
	
	function subWrite($h, $txt, $link = '', $subFontSize = 12, $subOffset = 0) {
		// resize font
		$subFontSizeold = $this->FontSizePt;
		$this->SetFontSize($subFontSize);

		// reposition y
		$subOffset = ((($subFontSize - $subFontSizeold) / $this->k) * 0.3) + ($subOffset / $this->k);
		$subX = $this->x;
		$subY = $this->y;
		$this->SetXY($subX, $subY - $subOffset);

		//Output text
		$this->Write($h, $txt, $link);

		// restore y position
		$subX = $this->x;
		$subY = $this->y;
		$this->SetXY($subX, $subY + $subOffset);

		// restore font size
		$this->SetFontSize($subFontSizeold);
	}
	
	/**
	 * Function to set permissions as well as user and owner passwords
	 *
	 * - permissions is an array with values taken from the following list:
	 *   copy, print, modify, annot-forms
	 *   If a value is present it means that the permission is granted
	 * - If a user password is set, user will be prompted before document is opened
	 * - If an owner password is set, document can be opened in privilege mode with no
	 *   restriction if that password is entered
	 */

	function SetProtection($permissions = array(), $user_pass = '', $owner_pass = null) {
		$options = array('print' => 4, 'modify' => 8, 'copy' => 16, 'annot-forms' => 32);
		$protection = 192;
		foreach ($permissions as $permission) {
			if (!isset($options[$permission]))
				$this->Error('Incorrect permission: ' . $permission);
			$protection += $options[$permission];
		}
		if ($owner_pass === null)
			$owner_pass = uniqid(rand());
		$this->encrypted = true;
		$this->padding = "\x28\xBF\x4E\x5E\x4E\x75\x8A\x41\x64\x00\x4E\x56\xFF\xFA\x01\x08" .
				"\x2E\x2E\x00\xB6\xD0\x68\x3E\x80\x2F\x0C\xA9\xFE\x64\x53\x69\x7A";
		$this->_generateencryptionkey($user_pass, $owner_pass, $protection);
	}

	/*     * **************************************************************************
	 *                                                                           *
	 *                              Private methods                              *
	 *                                                                           *
	 * ************************************************************************** */

	function _putstream($s) {
		if ($this->encrypted) {
			$s = RC4($this->_objectkey($this->n), $s);
		}
		parent::_putstream($s);
	}

	function _textstring($s) {
		if ($this->encrypted) {
			$s = RC4($this->_objectkey($this->n), $s);
		}
		return parent::_textstring($s);
	}

	/**
	 * Compute key depending on object number where the encrypted data is stored
	 */
	function _objectkey($n) {
		return substr($this->_md5_16($this->encryption_key . pack('VXxx', $n)), 0, 10);
	}

	function _putresources() {
		parent::_putresources();
		if ($this->encrypted) {
			$this->_newobj();
			$this->enc_obj_id = $this->n;
			$this->_out('<<');
			$this->_putencryption();
			$this->_out('>>');
			$this->_out('endobj');
		}
	}

	function _putencryption() {
		$this->_out('/Filter /Standard');
		$this->_out('/V 1');
		$this->_out('/R 2');
		$this->_out('/O (' . $this->_escape($this->Ovalue) . ')');
		$this->_out('/U (' . $this->_escape($this->Uvalue) . ')');
		$this->_out('/P ' . $this->Pvalue);
	}

	function _puttrailer() {
		parent::_puttrailer();
		if ($this->encrypted) {
			$this->_out('/Encrypt ' . $this->enc_obj_id . ' 0 R');
			$this->_out('/ID [()()]');
		}
	}

	/**
	 * Get MD5 as binary string
	 */
	function _md5_16($string) {
		return pack('H*', md5($string));
	}

	/**
	 * Compute O value
	 */
	function _Ovalue($user_pass, $owner_pass) {
		$tmp = $this->_md5_16($owner_pass);
		$owner_RC4_key = substr($tmp, 0, 5);
		return RC4($owner_RC4_key, $user_pass);
	}

	/**
	 * Compute U value
	 */
	function _Uvalue() {
		return RC4($this->encryption_key, $this->padding);
	}

	/**
	 * Compute encryption key
	 */
	function _generateencryptionkey($user_pass, $owner_pass, $protection) {
		// Pad passwords
		$user_pass = substr($user_pass . $this->padding, 0, 32);
		$owner_pass = substr($owner_pass . $this->padding, 0, 32);
		// Compute O value
		$this->Ovalue = $this->_Ovalue($user_pass, $owner_pass);
		// Compute encyption key
		$tmp = $this->_md5_16($user_pass . $this->Ovalue . chr($protection) . "\xFF\xFF\xFF");
		$this->encryption_key = substr($tmp, 0, 5);
		// Compute U value
		$this->Uvalue = $this->_Uvalue();
		// Compute P value
		$this->Pvalue = -(($protection ^ 255) + 1);
	}
}
