
if (CurentPageName() == "portfolio-kat.php") {
    // PotKatSira();
    PotKatSira2();
}

function PotKatSira2() {
    let opt = `<option value="" disabled="disabled" selected="selected">Sec</option>`;
    let PKS = [];

    $.ajax({
        url: "../settings/code/portfolio_kat.php",
        data: { pks: true },
        method: "POST",

        success: function (data) {
            PKS = JSON.parse(data);
            console.log(data)
            console.log(PKS)
            for (let i = 1; i <= 20; i++) {
                if (PKS.indexOf(i) == -1)
                    opt += `<option value="${i}">${i}</option>`

                else
                    opt += `<option disabled="disabled" value="${i}">${i}</option>`

            }
            document.getElementById("sira").innerHTML = opt;

        }
    })
}
function KatStatus(id) {
    let message = "";
    $.ajax({
        url: "../settings/code/portfolio_status.php",
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
function KatSil(id){
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
function Redakte(id,i){
    let cls=document.getElementsByClassName("PortKateqoriya")[i].getElementsByTagName("td");
    let ad=cls[1].textContent;
    document.getElementById("ad").value=ad;
    document.getElementById("id").value=id;
    console.log(ad)
}
function CurentPageName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}