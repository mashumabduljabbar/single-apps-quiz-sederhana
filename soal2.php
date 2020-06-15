<?php
	$soal1 = $_POST['soal1'];
?>

<h1>Soal 2 :</h1>
<p>Siapa nama Wakil Direktur 1 Politeknik Kampar?</p>

<form action="soal3.php" method="POST">
	<input type="hidden" name="soal1" value="<?php echo $soal1; ?>">
	<input type="radio" name="soal2" value="A" onclick="this.form.submit()">A. Emon Azriadi
	<br>
	<input type="radio" name="soal2" value="B" onclick="this.form.submit()">B. Fenti Kurnia Oktorina
	<br>
	<input type="radio" name="soal2" value="C" onclick="this.form.submit()">C. Abdul Ghafar
</form>