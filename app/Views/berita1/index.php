<?php foreach ($berita_xml_1->channel as $key => $value); ?>

<div class="jumbotron">
  <a href="<?php echo $value->link?>" class="list-group-item list-group-item-action">

    <div class="card-body">
        <div class="card-body" style="max-width: 300px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Tempo_Magazine.svg/1200px-Tempo_Magazine.svg.png" class="card-img-top mb-4" alt="Card image cap">
        </div>
        
        <div class="d-flex w-100 justify-content-between">
            <?php foreach ($berita_xml_1->channel as $key => $value); ?>
            <h1 class="display-6"><?php echo $value->title?></h1>
        </div>
        <p class="mb-5"><?php echo $value->description?></p>
    </div> 
  </a>
</div>

<?php foreach ($berita_xml_1->channel->item as $key => $value): ?>
<div class="list-group">
  <a href="<?php echo $value->link?>" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
        <div class="card-body" style="max-width: 300px;">
            <img src="<?php echo $value->img?>" class="card-img-top" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="mb-1"><?php echo $value->title?></h5>
            <br>
            <p class="mb-1"><?php echo $value->description?></p>
        </div> 
    </div>
  </a>
</div>
<?php endforeach?>

