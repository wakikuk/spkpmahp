<div data-role="header" style="overflow:hidden;">
<h1>Edit Alternatif</h1>
<a href="<?= $this->Url->build(['action'=>'index'])?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-arrow-l">Kembali</a>

</div>

<div class="">
    <?= $this->Form->create($alternatif,['class'=>'form','data-ajax'=>'false']) ?>
    <br>
    <?php
            echo $this->Form->control('kd_alternatif',['label'=>'Kode Alternatif']);
            echo $this->Form->control('nama_alternatif',['label'=>'Nama Alternatif']);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>