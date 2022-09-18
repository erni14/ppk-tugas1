<?php foreach ($berita_xml_2->channel as $key => $value); ?>
<div class="jumbotron">
  <div class="d-flex w-100 justify-content-between">
    
    <div class="card-body" style="max-width: 200px;">
      <?php foreach ($berita_xml_2->channel->image as $key => $value); ?>
      <a href="<?php echo $value->link?>"><img src="<?php echo $value->url?>" class="card-img-top" alt="Card image cap"></a>
    </div>
    
    <a href="<?php echo $value->link?>" class="list-group-item list-group-item-action">
      
      <div class="card-body">
        <div class="d-flex w-100 justify-content-between">
          <?php foreach ($berita_xml_2->channel as $key => $value); ?>
          <h1 class="display-6"><?php echo $value->title;?></h1>
        </div>
        <p class="mb-3"><?php echo $value->description?></p>
        <small>Last Modified : <?php echo $value->lastBuildDate?></small>
      </div> 
    </a>
  </div>
</div>

<?php foreach ($berita_xml_2->channel->item as $key => $value): ?>
<div class="list-group">
  <a href="<?php echo $value->guid?>" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">

        <div class="card-body ">
            <h5 class="mb-1"><?php echo $value->title?></h5>
            <br>
            <img src="<?php echo $value->enclosure->attributes()[2];?>" class="card-img-top mb-4" alt="Card image cap" style="max-width: 300px;">
            <p class="mb-5" ><?php echo $value->children("content",true);?></p>
            <small>Last Modified : <?php echo $value->pubDate?></small>
        </div> 
    </div>
  </a>
</div>
<?php endforeach?>

