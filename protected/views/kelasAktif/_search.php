<?php
/* @var $this KelasAktifController */
/* @var $model KelasAktif */
/* @var $form CActiveForm */
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'searchModal')); ?><div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Advanced Search Kelas Aktif</h3>
</div>

<div class="modal-body">

<?php $form=$this->beginWidget('MyCActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','id'=>'searchForm')
)); ?>
<fieldset>
	<div class="control-group">
		<?php echo $form->label($model,'id',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'id',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'kuota',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'kuota',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'keterangan',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'keterangan',array('size'=>32,'maxlength'=>32,)); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_kelas',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'id_kelas',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_tahun_ajaran',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'id_tahun_ajaran',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_guru_walikelas',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'id_guru_walikelas',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_kelas_paralel',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'id_kelas_paralel',array()); ?>
</div>
	</div>

</fieldset>    
</div><!-- search-form -->    
<?php $this->endWidget(); ?>
    
<div class="modal-footer">
    
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Search',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal','onclick'=>"$('#searchForm').submit()"),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal','class'=>'btn btn-warning'),
    )); ?>    
    </div>
<?php $this->endWidget(); ?>
