<button class="btn btn-sm btn-outline-primary dropdown-toggle"
		type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action
</button>
<div class="dropdown-menu">
	<a class="dropdown-item edit" data-id="<?php echo $id_surat ?>" href="#">Edit</a>
	<a class="dropdown-item detail" data-id="<?php echo $id_surat ?>" href="#">Detail</a>
	<?php if(!$tindak_lanjut && !$disposisi_print && !$disposisi_arsip_print) : ?>
	<a class="dropdown-item delete" data-id="<?php echo $id_surat ?>" href="#">Delete</a>
	<?php endif; ?>
	<?php if($disposisi_print) : ?>
	<div role="separator" class="dropdown-divider"></div>
	<a class="dropdown-item disposisi" data-id="<?php echo $id_surat ?>" href="#">Disposisi</a>
	<?php endif; ?>
	<div role="separator" class="dropdown-divider"></div>
	<a class="dropdown-item print" data-id="<?php echo $id_surat ?>" href="#">Cetak disposisi karo</a>
	<?php if($disposisi_print && isset($isi_disposisi) && !empty($isi_disposisi)) : ?>
	<a class="dropdown-item print2" data-id="<?php echo $id_surat ?>" href="#">Cetak disposisi bagian</a>
	<?php endif; ?>
</div>
