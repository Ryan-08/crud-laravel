function drop(id){
    element = document.getElementById(id).classList.toggle("show");  
  }
$(".ketua").click(function() {
    var change = document.getElementById("namaKetua");  
    change.innerHTML = $(this).val();  
    drop('selectKetua');
});  