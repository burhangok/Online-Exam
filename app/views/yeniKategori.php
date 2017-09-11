<?php include("header.php"); ?>


<section class="content-header">
    <h1>
        Yeni Kategori Ekle
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
                    <center><h3 class="box-title">Yeni Kategori Ekle</h3></center>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action ="../controllers/Kategoriler.php" class="form-group" id="form1" name="yeniKategori">
                    <div class="box-body">
                        <div class="col-md-12">
                            
                            <label>Kategori Adı</label>

                          
                            <input type="text" class="form-control" name="kategoriAdi"  autofocus required />
                          
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