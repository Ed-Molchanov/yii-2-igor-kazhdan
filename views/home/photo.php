<section class="container">

    <!--    подключение страниц ***********************************************-->

    <div class="row">
        <div class="col-md-12 a12">
            <h1> <strong>Игорь Каждан</strong> - <em> Фотогалерея </em>
            </h1>
            <hr>
        </div>
    </div><!-- row -->   
    <div class="row">

        <?php
        $dir = "photo";
        $scan = scandir($dir);

        for ($i = 0; $i < count($scan); $i++) {
            if ($scan[$i] != "." && $scan[$i] != "..") {
                ?>
                <a class="fancybox" rel="group" href="/web/<?= $dir; ?>/<?= $scan[$i]; ?>" title=''>
                    <img  src="/web/<?= $dir; ?>/<?= $scan[$i]; ?>" alt='' class="animated a10 p5" style="height: 230px; margin:25px;" />
                </a>
                <?php
            }
        }
        ?>
    </div>





    <!--    подключение страниц ***********************************************  -->
</section>