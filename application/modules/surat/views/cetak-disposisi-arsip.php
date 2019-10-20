<html>
<head>
	<title>Disposisi Surat - <?php echo $data->nomor_surat; ?></title>
	<style>
		@page {
			margin: 0px;
		}

		body {
			margin: 0px;
		}

		td input:[type="checkbox"], td input:[type="checkbox"] {
			border: 1px solid #000;
			height: 15px;
			width: 15px;
		}
	</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="2" width="100%">
	<tr>
		<td width="30%" align="center">
			<img src="<?php echo $logo ?>" height="70" alt="Logo Kemenag"/>
		</td>
		<td width="40%" align="center">
			<h3 style="margin: 10px 0 10px 0">Kementerian Agama RI</h3>
			<h4 style="margin: 10px 0 10px 0">Sekretariat Jendral</h4>
			<h5 style="margin: 10px 0 10px 0">Jakarta</h5>
		</td>
		<td width="30%">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="center"><h3>Lembar Disposisi</h3></td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" align="left">
			<img src="<?php echo $barcode ?>" height="40" alt="Barcode"/>
		</td>
		<td align="right"><strong>Kode : <?php echo $data->barcode ?> &nbsp;</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<table border="0" width="80%">
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Tanggal/Nomor</td>
					<td><?php echo date_create($data->tanggal_surat)->format('d F Y') . ', ' . $data->nomor_surat ?></td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Asal</td>
					<td><?php echo $data->nama_pengirim ?></td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Perihal</td>
					<td><?php echo $data->perihal ?></td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Isi Ringkasan</td>
					<td><?php echo $data->ringkasan ?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<table border="0" width="80%">
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Tanggal Terima</td>
					<td><?php echo date_create($data->tanggal_terima)->format('d F Y') ?></td>
				</tr>
				<tr>
					<td width="20%">&nbsp;</td>
					<td width="35%">Tanggal Penyelesaian</td>
					<td><?php echo date_create($data->tanggal_penyelesaian)->format('d F Y') ?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3">
			<table border="0" width="100%" cellspacing="0">
				<tr>
					<td width="50%" style="border-right: 1px solid black;">
						&nbsp;Isi disposisi :
					</td>
					<td width="50%">
						&nbsp;Diteruskan kepada :
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid black;">
						<table border="0" width="100%">
							<tr>
								<td>
									<?php
									$isiDisposisi = explode(',', $data->isi_disposisi);
									echo '<ol style="margin: 0"><li>' . join('</li><li>', $isiDisposisi) . "</li></ol>";
									?>
								</td>
							</tr>
						</table>
					</td>
					<td valign="top">
						<table border="0" width="100%">
							<?php
							$isiDisposisi = explode(',', $data->bagian_disposisi);
							echo '<ol style="margin: 0"><li>' . join('</li><li>', $isiDisposisi) . "</li></ol>";
							?>
						</table>
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid black;" align="center">
						..................................................................
						..................................................................
						..................................................................
						..................................................................
						..................................................................
					</td>
					<td align="center">
						..................................................................
						..................................................................
						..................................................................
						..................................................................
						..................................................................
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="background: #999999">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" style="padding-left: 10px; padding-bottom: 10px;">
			Sesudah digunakan harap segera dikembalikan kembali :
		</td>
	</tr>
	<tr>
		<td colspan="3" style="padding-left: 10px; padding-bottom: 10px;">
			Kepada :
		</td>
	</tr>
	<tr>
		<td colspan="3" style="padding-left: 10px; padding-bottom: 10px;">
			Tanggal :
		</td>
	</tr>
</table>
</body>
</html>
