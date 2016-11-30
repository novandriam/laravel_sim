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

 
  //menangani jika user melakukan pilihan pada combo #pilihcari
  $("select#pilihcari").change(function(){
    if ($(this).val() == "nosj"){
      $("td#kolompilih").show();
      $("input#fieldcari").show();
      $("input#fieldcari").focus();
    }
    else if ($(this).val() == "penerima"){
      $("td#kolompilih").show();
      $("input#fieldcari").show();
      $("input#fieldcari").focus();
    }
    else if ($(this).val() == "noinvoice"){
      $("td#kolompilih").show();
      $("input#fieldcari").show();
      $("input#fieldcari").focus();
    }
    else{
      $("td#kolompilih").hide();
    }
  });

  //menampilkan list data satuan
  loadData();

  // fungsi untuk me-load tampilan list data satuan, data yang ditampilkan disesuaikan
  // juga dengan input data pada bagian search
  function loadData(){
    var dataString;
    var cari = $("input#fieldcari").val();
    var combo = $("select#pilihcari").val();

    if (combo == "penerima"){
      dataString = 'penerima='+ cari;
    }
    else if (combo == "nosj"){
      dataString = 'nosj='+ cari;
    }
	else if (combo == "noinvoice"){
      dataString = 'noinvoice='+ cari;
    }

    $.ajax({
      url: "data/page_data_outgoing.php",
      type: "GET",
      data: dataString,
      success:function(data)
      {
        $('#divPageData').html(data);
      }
    });
  }

  // melakukan pemrosesan data untuk bagian search (pencarian data)
  $("form#formSearch").submit(function(){
    var cari = $("input#fieldcari").val();
    var combo = $("select#pilihcari").val();
    if (cari.replace(/\s/g,"") != ""){ // mengecek field text kosong atau tidak)
        loadData();
    }
    else if ((cari.replace(/\s/g,"") == "") && (combo != "semua") ){
      alert("Maaf, field harus diisi!");
      $("input#fieldcari").focus();
    }
    else{
      loadData();
    }
    return false;
  });

});