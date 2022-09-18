<?php foreach ($berita_xml_3->channel as $key => $value); ?>

<div class="jumbotron">
  <a href="<?php echo $value->link?>" class="list-group-item list-group-item-action">

    <div class="card-body">
        <div class="card-body" style="max-width: 450px;">
            <?php foreach ($berita_xml_3->channel->image as $key => $value); ?>
            <img src="<?php echo $value->url?>" class="card-img-top mb-4" alt="Card image cap">
        </div>
        
        <div class="d-flex w-100 justify-content-between">
            <?php foreach ($berita_xml_3->channel as $key => $value); ?>
            <h1 class="display-6"><?php echo $value->title?></h1>
        </div>
        
        <p class="mb-5"><?php echo $value->description?></p>
        <small>Last Modified : <?php echo $value->lastBuildDate?></small>
    </div> 
  </a>
</div>


<?php foreach ($berita_xml_3->channel->item as $key => $value): ?>
<div class="list-group">
  <a href="<?php echo $value->guid?>" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">

        <div class="card-body">
            <h5 class="mb-1"><?php echo $value->title?></h5>
            <br>
            <p class="mb-5"><?php echo $value->description?></p>
            <small>Last Modified : <?php echo $value->pubDate?></small>
        </div> 
    </div>
  </a>
</div>
<?php endforeach?>

