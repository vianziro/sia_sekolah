<?php
/* @var $this MapelController */
/* @var $model Mapel */
/* @var $form CActiveForm */
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'searchModal')); ?><div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Advanced Search Mapel</h3>
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
		<?php echo $form->label($model,'kd_mapel',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'kd_mapel',array('size'=>10,'maxlength'=>10,)); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'diskripsi',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'diskripsi',array('size'=>50,'maxlength'=>50,)); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'kkm',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'kkm',array()); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nama',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'nama',array('size'=>25,'maxlength'=>25,)); ?>
</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'status',array('class'=>'control-label')); ?>
		<div class="controls"><?php echo $form->textField($model,'status',array()); ?>
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
