<?php include("header.php"); ?>

<section class="content-header">
      <h1>
       Sorular
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

             <h4>TÜM SORULAR</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p class="text-green">Burada tüm kayıtlı soruları görebilirsiniz.</p> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
  <h4>İŞLEMLER</h4>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <a href="yeniSoru.php"><button class="btn btn-success" style="margin-right:7px;">YENİ SORU EKLE</button></a>
			<a href="soruAktar.php"><button class="btn btn-primary" style="margin-right:7px;">ÇOKLU SORU EKLE</button></a>

             
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	            
            <div class="box-body">
            	<table id="liste1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Soru No</th>
						<th>Kategori</th>
                        <th>Soru</th>
                        <th>Cevap</th>
                        <th>Kayıt Tarihi</th>
						
						<th>İşlem</th>
                      </tr>
                    </thead>
                    <tbody>
                      
					  <?php
					   $sorular =  $db->query("SELECT questions.*,categories.name 
													FROM questions,categories 
													WHERE questions.category_id = categories.category_id
													", PDO::FETCH_ASSOC);
						foreach ($sorular as $soru) {
							
							?>
												
					  <tr>
					  
					   <td class="text-bold text-blue"><?=$soru['question_id']?></td>
						
						<td><?=$soru['name']?></td>
						
						<td><?=substr($soru['text'],0,30)."..."?></td>
						
						<td><?=$soru['answer']?></td>
					    
						<td><?=date("d F Y",strtotime($soru['created_at']))?></td>
						
						<td>
						
						
						
						<a href="soruDuzenle.php?soru_id=<?=$soru['question_id']?>"><button class="btn btn-success" style="margin-right:8px;">Düzenle</button></a>
						
						<button class="btn btn-danger" style="margin-right:8px;" onclick="confirm('Emin Misiniz ?');">Sil</button>
						
						</td>
						
						
                      </tr>
                                <?php }  ?>
                                          </tbody>
                 </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

    </section>
    <!-- /.content -->
		<script>


  <?php include("footer.php"); ?>