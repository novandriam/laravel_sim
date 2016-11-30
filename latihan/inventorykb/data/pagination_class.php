<?php
/*
Developed by Reneesh T.K
reneeshtk@gmail.com
You can use it with out any worries...It is free for you..It will display the out put like:
First | Previous | 3 | 4 | 5 | 6 | 7| 8 | 9 | 10 | Next | Last
Page : 7  Of  10 . Total Records Found: 20
*/
class Pagination_class{
	var $result;
	var $anchors;
	var $total;
	function Pagination_class($qry,$starting,$recpage)
	{
		$rst		=	mysql_query($qry) or die(mysql_error());
		$numrows	=	mysql_num_rows($rst);
		$qry		 .=	" limit $starting, $recpage";
		$this->result	=	mysql_query($qry) or die(mysql_error());
		$next		=	$starting+$recpage;
		$var		=	((intval($numrows/$recpage))-1)*$recpage;
		$page_showing	=	intval($starting/$recpage)+1;
		$total_page	=	ceil($numrows/$recpage);

		if($numrows % $recpage != 0){
			$last = ((intval($numrows/$recpage)))*$recpage;
		}else{
			$last = ((intval($numrows/$recpage))-1)*$recpage;
		}
		$previous = $starting-$recpage;
		$anc = "<ul id='pagination'>";
		if($previous < 0){
			$anc .= "<li class='previous-off'>Awal</li>";
			$anc .= "<li class='previous-off'>Sebelumnya</li>";
		}else{
			$anc .= "<li class='next'><a href='javascript:pagination(0);'>Awal </a></li>";
			$anc .= "<li class='next'><a href='javascript:pagination($previous);'>Sebelumnya </a></li>";
		}

		################If you dont want the numbers just comment this block###############
		$norepeat = 2;//no of pages showing in the left and right side of the current page in the anchors
		$j = 1;
		$anch = "";
		for($i=$page_showing; $i>1; $i--){
			$fpreviousPage = $i-1;
			$page = ceil($fpreviousPage*$recpage)-$recpage;
			$anch = "<li><a href='javascript:pagination($page);'>$fpreviousPage </a></li>".$anch;
			if($j == $norepeat) break;
			$j++;
		}
		$anc .= $anch;
		$anc .= "<li class='active'>".$page_showing."</li>";
		$j = 1;
		for($i=$page_showing; $i<$total_page; $i++){
			$fnextPage = $i+1;
			$page = ceil($fnextPage*$recpage)-$recpage;
			$anc .= "<li><a href='javascript:pagination($page);'>$fnextPage</a></li>";
			if($j==$norepeat) break;
			$j++;
		}
		############################################################
		if($next >= $numrows){
			$anc .= "<li class='previous-off'>Selanjutnya</li>";
			$anc .= "<li class='previous-off'>Akhir</li>";
		}else{
			$anc .= "<li class='next'><a href='javascript:pagination($next);'>Selanjutnya </a></li>";
			$anc .= "<li class='next'><a href='javascript:pagination($last);'>Akhir</a></li>";
		}
			$anc .= "</ul>";
		$this->anchors = $anc;

		$this->total = "Halaman : <b>$page_showing</b> dari <b>$total_page</b>. Total Records : <b>$numrows</b>";
	}
}
?>