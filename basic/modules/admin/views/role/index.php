<?php
/**
 * Created by PhpStorm.
 * User: wen
 * Date: 2019/1/18
 * Time: 12:09
 */
use yii\grid\GridView;
?>
<?php echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        [
            'class'=>'yii\grid\SerialColumn'
        ],
        'name:text:name',
            'description:text:description',
            'created_at:datatime:created_at',
            [
                'class'=>'yii\grid\ActionColumn',
                'header'=>'操作',
                'template'=>'{assign} {update} {delete}',
                'buttons'=>[
                    'assign'=>function($url,$model,$key){
                        return Html::a('分配权限',['assignitem','name'=>$model['name']]);
                    },
                    'update'=>function($url,$model,$key){
                        return Html::a('更新',['updateitem','name'=>$model['name']]);
                    },
                    'delete'=>function($url,$model,$key){
                        return Html::a('删除',['deleteitem','name'=>$model['name']]);
                    },
                ]
            ]
        ],
        'layout'=>'\n{items}\n{summary}<div class="pagination pull-right">{pager}</div>'
        
    ]);?>
