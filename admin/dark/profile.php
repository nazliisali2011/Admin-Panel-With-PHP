<?php require_once "header.php"; require_once "navbar.php";?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Profile</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
           <div class="sifremesaj" role="alert"></div>
        <div class="row">
         
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="../../<?=$_SESSION["user_sekil"]?>" class="img-circle"
                                width="150" />
                            <h4 class="card-title m-t-10"> <?=$_SESSION["user_adsoyad"]?></h4>
                            <h6 class="card-subtitle"><?=$_SESSION["user_email"]?></h6>
                        </center>
                    </div>
                    <div>

                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="input-group mb-3">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input name="sekil" type="file" class="custom-file-input"
                                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label form-control px-3" 
                                                for="inputGroupFile01 px-3">png,jpg</label>
                                                                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kohne parol</label>
                                        <div class="col-md-12">
                                            <input type="password" id="kohneparol"
                                            onkeyup="KohneParol(this.value,'<?=$_SESSION['user_email']?>')"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Yeni parol</label>
                                        <div class="col-md-12">
                                            <input type="password" id="yeniparol" disabled
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
        </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                </li>
                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                </li>
            </ul>
            <ul class="m-t-20 chatonline">
                <li><b>Chat option</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                            class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                            class="img-circle"> <span>Genelia Deshmukh <small
                                class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                            class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                            class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                            class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                            class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                            class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                            class="img-circle"> <span>Pwandeep rajan <small
                                class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<?php require_once "footer.php";?>