<div class="container">
<h2>Zakat Perdagangan</h2>
Barang dagangan di sini termasuk tanah, rumah, kendaraan, ternak (selain kambing, sapi/kerbau dan unta), perhiasan dll yang diniatkan untuk dijual.<br /><br />
- Nishabnya senilai <strong>85 gram emas</strong>.<br />
- Ukuran zakatnya adalah sebesar <strong>2,5% atau 1/40</strong>.<br />
- Telah mencapai haul <strong>1 tahun hijriyah</strong>.
<br /><br />
<table class="table tabel-hover">
<tr>
	<th colspan="2" class="tableheader"><strong>Nishab</strong></th>
</tr>
<tr>
	<th class="label_cols">Harga 1 gram emas murni</th>
	<th class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); nisab_emas(); zc_mal_hitung();" value="511.000,00" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Nishab</strong></th>
	<th class="value_cols">Rp <input type="text" id="nisab_emas" class="input_angka" disabled="disabled" value="43.435.000,00" /> <input type="hidden" id="nisab_emas_float" value="43435000.00" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Harta</strong></th>
</tr>
<tr>
	<th class="label_cols">Uang (Cash, Tabungan, dkk)</th>
	<th class="value_cols">Rp <input type="text" id="uang" class="input_angka" onkeyup="validasiAngka(this); zc_dagang_total_harta();" /></th>
</tr>
<tr>
	<th class="label_cols">Stok Barang Dagangan</th>
	<th class="value_cols">Rp <input type="text" id="stok" class="input_angka" onkeyup="validasiAngka(this); zc_dagang_total_harta();" /></th>
</tr>
<tr>
	<th class="label_cols">Piutang <sup>[1]</sup></th>
	<th class="value_cols">Rp <input type="text" id="piutang" class="input_angka" onkeyup="validasiAngka(this); zc_dagang_total_harta();" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Total Harta Kena Zakat</strong></th>
	<th class="value_cols">Rp <input type="text" id="total_harta" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_harta_float" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Kewajiban</strong></th>
</tr>
<tr>
	<th class="label_cols">Hutang <sup>[2]</sup></th>
	<th class="value_cols">Rp <input type="text" id="hutang" class="input_angka" onkeyup="validasiAngka(this); zc_dagang_total_kewajiban();" /></th>
</tr>
<tr>
	<th class="label_cols">Biaya Lain <sup>[3]</sup></th>
	<th class="value_cols">Rp <input type="text" id="biaya" class="input_angka" onkeyup="validasiAngka(this); zc_dagang_total_kewajiban();" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Total Kewajiban</strong></th>
	<th class="value_cols">Rp <input type="text" id="total_kewajiban" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_kewajiban_float" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
</tr>
<tr>
	<th class="label_cols">Selisih harta dan kewajiban</th>
	<th class="value_cols">Rp <input type="text" id="selisih_harta" class="input_angka" disabled="disabled" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Zakat</strong></th>
	<th class="value_cols">Rp <input type="text" id="zakat_harta" class="input_angka" disabled="disabled" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
</tr>

</table>
<!-- <div class="row">
  <div class="col-lg-4">
    <button class="btn btn-danger" type="reset">Reset</button>
  </div>
</div> -->
<br />
<div id="footnote">
Keterangan :
<ol>
<li>Piutang yang diharapkan dapat kembali atau ditagih.</li>
<li>Hutang dagang (jangka pendek).</li>
<li>Biaya lain yang masih harus dibayar sebelum sampai waktu pembayaran zakat.</li>
</ol>
</div>
<!-- end of content -->

</div>
