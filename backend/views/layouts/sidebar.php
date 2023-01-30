<?php

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
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => [
                        ['label' => 'MENU', 'header' => true],
                        ['label' => 'NavBar', 'iconStyle' => 'far', 'url' => ['/navbar']],
                        ['label' => 'About', 'iconStyle' => 'far', 'url' => ['/about']],
                        ['label' => 'Testimonial', 'iconStyle' => 'far', 'url' => ['/testimonial']],
                        ['label' => 'Ourfruit', 'iconStyle' => 'far', 'url' => ['/ourfruit']],
                        ['label' => 'Setting', 'iconStyle' => 'far', 'url' => ['/upsetting']],
                        ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                        ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ],
                ]);
                echo Html::a('Sign out', ['site/logout'], ['data-method' => 'post', 'class' => 'dropdown-item']);
            }
            else echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                ['label' => 'Login', 'url' => ['/user/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
              ],
            ]);


            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>