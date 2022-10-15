
if (CurentPageName() == "portfolio.php") {
    // PotKatSira();
    PotKatSira2();
}
function PortStatus(id) {
    let message = "";
    $.ajax({
        url: "../settings/code/portfolio__status.php",
        data: { ks: true, id: id },
        method: "POST",

        success: function (data) {
            if (data) {
                message = '<div class="alert alert-success " role="alert">Status deyishdirildi</div>';
            }
            else {
                message = '<div class="alert alert-danger" role="alert">Status deyishdirilmedi</div>';
            }
            document.getElementById("StatusMessage").innerHTML=message;
            setTimeout(function(){
                document.getElementById("StatusMessage").innerHTML="";
            },3000);

        }

    })
}
function PortSil(id){
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
function RedaktePort(id,i){
    let cls=document.getElementsByClassName("PortKateqoriya")[i].getElementsByTagName("td");
    let img=cls[0].src;
    let ad=cls[2].textContent;
    let link=cls[3].textContent;
    document.getElementById("img").src=img;
    document.getElementById("ad").value=ad;
    document.getElementById("id").value=id;
    document.getElementById("link").value=link;
    console.log(img)
}
function CurentPageName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}