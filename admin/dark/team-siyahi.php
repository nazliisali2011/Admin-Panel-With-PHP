<?php require_once "header.php"; require_once "navbar.php";
 require_once "../settings/code/team.php";
 require_once "../settings/code/team_.php";
 ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"> Team List</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Team List</h4>
                        <div id="StatusMessage"></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sekil</th>                              
                                        <th>Ad</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($teamsiyahi);$i++){ ?>
                                    <tr class="TeamKateqoriya">
                                        <td><img src="../../<?=$teamsiyahi[$i]["sekil"]?>" height='60px' /></td>
                                        <td><?=$teamsiyahi[$i]["Ad"]?> </td>
                                   
                                        <td>
                                          
                                          
                                            <a  class="btn btn-outline-success" href="team-redakte.php?id=<?=$teamsiyahi[$i]['id']?>&rdk=ok">Redakte Et</a>
                                         
                                            <button onclick="TeamSil(<?=$teamsiyahi[$i]['id']?>)" type="button"
                                                class="btn btn-outline-danger">Sil</button>
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
                <form action="#" method="POST">
                 
                        <img id="img" name="img" src="" />
                        <input type ="hidden" id="id" name="id" >

                    <div class="mb-3">
                        <label for="ad" class="col-form-label">Ad:</label>
                        <input id="ad" name="ad" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="ad" class="col-form-label">Link:</label>
                        <input id="link" name="link" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bagla</button>
                        <button name="portredakte" type="submit" class="btn btn-primary">Redakte</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once "footer.php"?>