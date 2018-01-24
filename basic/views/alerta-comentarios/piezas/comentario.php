<?php

use yii\helpers\Html;

?>

<div class="comments">

    <div class="photo">
        <div class="avatar" style="background-image:url('<?= Yii::$app->request->baseUrl ?>/img/dummy.jpg')";>
        </div>
    </div>
    <div class="comment-block">
        <div class="comment-name">
            <h1><?=$dataComentario->nick?></h1>
            <h4> <b>#<?=$dataComentario->comentario_id?></b>
                <?php   if(empty($dataComentario->comentario_id)){?>
                    <span class="glyphicon glyphicon-asterisk"></span>
                    
                        <?php echo " Raiz ";
                        }
                        else {
                        ?><span class="glyphicon glyphicon-arrow-right"></span>
                            <?php echo "  #".$dataComentario->comentario_id;
                        }
                        ?>
               </h4>
            <p class="comment-text">
                <?= $dataComentario->texto;?>
            </p>
            <div class="comment-date">
                <?php
                $date = new DateTime($dataComentario->modi_fecha);
                echo date_format($date, 'H:i:s (d-m-Y)');
                ?>
            </div>
            <ul class="comment-actions">
                <a href=""> <li class="complain"><span class="glyphicon glyphicon-share-alt"></span> Responder </li></a>
                <a href=""><li class="complain"> <span class="glyphicon glyphicon-warning-sign"></span> Denunciar </li></a>
            </ul>
        </div>
    </div>

</div>




