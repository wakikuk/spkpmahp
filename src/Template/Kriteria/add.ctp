<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kriterium $kriterium
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspek $aspek
 */
?>
<div data-role="header" style="overflow:hidden;">
<h1>Tambah Kriteria</h1>
<a href="<?= $this->Url->build(['action'=>'index'])?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-arrow-l">Kembali</a>

</div>

<div class="">
    <?= $this->Form->create($kriterium,['class'=>'form','data-ajax'=>'false']) ?>
    <br>
      <?php
            echo $this->Form->control('kd_aspek',['options'=>$pilihanaspek]);
            echo $this->Form->control('kd_kriteria');
            echo $this->Form->control('nama_kritera');
            echo $this->Form->control('nilai_kriteria');?>
    <fieldset data-role="controlgroup">
        <legend>Factor:</legend>
    <?php
            echo $this->Form->radio('factor',[['value' => 'core', 'text' => 'Core'],['value' => 'secondary', 'text' => 'Secondary']]);
            
        ?>
    </fieldset>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>
