<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<div class="container-fluid">
    <div class="row">

        <?php 
            $count = 4;

            $num = 1;

            for($i = 0; $i<$count; $i++) {
        ?>

        <div class="card row-css" style="width: 18rem;">
            <img src="<?php echo IMG.'bgimage.jpg'?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title <?php echo $num; ?></h5>
                <p class="card-text">Some quick example text to buil...</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <?php  
            $num++;
            }
        ?>
        
    </div>
</div>

<div class="left-panel">

<ul class="list-group">
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

</div>