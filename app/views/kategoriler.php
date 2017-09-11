<?php include("header.php"); ?>

<section class="content-header">
      <h1>
       Kategoriler
        <small>Online Sınav Yönetim Sistemi</small>
      </h1>
    </section>
	
    <!-- Main content -->
    <section class="content">

 <!-- Default box -->
          <div class="box">
<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

             <h4>TÜM KATEGORİLER</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p class="text-green">Burada tüm kategorileri görebilirsiniz.</p> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
  <h4>İŞLEM</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <a href="yeniKategori.php"><button class="btn btn-success" style="margin-right:7px;">YENİ KATEGORİ EKLE</button></a>

             
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	            
            <div class="box-body">
            	<table id="liste1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kategori Numarası</th>
						<th>Kategori Adı</th>
                        <th>Kayıt Tarihi</th>
						<th>İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					   $kategoriler =  $db->query("SELECT * FROM categories", PDO::FETCH_ASSOC);
						foreach ($kategoriler as $kategori) {
							
							?>
												
					  <tr>
					  
						<form method="POST" action="../controllers/Kategoriler.php?kategori_id=<?=$kategori['category_id']?>">
                        
						<td><a href="" class="text-bold text-blue"><?=$kategori['category_id']?></a></td>
						<td><?=$kategori['name']?></td>
					   
                        <td><?=date("d F Y",strtotime($kategori['created_at']))?></td>
						
						<td>
						
						<input type="submit" class="btn btn-danger" name="islem" value="Sil"/>
						
						</form>
				   
						</td>
                      </tr>
                                <?php }  ?>

								</tbody>
                 </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

    </section>
    <!-- /.content -->

  <?php include("footer.php"); ?>