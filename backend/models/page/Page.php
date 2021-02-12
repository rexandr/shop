<?php
namespace backend\models\page;

use yii\behaviors\TimestampBehavior;

class Page extends \common\models\Page
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [TimestampBehavior::className()]
        );
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'meta_title' => 'Тема',
            'meta_description' => 'Короткий зміст',
            'header' => 'Заголовок',
            'description' => 'Зміст',
            'image' => 'Зображення',
            'status' => 'Статус',
            'created_at' => 'Створено',
            'updated_at' => 'Відредаговано',
        ];
    }
}