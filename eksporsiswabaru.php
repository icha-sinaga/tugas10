<?php 
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet(); 
$sheet = $spreadsheet->getActiveSheet(); 
$sheet->setCellValue('A1', 'Tanggal'); 
$sheet->setCellValue('B1', 'Jenis Pendaftaran'); 
$sheet->setCellValue('C1', 'Tanggal Masuk'); 
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta');
$sheet->setCellValue('F1', 'Apakah Paud?');
$sheet->setCellValue('G1', 'Apakah TK?');
$sheet->setCellValue('H1', 'No. SKHUN');
$sheet->setCellValue('I1', 'No. Ijazah');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-Cita');
$sheet->setCellValue('L1', 'Nama');
$sheet->setCellValue('M1', 'Jenis Kelamin');
$sheet->setCellValue('N1', 'NISN');
$sheet->setCellValue('O1', 'NIK');
$sheet->setCellValue('P1', 'Tempat Lahir');
$sheet->setCellValue('Q1', 'Tanggal Lahir');
$sheet->setCellValue('R1', 'Agama');
$sheet->setCellValue('S1', 'Berkebutuhan Khusus?');
$sheet->setCellValue('T1', 'Alamat');
$sheet->setCellValue('U1', 'RT');
$sheet->setCellValue('V1', 'RW');
$sheet->setCellValue('W1', 'Dusun');
$sheet->setCellValue('X1', 'Kelurahan');
$sheet->setCellValue('Y1', 'Kecamatan');
$sheet->setCellValue('Z1', 'Kode Pos');
$sheet->setCellValue('AA1', 'Tempat Tinggal');
$sheet->setCellValue('AB1', 'Transportasi');
$sheet->setCellValue('AC1', 'No. Hp');
$sheet->setCellValue('AD1', 'Telepon');
$sheet->setCellValue('AE1', 'Email');
$sheet->setCellValue('AF1', 'Apakah memiliki KPS?');
$sheet->setCellValue('AG1', 'No. KPS');
$sheet->setCellValue('AH1', 'Kewarganegaraan');
$sheet->setCellValue('AI1', 'Nama Negara jika WNA');
$sheet->setCellValue('AJ1', 'Nama Ayah');
$sheet->setCellValue('AK1', 'Tahun Lahir Ayah');
$sheet->setCellValue('AL1', 'Pendidikan Ayah');
$sheet->setCellValue('AM1', 'Pekerjaan Ayah');
$sheet->setCellValue('AN1', 'Penghasilan Ayah');
$sheet->setCellValue('AO1', 'Kebutuhan Khusus Ayah');
$sheet->setCellValue('AP1', 'Nama Ibu');
$sheet->setCellValue('AQ1', 'Tahun Lahir Ibu');
$sheet->setCellValue('AR1', 'Pendidikan Ibu');
$sheet->setCellValue('AS1', 'Pekerjaan Ibu');
$sheet->setCellValue('AT1', 'Penghasilan Ibu');
$sheet->setCellValue('AU1', 'Kebutuhan Khusus Ibu');

$query = mysqli_query($conn,"select * from daftar");
$i = 2; 
$no = 1; 
while($row = mysqli_fetch_array($query))
{ 
	$sheet->setCellValue('A'.$i, $row['tanggal']); 
	$sheet->setCellValue('B'.$i, $row['jenisdaftar']); 
	$sheet->setCellValue('C'.$i, $row['tglmasuk']); 
	$sheet->setCellValue('D'.$i, $row['nis']); 
	$sheet->setCellValue('E'.$i, $row['nopes']); 
	$sheet->setCellValue('F'.$i, $row['paud']); 
	$sheet->setCellValue('G'.$i, $row['tk']); 
	$sheet->setCellValue('H'.$i, $row['skhun']); 
	$sheet->setCellValue('I'.$i, $row['ijazah']); 
	$sheet->setCellValue('J'.$i, $row['hobi']); 
	$sheet->setCellValue('K'.$i, $row['citacita']); 
	$sheet->setCellValue('L'.$i, $row['nama']); 
	$sheet->setCellValue('M'.$i, $row['gender']); 
	$sheet->setCellValue('N'.$i, $row['nisn']); 
	$sheet->setCellValue('O'.$i, $row['nik']); 
	$sheet->setCellValue('P'.$i, $row['tmplahir']); 
	$sheet->setCellValue('Q'.$i, $row['tgllahir']); 
	$sheet->setCellValue('R'.$i, $row['agama']); 
	$sheet->setCellValue('S'.$i, $row['kebkhusus']); 
	$sheet->setCellValue('T'.$i, $row['alamat']); 
	$sheet->setCellValue('U'.$i, $row['rt']); 
	$sheet->setCellValue('V'.$i, $row['rw']); 
	$sheet->setCellValue('W'.$i, $row['dusun']); 
	$sheet->setCellValue('X'.$i, $row['kel']); 
	$sheet->setCellValue('Y'.$i, $row['kec']); 
	$sheet->setCellValue('Z'.$i, $row['pos']); 
	$sheet->setCellValue('AA'.$i, $row['tmptinggal']); 
	$sheet->setCellValue('AB'.$i, $row['transport']); 
	$sheet->setCellValue('AC'.$i, $row['hp']); 
	$sheet->setCellValue('AD'.$i, $row['telp']); 
	$sheet->setCellValue('AE'.$i, $row['email']); 
	$sheet->setCellValue('AF'.$i, $row['kps']); 
	$sheet->setCellValue('AG'.$i, $row['nokps']); 
	$sheet->setCellValue('AH'.$i, $row['kwn']); 
	$sheet->setCellValue('AI'.$i, $row['negara']); 
	$sheet->setCellValue('AJ'.$i, $row['namaayah']); 
	$sheet->setCellValue('AK'.$i, $row['lahirayah']); 
	$sheet->setCellValue('AL'.$i, $row['pendidikanayah']); 
	$sheet->setCellValue('AM'.$i, $row['kerjaayah']); 
	$sheet->setCellValue('AN'.$i, $row['hasilibu']); 
	$sheet->setCellValue('AO'.$i, $row['kebkhususayah']); 
	$sheet->setCellValue('AP'.$i, $row['namaibu']); 
	$sheet->setCellValue('AQ'.$i, $row['lahiribu']); 
	$sheet->setCellValue('AR'.$i, $row['pendidikanibu']); 
	$sheet->setCellValue('AS'.$i, $row['kerjaibu']); 
	$sheet->setCellValue('AT'.$i, $row['hasilibu']); 
	$sheet->setCellValue('AU'.$i, $row['kebkhususibu']); 
	$i++;
}

$styleArray = [
	'borders' => [ 
		'allBorders' => [
			'borderStyle' => \Phpoffice\PhpSpreadsheet\Style\Border :: BORDER_THIN,
			],
		],
	];
$i = $i - 1; 
$sheet->getStyle('A1:AU'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftaran Siswa.xlsx');
?>