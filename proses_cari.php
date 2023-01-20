<?php 
include "koneksi.php";
include "fungsi.php";

// preproses()
$keyword_user = $_GET['search'];

mysqli_query($konek,"DELETE FROM tbkeyword");
//hapus index sebelumnya
mysqli_query($konek,"TRUNCATE TABLE tbindex");
//$berita = //didapat dari value keyword yang dimasukan user!
$berita = $keyword_user;
$berita = preproses($berita);
//simpan ke inverted index (tbindex)
	$aberita = explode(" ", trim($berita));

$words = str_word_count($berita, 1);
$words = array_count_values($words);
// var_dump($words);
$count_keyword = count($words);
if($count_keyword > 0){
	foreach ($words as $x => $val) {
		mysqli_query($konek,"INSERT INTO tbkeyword (Term, Count) VALUES ('$x', $val)");
	}
	header('location:result.php?search='.$keyword_user);
}




 ?>