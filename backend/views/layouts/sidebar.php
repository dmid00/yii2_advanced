<?php

use hail812\adminlte\widgets\Menu;
use yii\helpers\Html;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <?php
            if (Yii::$app->user->isGuest==null) {
                echo Menu::widget([
                    'items' => [
                        ['label' => 'Структура сайта', 'header' => true],
                        ['label' => 'Панель Навигации', 'iconStyle' => 'far', 'url' => ['/category']],
                        ['label' => 'Информация о компании', 'iconStyle' => 'far', 'url' => ['/about']],
                        ['label' => 'Добавление/Изменение отзывов', 'iconStyle' => 'far', 'url' => ['/testimonial']],
                        ['label' => 'Добавление/Изменение товара', 'iconStyle' => 'far', 'url' => ['/ourfruit']],
                        ['label' => 'Настройки', 'iconStyle' => 'far', 'url' => ['/setting']],
                        ['label' => 'Отладка ошибок', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ],
                ]);
                echo Html::a('Выйти', ['site/logout'], ['data-method' => 'post', 'class' => 'dropdown-item']);
            }
            else echo Menu::widget([
                'items' => [
                ['label' => 'Войти', 'url' => ['/user/login'], 'icon' => 'sign-in-alt'],
              ],
            ]);


            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>