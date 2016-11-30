$(document).ready(function(){

  //menangkap error dan men-set parameter global (timeout, dll)
  $.ajaxSetup({
    timeout: 10000,
    cache: false,
    error:function(x,e){
    	if(x.status==0){
    	  alert('Anda sedang offline!\nSilahkan cek koneksi anda!');
    	}else if(x.status==404){
    	  alert('Permintaan URL tidak ditemukan!');
    	}else if(x.status==500){
    	  alert('Internal Server Error!');
    	}else if(e=='parsererror'){
    	  alert('Error.\nParsing JSON Request failed!');
    	}else if(e=='timeout'){
    	  alert('Request Time out!');
    	}else {
    	  alert('Error tidak diketahui: \n'+x.responseText);
    	}
    }
  });
  //menampilkan list data barang
  loadData();

  function loadData(){
    var dataString;
   

    $.ajax({
      url: "data/closingstock_data.php",
      type: "GET",
      data: dataString,
      success:function(data)
      {
        $('#divPageData').html(data);
      }
    });
  }
});