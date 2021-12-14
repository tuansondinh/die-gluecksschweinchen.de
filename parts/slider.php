<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php
        for ($i=1; $i<=30; $i++):?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($i);?>" class="active"></li>
        <?php endfor;?>


    </ol>

    
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../images/bild1_comp.jpeg" class="d-block w-100" alt="...">
        </div>
        <?php
        for ($i=2; $i<=31; $i++):?>
       <div class="carousel-item ">
        <img src="../images/bild<?php echo e($i);?>.jpg" class="d-block w-100" alt="...">
        </div>
        <?php endfor;?>
      
       

    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>