<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">
        <?php
        foreach (Yii::$app->params["admin_menu"] as $menu) {
            if ((Yii::$app->getUser()->getIdentity()->role & $menu['role']) == $menu['role']) {
                ?>

                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa <?= $menu['icon'] ?>"></i>
                            <span><?= $menu['title'] ?></span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php
                            foreach ($menu['sub_menu'] as $sub_menu) {
                                ?>
                                <li><a href="<?= $sub_menu['link'] ?>"><i
                                            class="fa fa-fw "></i><?= $sub_menu['title'] ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <?php
            }
        }
        ?>
    </section>

</aside>
