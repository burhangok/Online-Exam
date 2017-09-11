<?php include("header.php"); ?>

<?php

// Duzenlenecek Soru ID Bilgisi

$soruId =$_GET['soru_id'];

// Duzenlenecek Soru ID Bilgisi

?>

<section class="content-header">
    <h1>
        Soru Düzenle
        <small>Online Sınav Yönetim Sistemi</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <div class="box box-success" id="giris">
                <div class="box-header with-border">
                    <center><h3 class="box-title"> Soru Düzenle</h3></center>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action ="../controllers/Sorular.php" class="form-group" id="form1" name="soruDuzenle">
                    <div class="box-body">
                        <div class="col-md-12">
                            
							 <?php
					   
$soru =  $db->query("SELECT questions.*,categories.name FROM questions,categories WHERE questions.category_id = categories.category_id AND question_id = '{$soruId}'")->fetch(PDO::FETCH_ASSOC);
						
						
							?>
                            <label>Kategori</label>

                            <select class="form-control dropdown" name="kategori" >
							<option value="<?=$soru['category_id']?>">Kayıtlı Kategori : <?=$soru['name']?></option>
                                 <?php
						$kategoriler =  $db->query("SELECT * FROM categories", PDO::FETCH_ASSOC);
						
						foreach ($kategoriler as $kategori) {
							
							?>
                                <option value="<?=$kategori['category_id']?>"><?=$kategori['name']?></option>
                                <?php }  ?>

                            </select>
                            <br/>
                            <label>Soru Metni</label>
                            <textarea class="ckeditor" cols="20" rows="10" name="soru" ><?=$soru['text']?></textarea>
                            <br>
                            <hr/>

                            <h4>SEÇENEKLER </h4>

                            <br/>
                            <label>A</label>
                            <input type="text" class="form-control" name="aSikki"   value="<?=$soru['option1']?>"/>
                            <br/>
                            <label>B</label>
                            <input type="text" class="form-control" name="bSikki"  value="<?=$soru['option2']?>"/>
                            <br/>
                            <label>C</label>
                            <input type="text" class="form-control" name="cSikki"  value="<?=$soru['option3']?>"/>
                            <br/>
                            <label>D</label>
                            <input type="text" class="form-control" name="dSikki"  value="<?=$soru['option4']?>"/>
                            <br/>

                            <hr/>

                            <label>Doğru Cevap</label>
                            <select class="form-control dropdown" name="cevap">
                                
							
								<option value="<?=$soru['answer']?>">Kayıtlı Cevap : <?=$soru['answer']?></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>

                        </div>



                    </div>
                    <div class="box-footer">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success pull-left" name="islem" value="GÜNCELLE" />
                            <button type="reset" class="btn btn-danger pull-right">VAZGEÇ</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>


</section>


</section>
<!-- /.content -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>  

<?php include("footer.php"); ?>