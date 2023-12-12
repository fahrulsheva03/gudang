<?php
if(isset($_POST['simpan'])) {
    include('../koneksi.php');
    $no_ajuan   = $_POST['no_ajuan'];
    $tanggal    = $_POST['tanggal'];
    $kode_brg   = $_POST['kode_brg'];
    $nama_brg   = $_POST['nama_brg'];
    $stok       = $_POST['stok'];
    $jml_ajuan  = $_POST['jml_ajuan'];
    $petugas    = $_POST['petugas'];
    $periode    = $_POST['periode']; // Mengambil nilai periode dari input pengguna

    // Memecah nilai periode menjadi bagian-bagian terpisah dengan delimiter '-'
    $parts = explode('-', $periode);
    
    // Mengambil nilai bulan dari array hasil pemecahan
    $bulan = $parts[1]; // Perhatikan bahwa array dimulai dari indeks 0, sehingga bulan berada pada indeks 1

    // Query untuk menyimpan data ke dalam database
    $sql = "INSERT INTO tb_ajuan SET 
	no_ajuan='$no_ajuan', 
	tanggal='$tanggal', 
	kode_brg='$kode_brg', 
	nama_brg='$nama_brg', 
	stok='$stok', 
	jml_ajuan='$jml_ajuan', 
	petugas='$petugas', 
	val=1, 
	periode='$bulan	'";
    
    $result = mysqli_query($koneksi, $sql);
    if($result){
        header("location: ?m=ajuan&s=awal");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
