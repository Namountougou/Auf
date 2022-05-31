
// function disapear() {
// setTimeout(hider,3000);
// function hider(){
//     document.getElementById('success').style.display='none';
// }


// }
$(function () {
    setTimeout(function () {
        $("#success").hide();
    }, 5000);
});

$(document).ready( function () {
    $('#myTable').DataTable();
} );