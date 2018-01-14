var mang=[];
function load() {
    $.ajax({
        type: 'post',
        url: 'index.php',
        data: {
            hien_thi: true,
        },
        success: function (response) {
            mang = jQuery.parseJSON(response);        
        },
    });
}
setInterval(function () {
    load();
    document.getElementById('tong_dh_hom_nay').innerHTML = mang[1];
    document.getElementById('tong_dh_chua_duyet_hom_nay').innerHTML = mang[0];
}, 100);