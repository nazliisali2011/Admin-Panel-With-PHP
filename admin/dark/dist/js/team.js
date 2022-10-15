
if (CurentPageName() == "team-siyahi.php") {
    // PotKatSira();
    PotKatSira2();
}
function TeamSil(id){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            location.href=CurentPageName()+`?id=${id}&sil=ok`;
         
        } else {
          swal("Imtina edildi !!!");
        }
      });
}
function CurentPageName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}