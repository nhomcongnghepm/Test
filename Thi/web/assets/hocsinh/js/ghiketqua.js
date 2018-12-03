function ghiketqua(getvl,getcauso){
    mchon[getcauso]=getvl;
    var sums= countquest();
    document.getElementById("caudalam").innerHTML=sums+" câu";
    document.getElementById("cauconlai").innerHTML=(40-sums)+" câu";
}
function countquest() {
    var dem = 0;
    for (var i = 0; i < mchon.length; i++) {
        if (mchon[i] != "sdfsdfsfsd") {
            dem++;

        }
    }
    return dem;
}
