<?php include("header.php"); ?>


<section class="content-header">
    <h1>
        Yeni Soru Ekle
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
                    <center><h3 class="box-title">Yeni Soru Ekle</h3></center>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action ="../controllers/Sorular.php" class="form-group" id="form1" name="yeniSoru">
                    <div class="box-body">
                        <div class="col-md-12">
                            
                            <label>Kategori</label>

                            <select class="form-control" name="kategori" required >
                                 <?php
					   $kategoriler =  $db->query("SELECT * FROM categories", PDO::FETCH_ASSOC);
						foreach ($kategoriler as $kategori) {
							
							?>
                                <option value="<?=$kategori['category_id']?>"><?=$kategori['name']?></option>
                                <?php }  ?>

                            </select>
                            <br/>
                            <label>Soru Metni</label>
                            <textarea class="ckeditor" cols="20" rows="10" name="soru" required ></textarea>
                            <br>
                            <hr/>

                            <h4>SEÇENEKLER </h4>

                            <br/>
                            <label>A</label>
                            <input type="text" class="form-control" name="aSikki"  required />
                            <br/>
                            <label>B</label>
                            <input type="text" class="form-control" name="bSikki"  required />
                            <br/>
                            <label>C</label>
                            <input type="text" class="form-control" name="cSikki"  required />
                            <br/>
                            <label>D</label>
                            <input type="text" class="form-control" name="dSikki"  required />
                            <br/>

                            <hr/>

                            <label>Doğru Cevap</label>
                            <select class="form-control" name="cevap"  required >
                                
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>

                        </div>



                    </div>
                    <div class="box-footer">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success pull-left" name="islem" value="KAYDET" />
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