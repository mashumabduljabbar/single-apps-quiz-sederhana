<?php
	$soal1 = $_POST['soal1'];
	$soal2 = $_POST['soal2'];
	$soal3 = $_POST['soal3'];
?>
Jawaban Anda Adalah
<ol>
	<li> <?php echo $soal1; ?> </li>
	<li> <?php echo $soal2; ?> </li>
	<li> <?php echo $soal3; ?> </li>
</ol>

Kunci Jawaban
<ol>
	<li> A </li>
	<li> B </li>
	<li> B </li>
</ol>

<h1>Coba Lagi?</h1>
<form action="soal1.php">
	<button type="submit" value="Coba">Coba</button>
</form>
	