$(document).on("click", "#btnExcluir", function(){
    var id=$(this).val();
    $("#valor").val(id);
    console.log(id);
});