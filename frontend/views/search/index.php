<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HealthSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Searches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            //'med_id',
            //'npi',
            //'ind_pac_id',
            //'ind_enrl_id',
            'last_name',
            'first_name',
            'mid_name',
            // 'suffix',
            // 'gender',
            // 'credential',
            // 'med_school',
            // 'grad_yr',
            // 'pri_spec',
            // 'sec_spec1',
            // 'sec_spec2',
            // 'sec_spec3',
            // 'sec_spec4',
            // 'sec_spec_all',
            // 'org_legal_name',
            // 'org_dba_name',
            // 'grp_prac_pac_id',
            // 'num_grp_prac_mem',
             'address_1',
             'address_2',
            // 'marker_add_2',
             'city',
             'state',
             'zip',
            // 'hosp_aff_ccn_1',
            // 'hosp_aff_lbn_1',
            // 'hosp_aff_ccn_2',
            // 'hosp_aff_lbn_2',
            // 'hosp_aff_ccn_3',
            // 'hosp_aff_lbn_3',
            // 'hosp_aff_ccn_4',
            // 'hosp_aff_lbn_4',
            // 'hosp_aff_ccn_5',
            // 'hosp_aff_lbn_5',
            // 'medicare',
            // 'erx',
            // 'pqrs',
            // 'ehr',
            // 'pqrs_cert',
            // 'mil_hearts',

            ['class' => 'kartik\grid\ActionColumn',
            'template'=> '{view}']
            //'deleteOptions' => ['label' => '<i class="glyphicon glyphicon-remove"></i>']],
        ],
    ]); ?>

</div>
