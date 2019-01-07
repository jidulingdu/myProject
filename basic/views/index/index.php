<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2018/12/21
 * Time: 17:08
 */

//  echo  \yii\helpers\Html::encode($str);
use \yii\helpers\Html;
//echo \yii\helpers\HtmlPurifier::process($str); //Html过滤器
use \yii\helpers\HtmlPurifier;

?>
<!--<h1>--><? //=$str;?><!--</h1>-->
<? //=Html::encode($str)?>
<? //=HtmlPurifier::process($str)?>
<br>
<hr>
<br>
<?php $this->beginBlock('block1') ?>
<h1>覆盖</h1>
<?php $this->endBlock() ?>

<!--页面片段缓存-->
<?php if ($this->beginCache('cache_div', ['duration' => 1500])) { ?> <!--(可以不设第二参数)第二个参数是设置的有效期 时间过后 将重新写入缓存-->
    <div id="cache_div">
<!--            <div>这里会被缓存</div>-->
        <div>之前的内容已经被缓存，此时本段div不会显示</div>
    </div>
    <?php
    $this->endCache();
} ?>
<div id="no_cache_div">
<!--        <div>这里不会被缓存</div>-->
    <div>这里不会被缓存，修改后，显示本段</div>
</div>

<br>
<hr>
<br>

<!--片段缓存依赖-->
<?php
$dependency = [
    'class' => 'yii\caching\FileDependency',
    'fileName' => 'a.txt'
];
?>
<?php if ($this->beginCache('cache_div_file', ['dependency' => $dependency])) { ?> <!--文件内容修改了 将重新写入缓存-->
    <div id="cache_div_file">
        <div>这里会被缓存a</div>
    </div>
    <?php
    $this->endCache();
} ?>

<!--是否进行缓存-->
<?php
$enabled = false ;
$this->beginCache('cache_div_file',['enabled'=>$enabled]);
?>

<br>
<hr>
<br>

<!--欠套缓存 先执行外围 再执行内层 都以时间为基准 过期重存-->

<?php if ($this->beginCache('cache_outer_div', ['duration' => 2])) { ?>
    <div id="cache_div_file">
        <div>外层</div>
<!--        内层过期后不影响外层-->
        <?php if ($this->beginCache('cache_inner_div', ['duration' =>10])) { ?>
            <div id="cache_div_file">
                <div>内层</div>
            </div>
            <?php
            $this->endCache();
        } ?>
    </div>
    <?php
    $this->endCache();
} ?>

<br>
<hr>
<br>

<!--http 缓存-->

<!--<div>--><?//=$new?><!--</div>-->


























