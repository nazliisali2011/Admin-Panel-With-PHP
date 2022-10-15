<?php require_once "header.php"; require_once "navbar.php";
 require_once "../settings/code/portfolio.php";
 require_once "../settings/code/portfolio_kat.php";
 ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"> Category List</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog Category List</h4>
                                <div id="StatusMessage"></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($siyahi);$i++){ ?>
                                            <tr class="PortKateqoriya">
                                                <td><a href="javascript:void(0)"><?=$siyahi[$i]["id"]?>  </a></td>
                                                <td><?=$siyahi[$i]["name"]?> </td>
                                                <td><input onchange="KatStatus(<?=$siyahi[$i]['id']?>)" type="checkbox" <?=$siyahi[$i]["status"] ? 'checked="checked"' : "" ; ?>   class="js-switch" data-color="#26c6da" data-size="small" /></td>
                                                <td>
                                                <button 
                                                onclick="Redakte(<?=$siyahi[$i]['id']?>,<?=$i?>)"
                                                type="button" 
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                data-bs-whatever="@fat"
                                                class="btn btn-outline-success">Redakte Et</button>
                                                <button onclick="KatSil(<?=$siyahi[$i]['id']?>)"  type="button" class="btn btn-outline-danger">Sil</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
               
        </div>





    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redakte Et</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#"  method="POST">
        <div class="mb-3">
            <label for="id" class="col-form-label">id:</label>
            <input id="id" name="id" type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="ad" class="col-form-label">Kateqoriya Ad:</label>
            <input id="ad" name="ad" type="text" class="form-control" >
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bagla</button>
        <button name="redakte" type="submit" class="btn btn-primary">Redakte</button>
      </div> 
        </form>
      </div>
     
    </div>
  </div>
</div>

<?php require_once "footer.php"?>