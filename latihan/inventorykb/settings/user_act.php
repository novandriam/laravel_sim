<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <!-- Mengincludekan JQueryUI CSS. Rename nama sunny dan sesuaikan Folder yg ada di dalam Folder CSS -->
		<link rel="stylesheet" type="text/css" media="screen" href="jq/css/sunny/jquery-ui-1.8.16.custom.css" />
                <!-- Mengincludekan CSS Jqgrid -->
		<link rel="stylesheet" type="text/css" media="screen" href="jq/css/ui.jqgrid.css" />
		
		
		
        <!-- Mengincludekan Library Jquery -->
		<script src="js_user/jquery-1.5.2.min.js" type="text/javascript"></script>
		
		<!-- Kita menggunakan Library Jquery UI untuk mempercantik Button2 nya -->
		<!-- Mengincludekan Library Jquery UI-->
		<script src="js_user/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
                
		<!-- Mengincludekan Locale untuk JQGrid -->
		<script src="js_user/i18n/grid.locale-en.js" type="text/javascript"></script>
                <!-- Mengincludekan Library untuk JQGrid -->
		<script src="js_user/jquery.jqGrid.min.js" type="text/javascript"></script>
	
		<script type="text/javascript">
			$(document).ready(function(){
				//Mempercantik Button dengan Jquery UI
				$("#AddButton").button();
				
				var grid = $("#list2");
				grid.jqGrid({
					url: 'json_useract.php', //URL Tujuan Yg Mengenerate data Json nya
					datatype: "json", //Datatype yg di gunakan
					height: "auto", //Mengset Tinggi table jadi Auto menyesuaikan dengan isi table
					mtype: "GET",
					colNames: ['User','Aktivitas','Tanggal','Jam'],
					colModel: [
						{name:'userid',index:'userid',width:'100px'},
						{name:'aktivitas',index:'aktivitas',align:'left',width:'800px'},
						{name:'tanggal',index:'tanggal',align:'center'},
                        {name:'jam',index:'jam',align:'center'}
					],
					rownumbers:true,
					rowNum: 10,
					rowList: [10,20,30],
					pager: '#pager2',
					sortname: 'id',
					viewrecords: true,
					sortorder: "desc",
					multiselect: false,
					caption: "Data Aktifitas User",					
				});
				grid.jqGrid('navGrid','#pager2',{view:true,edit:false,add:false,del:false});
				
				
				$('a.add').live('click',function(){		
					page=$(this).attr("href");
					$('#formInput').html('<img src="loading.gif">').load(page);
					return false;
				});
			});
			
			//Fungsi Javascript Numeric Only
			function isNumberKey(evt)
		  	{
		    	var charCode = (evt.which) ? evt.which : event.keyCode
		     	if (charCode > 31 && (charCode < 48 || charCode > 57))
		        return false;
		
		     	return true;
		  	}			
		</script>
	</head>

	<body>
<table id="list2" class="table-list" width="100%" style="margin-top:0px;">		
		<div id="pager2" class="scroll" style="text-align:center;"></div>
</table>
	</body>
</html>