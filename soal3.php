<?php
	$soal1 = $_POST['soal1'];
	$soal2 = $_POST['soal2'];
?>

<h1>Soal 3 :</h1>
<p>Siapa nama Kepala Program Studi Teknik Informatika?</p>

<form action="hasil.php" method="POST">
	<input type="hidden" name="soal1" value="<?php echo $soal1; ?>">
	<input type="hidden" name="soal2" value="<?php echo $soal2; ?>">
	<input type="radio" name="soal3" value="A" onclick="this.form.submit()">A. Fenti Kurnia Oktorina
	<br>
	<input type="radio" name="soal3" value="B" onclick="this.form.submit()">B. Fitri
	<br>
	<input type="radio" name="soal3" value="C" onclick="this.form.submit()">C. Abdul Ghafar
</form>