<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title ="aa";
?>
<?=Html::beginForm(['article/info'],'post',['id'=>'addForm'])?>
<?=Html::activeInput('text',$model,'title',['class'=>'input'])?>
<?=Html::activeDropDownList($model,'cate_id',['1'=>'科技','2'=>'互联网','3'=>'国际','4'=>'国内'],['class'=>'form-control'])?>
<?=Html::submitButton('提交',['class'=>'btn btn-danger'])?>
<?=Html::endForm()?>


<hr>
<!--=Html::beginForm('','post',['id'=>'addForm','class'=>'form','data'=>'fm']);-->
<?=Html::beginForm(['site/index'],'post',['id'=>'addForm','class'=>'form','data'=>'fm']);?>
<?=Html::input('text','name','',['class'=>'input'])?>
<?=Html::input('password','pwd','',['class'=>'input password'])?>
<?=Html::input('hidden','hide','',['class'=>'input hide'])?>
<br><br>
<?=Html::textarea('textarea','',['class'=>'textarea'])?>
<?=Html::radio('sex',true,['class'=>'radio'])?>
<?=Html::radioList('sex','b',['a'=>'test','b'=>'try'],['class'=>'radiolist'])?>
<?=Html::checkbox('check',true,['class'=>'checkbox'])?>
<?=Html::checkboxList('check',1,[1=>'m',2=>'s'],['class'=>'checkbox'])?>
<?=Html::dropDownList('select','a',['a'=>'----','b'=>'test','c'=>'try'],['class'=>'form-control'])?>
<?=Html::label('lable标签','lable',['class'=>'control-label'])?>
<?=Html::fileInput('files',null,['class'=>'filename'])?>
<br>
<?=Html::button('按钮',['class'=>'btn'])?>
<?=Html::submitButton('提交',['class'=>'btn btn-submit'])?>
<?=Html::resetButton('重设',['class'=>'btn btn-reset'])?>
<br><br>
<?=Html::TextInput('name','',['class'=>'input'])?>
<?=Html::passwordInput('pwd','',['class'=>'input'])?>
<?=Html::hiddenInput('hide','',['class'=>'input'])?>
<?=Html::endForm();?>


