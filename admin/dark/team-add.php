<?php require_once "header.php" ; require_once "navbar.php"; 
 require_once "../settings/code/team.php";?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Komanda Elave</h4>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Komanda Elave</h4>
                                <form class="form pt-3" enctype="multipart/form-data" action="#" method="POST">
                                    <div class="form-group">
                                        <label>Ad</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="ad" value=""
                                            aria-label="Username" aria-describedby="basic-addon11" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Metn</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="metn" value=""
                                            aria-label="Username" aria-describedby="basic-addon11" >
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                       </div>
                                       <div class="custom-file">
                                       <input name="sekil" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                       <label class="custom-file-label form-control" for="inputGroupFile01">png ,jpg,gif ,jfif</label>
                                      </div>
                                    </div>
                               
                                 <button name="Team_add" type="submit" class="btn btn-success mr-2">Elave Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>