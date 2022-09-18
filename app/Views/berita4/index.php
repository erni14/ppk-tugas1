<?php foreach ($berita_json['Infogempa']['gempa'] as $key => $value); ?>
<div class="jumbotron">
  <div class="d-flex w-100 justify-content-between">
    
    <div class="card-body" style="max-width: 200px;">
        <a href="https://data.bmkg.go.id/gempabumi/" class="card-img-top" alt="Card image cap">      <img src="https://cdn.bmkg.go.id/Web/Logo-BMKG-new.png" class="d-block w-100" alt="Logo BMKG" style="max-height: 170px; max-width: 116px;"></a>
    </div>
    
    <a href="https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json" class="list-group-item list-group-item-action">
    
    <div class="card-body">
        <div class="d-flex w-100 justify-content-between">
            <h1 class="display-6">Data Gempa Bumi Terkini</h1>
        </div>
        
        <p class="mb-3">Daftar 15 gempa bumi terkini dengan magnitudo lebih dari 5 SR di seluruh Indonesia</p>
    </div> 
    </a>
   </div>
</div>
<?php foreach ($berita_json['Infogempa']['gempa'] as $key => $value): ?>
<div class="list-group">
  <a href="" class="list-group-item list-group-item-action">
  <div class="d-flex w-100 justify-content-between">
    <div class="card-body">
      <h5 class="mb-4"><?php echo $value['Wilayah']?></h5>
      <small>Magnitudo : <?php echo $value['Magnitude']?> SR</small> <br>
      <small>Potensi : <?php echo $value['Potensi']?></small>
    </div> 
    <p class="mb-1"><?php echo $value['Tanggal']?> <?php echo $value['Jam']?></p>
  </div>
  </a>
</div>
<?php endforeach?>

