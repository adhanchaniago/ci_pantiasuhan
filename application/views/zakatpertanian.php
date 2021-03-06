<div class="container">
<!-- content -->

<h2>Zakat Hasil Pertanian dan Buah-buahan</h2>
Nishab untuk jenis zakat ini adalah sebesar <strong>750 kg</strong>. Dikeluarkan <strong>saat panen</strong> sebesar <strong>5% jika irigasinya menggunakan biaya/beban</strong>, atau <strong>10% jika diairi dengan air hujan/sungai (tanpa biaya)</strong>.
<br /><br />
<table class="table table-hover">
<tr>
	<th colspan="2" class="tableheader"><strong>Biji-bijian dan Buah-buahan</strong></th>
</tr>
<tr>
	<th class="label_cols">Hasil Panen</th>
	<th class="value_cols"><input type="text" id="panen" class="input_angka" style="width:60px" onkeyup="validasiAngka(this); zc_pertanian();" /> kg</th>
</tr>
<tr>
	<th class="label_cols">Jenis Pengairan</th>
	<th class="value_cols">
	<select id="persen_zakat" onchange="zc_pertanian();">
		<option value="0.1">tanpa biaya</option>
		<option value="0.05">dengan biaya</option>
	</select>
	</th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Zakat</strong></th>
	<th class="value_cols"><input type="text" id="zakat" class="input_angka" style="width:60px" disabled="disabled" /> kg</th>
</tr>

<tr>
	<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
</tr>
</table>
<br />
<div id="footnote">
</div>

<!-- end of content -->

</div>
