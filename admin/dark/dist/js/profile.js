
if (CurentPageName() == "portfolio.php") {
    // PotKatSira();
    PotKatSira2();
}
let mesaj=document.getElementsByClassName("sifremesaj")[0];
let yeniparol=document.getElementById("yeniparol");
function KohneParol(sifre,email) {
    
    $.ajax({
        url: "../settings/code/profile.php",
        data: { ksifre: true, sifre: sifre, email: email },
        method: "POST",

        success: function (data) {
            if (data==0) {
                mesaj.className="alert alert-danger w-50 mt-3"
                mesaj.textContent="Parol yanlisdir";
                yeniparol.disabled = true;
            }
            else {
                mesaj.className="alert alert-success w-50 mt-3"
                mesaj.textContent="Parol  duzgundur"
                yeniparol.disabled = false;
            }
        }
    })
}


function CurentPageName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}