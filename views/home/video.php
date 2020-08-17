<?php
$j = $vid1;
/*
  $n = db::a("select count(*) as x from video ");
  $y = a::u()[1];
  if ($y == "") {
  $j = db::r("select * from video order by a1 desc");
  } else {
  $j = db::r("select * from video where id=$y");
  }

 */
?>
<section class="container">
    <!--    подключение страниц ***********************************************-->
    <div class="row a12">
        <div class="col-md-12">
            <h1> <strong>Игорь Каждан</strong> - <em> Видео </em></h1><hr>
        </div>
    </div><!-- row -->   

    <div class="row a12">
        <div class="col-md-12">


            <div class=" thumbnail " >
                <h4>_&nbsp<span class="glyphicon glyphicon-music">

                    </span>&nbsp&nbsp___ &nbsp<?= $j->a2; ?></h4>
                <div class=" video-responsive  animated  p3 a12">
                    <?= $j->a4; ?>
                </div>
                <div class="caption">

                    <p class="text-info"><?= $j->a3; ?></p>

                </div>
            </div><!-- class="thumbnail" -->
        </div><!-- class=" col-md-..." -->
    </div><!-- row -->
    <div class="row a12">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title a12"> Каталог видеороликов на сайте - всего <span class="label label-success"><?= $nn ?></span></h3>
                </div>
                <div class="panel-body" id="video_tr">

                    <table class="table table-bordered table-striped table-hover text-info ">


                        <?php
                        //  $x = db::s("select * from video order by a1 desc");
                        foreach ($videos as $i) {
                            ?>
                            <tr data-toggle="modal" data-target="#myModal" >
                                <td class="col-md-1 id"><?= date('d-m-Y', strtotime($i->a1)); ?></td>
                                <td class="col-md-8">
                                    <a href="index.php?r=home/video&id=<?= $i->id; ?>" class="a_p"><p class="text-info"><?= $i->a2; ?></p></a>
                                </td>

                            </tr>
                        <?php } ?>
                    </table>




                </div>
                <div class="panel-footer">
                </div>
            </div><!-- class="panel panel-primary" -->
        </div><!-- class=" col-md-..." -->
    </div><!-- row -->
    <!--    подключение страниц ***********************************************  -->
</section>