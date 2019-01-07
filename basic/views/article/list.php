<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/28
 * Time: 10:31
 */
use \yii\helpers\Html;
?>
<?=$title?>
<?=Html::dropDownList('cate',$cate_id,['1'=>'科技','2'=>'互联网','3'=>'国际','4'=>'国内'],['class'=>'form-control'])?>

