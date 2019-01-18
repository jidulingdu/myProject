<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/18
 * Time: 15:45
 */
use yii\helpers\Html;
?>

<?=Html::beginForm('','post')?>
<div>
    <?php echo Html::label('角色名称', null). Html::encode($parent); ?>
</div>
<div>
    <?php echo Html::label('角色子节点', null). Html::checkboxList('children', $children['roles'], $roles); ?>
</div>
<div>
    <?php echo Html::label('权限子节点', null). Html::checkboxList('children', $children['permissions'], $permissions); ?>
</div>
<?=Html::submitButton('提交权限')?>
<?=Html::endForm()?>
