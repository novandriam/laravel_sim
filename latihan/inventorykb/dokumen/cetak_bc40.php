<?php
include_once "../library/config.php";
include_once "../library/inc.library.php";
$sql = mysql_query("select tbl_bc40.*, pemasok.kode_pemasok,pemasok.npwp,pemasok.nama,pemasok.alamat,pemasok.kota from tbl_bc40,pemasok where tbl_bc40.nomor='$_GET[nomor]' and tbl_bc40.pemasok = pemasok.kode_pemasok");
$r = mysql_fetch_array($sql);

//untuk mencari data perusahaan
$sqlShow = "SELECT * FROM infokb";
$qryShow = mysql_query($sqlShow)  or die ("Query ambil data kb salah : ".mysql_error());
$dataShow = mysql_fetch_array($qryShow);
$dataNpwp	= $dataShow['npwp'];
$dataNama	= $dataShow['nama'];
$dataAlamat	= $dataShow['alamat'];
$dataKota	= $dataShow['kota'];
$dataSkepKb	= $dataShow['skepkb'];
$dataTglSkep	= $dataShow['tglskep'];
header("Content-type: application/vnd.ms-word");
header('Content-Disposition: attachment;filename="bc40"'.date("dmyHis").'".doc"');
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="Lampiran%20%20I_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>SAWITRI-NOTEBOOK</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>SAWITRI-NOTEBOOK</o:LastAuthor>
  <o:Revision>1</o:Revision>
  <o:TotalTime>4</o:TotalTime>
  <o:Created>2013-03-10T14:05:00Z</o:Created>
  <o:LastSaved>2013-03-10T14:10:00Z</o:LastSaved>
  <o:Pages>4</o:Pages>
  <o:Words>900</o:Words>
  <o:Characters>5136</o:Characters>
  <o:Company>KINOSENTRA</o:Company>
  <o:Lines>42</o:Lines>
  <o:Paragraphs>12</o:Paragraphs>
  <o:CharactersWithSpaces>6024</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="Lampiran%20%20I_files/themedata.thmx">
<link rel=colorSchemeMapping href="Lampiran%20%20I_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520092929 1073786111 9 0 415 0;}
@font-face
	{font-family:"Book Antiqua";
	panose-1:2 4 6 2 5 3 5 3 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
@font-face
	{font-family:"Arial Narrow";
	panose-1:2 11 5 6 2 2 2 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 2048 0 0 159 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:8.5in 14.0in;
	margin:28.0pt 22.0pt 14.0pt 30.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:8.5in 14.0in;
	margin:77.0pt 24.0pt 14.0pt 30.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:8.5in 14.0in;
	margin:77.0pt 24.0pt 14.0pt 30.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection3
	{page:WordSection3;}
@page WordSection4
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection4
	{page:WordSection4;}
span.SpellE1 {mso-style-name:"";
	mso-spl-e:yes;}
.style1 {
	font-family: "Arial Narrow", "sans-serif";
	font-size: 8.0pt;
}
span.GramE1 {mso-style-name:"";
	mso-gram-e:yes;}
div.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.SpellE2 {mso-style-name:"";
	mso-spl-e:yes;}
span.SpellE3 {mso-style-name:"";
	mso-spl-e:yes;}
span.SpellE4 {mso-style-name:"";
	mso-spl-e:yes;}
span.GramE2 {mso-style-name:"";
	mso-gram-e:yes;}
div.MsoNormal2 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal2 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal2 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.GramE3 {mso-style-name:"";
	mso-gram-e:yes;}
span.GramE11 {mso-style-name:"";
	mso-gram-e:yes;}
div.MsoNormal3 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal3 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal3 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.SpellE5 {mso-style-name:"";
	mso-spl-e:yes;}
span.SpellE6 {mso-style-name:"";
	mso-spl-e:yes;}
span.GramE21 {mso-style-name:"";
	mso-gram-e:yes;}
p.MsoNormal21 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.GramE111 {mso-style-name:"";
	mso-gram-e:yes;}
span.GramE31 {mso-style-name:"";
	mso-gram-e:yes;}
span.SpellE51 {mso-style-name:"";
	mso-spl-e:yes;}
span.GramE4 {mso-style-name:"";
	mso-gram-e:yes;}
span.SpellE7 {mso-style-name:"";
	mso-spl-e:yes;}
div.MsoNormal4 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal4 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal4 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.GramE5 {mso-style-name:"";
	mso-gram-e:yes;}
span.SpellE8 {mso-style-name:"";
	mso-spl-e:yes;}
div.MsoNormal5 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal5 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal5 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
.style2 {
	font-size: 8pt
}
div.MsoNormal6 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal6 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal6 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.SpellE511 {mso-style-name:"";
	mso-spl-e:yes;}
div.MsoNormal7 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
li.MsoNormal7 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
p.MsoNormal7 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.SpellE512 {mso-style-name:"";
	mso-spl-e:yes;}
span.GramE6 {mso-style-name:"";
	mso-gram-e:yes;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:10.0pt;
	mso-para-margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:.5in'>

<div class=WordSection1>
  <p class=MsoNormal align=justify style='margin-top:2.75pt;margin-right:187.35pt;
margin-bottom:0in;margin-left:322.45pt;margin-bottom:.0001pt;text-align:center;
line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
none'>&nbsp;</p>
  <p class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:3.5pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:3.5pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
"Book Antiqua"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.7pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:34.0pt'>
  <td colspan=2 valign=top style='width:78.0pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:34.0pt'>
  <p class=MsoNormal style='margin-top:2.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:12.65pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua"'>BC 4.0</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td colspan=4 valign=top style='width:468.1pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:34.0pt'>
  <p class=MsoNormal style='margin-top:.2pt;margin-right:9.2pt;margin-bottom:
  0in;margin-left:156.45pt;margin-bottom:.0001pt;text-indent:-142.0pt;
  line-height:13.7pt;mso-line-height-rule:exactly;mso-pagination:none;
  mso-layout-grid-align:none;text-autospace:none'><b><span style='font-size:
  12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>PEMBERI<span
  style='letter-spacing:.05pt'>TA</span>HUAN PEMASUKAN BARANG ASAL <span
  style='letter-spacing:.05pt'>T</span><span style='letter-spacing:-.1pt'>E</span>MPAT
  LAIN DALAM DAERAH PABEAN KE TEMPAT<span style='letter-spacing:.05pt'> </span>PENIMBUNAN<span
  style='letter-spacing:.05pt'> </span>BERIKAT</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.15pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:13.15pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:12.55pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>HE<span
  style='letter-spacing:.05pt'>A</span>DER</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:30.85pt'>
  <td colspan=6 valign=top style='width:546.1pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:30.85pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:58.3pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>1<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE><span class=GramE>da<span
  style='letter-spacing:.05pt'>r</span>i</span></span><span class=GramE><span
  style='letter-spacing:-.15pt'> </span><span style='letter-spacing:.05pt'>.</span>.<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>...</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>NOMOR<span style='letter-spacing:.2pt'> </span><span
  class=GramE>PENGAJUAN <span
  style='font-weight:normal'>: <?php echo $r[nomor_pengajuan] ?></span></span></span></b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
    <o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.9pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.9pt'>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style="font-size:8.0pt;line-height:165%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">A.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;</span>KANTOR<span style='letter-spacing:
  -.35pt'> </span><span class=GramE1>PABEAN<span style='mso-tab-count:1'>&nbsp; </span>: <span style='letter-spacing:.1pt'><span style='mso-spacerun:yes'>&nbsp;</span></span><?php echo $r[kantor_pabean]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:165%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>B.<span style='mso-spacerun:yes'>  </span>JENIS TPB <span style='mso-tab-count:1'>    </span>
    : <?php echo $r[jenis_tpb]; ?></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span
  style='font-size:8.0pt;line-height:165%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>C.<span
  style='mso-spacerun:yes'>  </span>TUJUAN <span class=GramE>PENGIRIMAN<span
  style='letter-spacing:-.5pt'> </span>:</span><span style='mso-spacerun:yes'> <?php echo $r[tujuan_pengiriman]; ?></span></span><span
  style='font-size:12.0pt;line-height:165%;font-family:"Times New Roman","serif"'>
      <o:p></o:p>
    </span></p></td>
  <td colspan=3 valign=top style='width:260.9pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.9pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal7 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal7 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE512><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE512><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE512><span style='letter-spacing:.05pt'><?php echo $r[nomor_pendaftaran]?><Br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo IndonesiaTgl($r[tgl_pendaftaran]); ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
  </span></span></p>  
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:16.4pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:16.4pt'>
  <p class=MsoNormal style='margin-top:1.55pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>D.<span
  style='letter-spacing:-.3pt'> </span>DATA<span style='letter-spacing:-.25pt'>
  </span><span style='letter-spacing:.05pt'>P</span>E<span style='letter-spacing:
  .05pt'>M</span>BERIT<span style='letter-spacing:.05pt'>A</span>H<span
  style='letter-spacing:.05pt'>U</span>AN</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.45pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.45pt'>
  <p class=MsoNormal style='margin-top:2.15pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>PENGUSAHA<span style='letter-spacing:.05pt'> </span>TPB</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.45pt'>
  <p class=MsoNormal style='margin-top:2.15pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>PENGIRIM<span style='letter-spacing:.15pt'> </span>BARA<span
  style='letter-spacing:.1pt'>N</span>G</span></b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:61.55pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:61.55pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:64.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>1.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span><span
  class=GramE>NPWP<span style='mso-tab-count:1'>        </span>:<span
  style='mso-spacerun:yes'>  </span><?php echo $dataNpwp; ?></span>
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.95pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:63.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>2.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE>Nama</span><span style='mso-tab-count:1'>        </span>:<span
  style='letter-spacing:2.25pt'> </span><?php echo $dataNama; ?>
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.75pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:63.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>3.<span style='mso-spacerun:yes'>      </span><span
  class=SpellE>Alamat</span><span style='mso-tab-count:1'>       </span>:<span
  style='letter-spacing:2.25pt'> </span></span><span style="font-size:8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;"><?php echo $dataAlamat; ?> - <?php echo $dataKota; ?></span><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>.
      <o:p></o:p>
  </span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:6.75pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>4.<span
  style='mso-spacerun:yes'>      </span>No<span style='letter-spacing:-.1pt'> </span><span
  class=SpellE>i<span style='letter-spacing:.05pt'>z</span>in</span> TPB<span
  style='mso-spacerun:yes'>  </span><span style='letter-spacing:2.05pt'><span
  style='mso-spacerun:yes'> </span></span>:<span style='letter-spacing:2.25pt'>
  </span><?php echo $dataSkepKb; ?> tanggal <?php echo IndonesiaTgl($dataTglSkep); ?></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
  <o:p></o:p></span></p>  </td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:61.55pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>5.<span
  style='mso-spacerun:yes'>    </span><span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>NPWP/KTP/Passpo<span
  style='letter-spacing:-.1pt'>r</span>t/<span class=SpellE>Lainnya</span><span
  style='mso-spacerun:yes'>   </span><span style='letter-spacing:1.5pt'><span
  style='mso-spacerun:yes'> </span></span>:
    <o:p></o:p>
  </span><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'> <?php echo $r['npwp']; ?>
    <o:p></o:p>
    </span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:58.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>6.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE><span class=GramE>Nama</span></span><span class=GramE><span
  style='mso-tab-count:1'>     </span>:<span style='mso-spacerun:yes'>   
  </span><?php echo $r['nama']; ?></span>
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:57.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>7.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE><span class=GramE>Alamat</span></span><span class=GramE><span
  style='mso-tab-count:1'>    </span>:<span style='mso-spacerun:yes'>   
  </span><?php echo $r['alamat']; ?> - <?php echo $r['kota']; ?></span></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.15pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>DOKUMEN<span style='letter-spacing:.1pt'> </span>PELENGKAP<span
  style='letter-spacing:-.5pt'> </span>PABEAN</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:61.55pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:61.55pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:64.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>8.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'>Invoice/</span></span>Pa<span
  style='letter-spacing:.05pt'>ck</span>ing <span
  class=GramE6>Li<span style='letter-spacing:.05pt'>s</span>t<span
  style='mso-tab-count:1'>&nbsp; </span>: <span style='letter-spacing:2.2pt'><span
  style='mso-spacerun:yes'>&nbsp;</span></span><?php echo $r[no_invoice]; ?> tanggal&nbsp;<?php echo IndonesiaTgl($r[tgl_invoice]); ?></span> <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.95pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:63.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>9.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:1.8pt'><span style='mso-spacerun:yes'> </span></span>Kontrak<span style='mso-tab-count:1'>        </span>:<span
  style='letter-spacing:2.25pt'> </span><span class=GramE><?php echo $r[no_kontrak];?> tanggal <?php echo IndonesiaTgl($r[tgl_kontrak]); ?></span><span style='mso-tab-count:1'>&nbsp;</span>
    <o:p></o:p></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p></o:p>
    </span></p>  </td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:61.55pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>10. Surat Keputusan/Persetujuan<span
  style='mso-spacerun:yes'> </span>:</span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:58.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <?php echo  $r[no_skep]; ?> tanggal <?php echo IndonesiaTgl($r[tgl_skep]); ?>
    <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:57.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>11.<span style='mso-spacerun:yes'> Jenis/nomor/tanggal dokumen lainnya</span><span class=GramE> :<span style='mso-spacerun:yes'>   
  </span></span></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:8.25pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:57.0pt;mso-layout-grid-align:none;text-autospace:none'><span style="font-size:8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $r[jenis_doklain]; ?>:&nbsp;<?php echo  $r[doklain]; ?> &nbsp;tanggal <?php echo IndonesiaTgl($r[tgl_doklain]); ?>
      <o:p></o:p>
  </span></p></td>
 </tr>
 
 <tr style='mso-yfti-irow:9;height:13.4pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:13.4pt'>
  <p class=MsoNormal style='margin-top:2.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>DATA<span style='letter-spacing:.25pt'> </span>PENGANGKUTAN</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.6pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.6pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:293.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>12.<span style='mso-spacerun:yes'>  </span><span
  style='letter-spacing:.85pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE>Jenis</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>sarana</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>pen<span style='letter-spacing:-.05pt'>g</span>a<span
  style='letter-spacing:-.05pt'>n</span>gkut</span><span style='letter-spacing:
  -.2pt'> </span><span class=SpellE><span class=GramE>darat</span></span><span
  class=GramE><span style='letter-spacing:-.25pt'> </span>:</span><span
  style='letter-spacing:2.2pt'> </span><?php echo $r[jenis_pengangkut]; ?><span
  style='mso-tab-count:1'></span><span style='mso-spacerun:yes'>  </span> 13. <span style='letter-spacing:
  1.7pt'><span style='mso-spacerun:yes'> </span></span><span class=SpellE>Nomor</span> <span class=SpellE><span class=GramE>Poli<span
  style='letter-spacing:.05pt'>s</span>i</span></span><span class=GramE> : <?php echo $r[nomor_polisi]; ?></span>.</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
  <o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:13.7pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:13.7pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>DATA<span style='letter-spacing:.25pt'> </span>PERDAGA<span
  style='letter-spacing:-.05pt'>N</span>GAN</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:16.7pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:16.7pt'>
  <p class=MsoNormal style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>14.<span
  style='mso-spacerun:yes'>  </span><span style='letter-spacing:.85pt'><span
  style='mso-spacerun:yes'> </span></span><span class=SpellE>Harga</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE><span class=GramE>Penyerahan</span></span><span
  class=GramE> <span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>:</span> <span style='letter-spacing:
  2.2pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[harga_penyerahan]; ?></span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
  <o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:11.35pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:11.35pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>DATA<span style='letter-spacing:.25pt'> </span>PENGEMAS</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:30.0pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:30.0pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:89.0pt 295.0pt 374.0pt;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>15.<span style='mso-spacerun:yes'> 
  </span><span style='letter-spacing:.85pt'><span
  style='mso-spacerun:yes'> </span></span><span class=SpellE><span
  style='letter-spacing:.05pt'>J</span>enis</span><span style='letter-spacing:
  -.05pt'> </span><span class=SpellE><span class=GramE>Kema<span
  style='letter-spacing:.05pt'>s</span>an</span></span><span class=GramE><span
  style='mso-tab-count:1'>       </span>: <span style='letter-spacing:2.2pt'><span
  style='mso-spacerun:yes'> </span></span><?php echo $r[jenis_kemasan];?></span><span
  style='mso-tab-count:1'>                 </span>17. <span style='letter-spacing:
  1.7pt'><span style='mso-spacerun:yes'> </span></span><span class=SpellE><span
  style='letter-spacing:.05pt'>J</span>umlah</span><span style='letter-spacing:
  -.05pt'> </span><span class=SpellE><span class=GramE>Kema<span
  style='letter-spacing:.05pt'>s</span>an</span></span><span class=GramE><span
  style='mso-tab-count:1'>    </span>:<span style='mso-spacerun:yes'>  </span><span
  style='letter-spacing:-.05pt'><span style='mso-spacerun:yes'> </span></span><?PHP echo $r[jumlah_kemasan]; ?></span>
  <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:88.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>16.<span style='mso-spacerun:yes'>  </span><span
  style='letter-spacing:.85pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE>Merek</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE><span class=GramE>Kema<span style='letter-spacing:.05pt'>s</span>an</span></span><span
  class=GramE><span style='mso-tab-count:1'>     </span>: <span
  style='letter-spacing:2.2pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[merek_kemasan]; ?></span></span><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'>
    <o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:11.35pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:11.35pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:8.95pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>DATA<span style='letter-spacing:.25pt'> </span>BARANG</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:15.8pt'>
  <td colspan=6 valign=top style='width:546.1pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:15.8pt'>
  <p class=MsoNormal style='margin-top:1.85pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:209.0pt 381.0pt;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>18.<span style='mso-spacerun:yes'> 
  </span><span style='letter-spacing:.85pt'><span
  style='mso-spacerun:yes'> </span></span>Volume<span style='letter-spacing:
  -.3pt'> </span>(m<span style='letter-spacing:-.15pt'> </span>3<span
  class=GramE>) : </span><?php echo $r[volume]; ?><span
  style='mso-tab-count:1'>          </span>19. <span style='letter-spacing:
  1.75pt'><span style='mso-spacerun:yes'> </span></span><span class=SpellE>Berat</span><span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>Kotor</span><span
  style='letter-spacing:-.15pt'> </span>(Kg<span class=GramE>)<span
  style='letter-spacing:-.15pt'> </span>:</span><span style='letter-spacing:
  2.25pt'> </span><?php echo $r[brutto]; ?> <span style='mso-tab-count:1'>  </span>20.
  <span style='letter-spacing:1.7pt'><span style='mso-spacerun:yes'> </span></span><span
  class=SpellE>Berat</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>Ber<span style='letter-spacing:.05pt'>s</span>ih</span><span
  style='letter-spacing:-.15pt'> </span>(K<span style='letter-spacing:.1pt'>g</span><span
  class=GramE>)<span style='letter-spacing:-.15pt'> </span>:</span> <span
  style='letter-spacing:.05pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[netto]; ?></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
  <o:p></o:p></span></p>  </td>
  <?php
  $sql = mysql_query("select barang.kd_barang,barang.nm_barang,tbl_bc40_detail.*,count(tbl_bc40_detail.kode)as jml from barang,tbl_bc40_detail where tbl_bc40_detail.nomor='$r[nomor]' and tbl_bc40_detail.kode=barang.kd_barang
                      group by tbl_bc40_detail.nomor, tbl_bc40_detail.kode, tbl_bc40_detail.jumlah,tbl_bc40_detail.satuan,tbl_bc40_detail.netto_detail,tbl_bc40_detail.volume_detail,tbl_bc40_detail.harga_detail ");
  $jml = mysql_num_rows($sql);
  $rbarang = mysql_fetch_array($sql);
  ?>
 </tr>
 <tr style='mso-yfti-irow:17;height:54.9pt'>
  <td width=40 valign=top style='width:28.4pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:54.9pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:8.75pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;text-indent:1.75pt;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;line-height:115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>21. No</span><span style='font-size:12.0pt;line-height:115%;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:8.75pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;text-indent:1.75pt;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><?php if($jml==2){
        
  }?>&nbsp;</p></td>
  <td colspan=3 valign=top style='width:269.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:54.9pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>22.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.45pt;margin-right:9.0pt;margin-bottom:
  0in;margin-left:8.45pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Uraian</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>jumlah</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>dan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.15pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>j<span
  style='letter-spacing:.1pt'>e</span>nis</span></span><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>
  <span class=SpellE>barang</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>secara</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>lengkap</span>,<span style='letter-spacing:1.9pt'> </span><span
  class=SpellE>Kode</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>Barang</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>merk</span>,<span style='letter-spacing:-.05pt'> </span><span
  class=SpellE>tipe</span>,<span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>ukuran</span>,<span style='letter-spacing:-.25pt'> </span></span></p>
  <p class=MsoNormal style='margin-top:1.45pt;margin-right:9.0pt;margin-bottom:
  0in;margin-left:8.45pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><span
  class=SpellE>dan</span><span style='letter-spacing:-.15pt'> </span><span
  class=SpellE><span style='letter-spacing:.05pt'>s</span>pe<span
  style='letter-spacing:.05pt'>s</span>ifi<span style='letter-spacing:.05pt'>k</span>a<span
  style='letter-spacing:.05pt'>s</span>i</span> lain</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p>
  </span></p></td>
  <td width=193 valign=top style='width:134.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:54.9pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>23.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span><span class=SpellE>Jumlah</span><span
  style='letter-spacing:-.25pt'> </span>&amp;<span style='letter-spacing:-.05pt'>
  </span><span class=SpellE>Jenis</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>Satuan</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span><span class=SpellE>Berat</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>Ber<span
  style='letter-spacing:.05pt'>s</span>ih</span><span style='letter-spacing:
  -.15pt'> </span>(Kg)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span>Volume<span style='letter-spacing:-.3pt'>
  </span>(m<span style='letter-spacing:.1pt'>3</span>)</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td width=155 valign=top style='width:113.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:54.9pt'>
  <p class=MsoNormal style='margin-top:1.8pt;margin-right:0in;margin-bottom:
  0in;margin-left:8.55pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>24.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Harga</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .3pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Penyerahan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.45pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>(<span
  class=SpellE>Rp</span>)</span><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:138.05pt'>
  <td width=40 valign=top style='width:28.4pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:138.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p>
  </span><span class="style1"><?php for($i=1;$i<=$jml;$i++){ echo "&nbsp;".$i."<br><br>"; }?></span></p>  </td>
  <td colspan=3 valign=top style='width:269.35pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:138.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
  <o:p> &nbsp;</o:p>
  </span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
  </span><span style="font-size:8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;"><?php 
  $barang = mysql_query("select barang.kd_barang,barang.nm_barang,tbl_bc40_detail.* from tbl_bc40_detail,barang where tbl_bc40_detail.nomor='$r[nomor]' and tbl_bc40_detail.kode=barang.kd_barang");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rbarang[kode]&nbsp;&nbsp;&nbsp;$rbarang[nm_barang]<br><br>";
  }
  ?></span></p>  </td>
  <td width=193 valign=top style='width:134.55pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:138.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p>
  </span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php 
  $barang = mysql_query("select * from tbl_bc40_detail where nomor='$r[nomor]' ");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;$rbarang[jumlah]&nbsp;$rbarang[satuan]&nbsp;&nbsp;$rbarang[netto_detail]&nbsp;Kg&nbsp;$rbarang[volume_detail]&nbsp;m3<br><br>";
  }
  ?><span
  style='letter-spacing:.45pt'> </span>
  <o:p></o:p>
  </span></p>  </td>
  <td width=155 valign=top style='width:113.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:138.05pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p>
  </span><span class="MsoNormal" style="margin-top:1.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><span class=SpellE4><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><?php
  $barang = mysql_query("select * from tbl_bc40_detail where nomor='$r[nomor]'");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. ".number_format($rbarang[harga_detail],2,',','.')."<br><br>";
  }
  ?></span></span><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p></o:p>
  </span></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:14.2pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>G.<span style='letter-spacing:.4pt'> </span>UNTUK<span
  style='letter-spacing:-.3pt'> </span>PEJABAT<span style='letter-spacing:-.4pt'>
  </span>BEA<span style='letter-spacing:-.15pt'> </span>DAN<span
  style='letter-spacing:-.2pt'> </span>CUKAI</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>E. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANG<span style='letter-spacing:.1pt'>A</span>N<span
  style='letter-spacing:-.25pt'> </span>PENGUSAHA<span style='letter-spacing:
  -.5pt'> </span>TPB</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:20;mso-yfti-lastrow:yes;height:70.55pt'>
  <td colspan=3 valign=top style='width:285.2pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:70.55pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:6.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:19.95pt;margin-bottom:
  0in;margin-left:127.35pt;margin-bottom:.0001pt;line-height:131%;mso-pagination:
  none;tab-stops:149.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  class=SpellE><span class=GramE><span style='font-size:8.0pt;line-height:131%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Nama</span></span></span><span
  class=GramE><span style='font-size:8.0pt;line-height:131%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'> <span style='letter-spacing:.7pt'><span
  style='mso-spacerun:yes'> </span></span>:</span></span><span
  style='font-size:8.0pt;line-height:131%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span style='mso-spacerun:yes'>   
  </span><?php echo $r[nama_petugas]; ?></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:19.95pt;margin-bottom:
  0in;margin-left:127.35pt;margin-bottom:.0001pt;line-height:131%;mso-pagination:
  none;tab-stops:149.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;line-height:131%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span class=GramE>NIP<span
  style='mso-tab-count:1'>     </span>:<span style='mso-spacerun:yes'>  </span><span
  style='letter-spacing:.05pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[nip_petugas]; ?></span></span><span
  style='font-size:12.0pt;line-height:131%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
  </span></p></td>
  <td colspan=3 valign=top style='width:260.9pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:70.55pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:23.5pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Dengan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>ini</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.1pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>saya</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.15pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>m<span
  style='letter-spacing:-.05pt'>e</span>nyatakan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.05pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>bertangg<span style='letter-spacing:-.05pt'>u</span>ng</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>jawab</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.2pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>atas</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.15pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>kebe<span style='letter-spacing:-.05pt'>n</span>aran</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> <span class=SpellE>hal-<span class=GramE>hal</span></span><span
  class=GramE> <span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span></span></span></p>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:23.5pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=GramE>yang</span><span style='letter-spacing:
  -.2pt'> </span><span class=SpellE>diberitahukan</span> <span class=SpellE>dalam</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>pemberitahuan</span><span
  style='letter-spacing:-.55pt'> </span><span class=SpellE>pab<span
  style='letter-spacing:-.05pt'>e</span>an</span><span style='letter-spacing:
  -.15pt'> </span><span class=SpellE>ini</span>.
    <o:p></o:p>
  </span></p>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:23.5pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  <p align="center" class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  6.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:6.0pt;font-family:"Times New Roman","serif"'>
  <o:p>&nbsp;</o:p></span><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Bekasi , <span class=GramE>   <?php $tgl = date('d M Y'); echo $tgl;?></span>
      <o:p></o:p></span></p>
  <p align="center" class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:41.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  <p align="center" class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:41.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  <p align="center" class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:8.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p align="center" class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>
    <o:p>&nbsp;</o:p>
</span><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>(<span
  style='letter-spacing:.05pt'><?php echo $r[nama_pengusaha]; ?></span> )</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
    <o:p></o:p>
    </span></p>  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=40 style='border:none'></td>
  <td width=69 style='border:none'></td>
  <td width=333 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=193 style='border:none'></td>
  <td width=155 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='margin-top:2.8pt;margin-right:0in;margin-bottom:0in;
margin-left:11.4pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
class=GramE><b><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
mso-bidi-font-family:"Arial Narrow"'>Rangkap</span></b></span></span><span
class=GramE><b><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
mso-bidi-font-family:"Arial Narrow"'> <span style='letter-spacing:.6pt'><span
style='mso-spacerun:yes'> </span></span><span class=SpellE>ke</span></span></b></span><b><span
style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
"Arial Narrow";letter-spacing:-.1pt'> </span></b><b><span style='font-size:
8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-1<span
style='letter-spacing:-.05pt'> </span>/<span style='letter-spacing:-.05pt'> </span>2
/ 3<span style='letter-spacing:-.05pt'> </span>: Kantor<span style='letter-spacing:
-.25pt'> </span><span class=SpellE>Pabean</span><span style='letter-spacing:
-.3pt'> </span>/<span class=SpellE>Pengusa<span style='letter-spacing:-.05pt'>h</span>a</span><span
style='letter-spacing:-.35pt'> </span>TPB<span style='letter-spacing:-.15pt'> </span>/<span
style='letter-spacing:2.25pt'> </span><span class=SpellE>Pengirim</span><span
style='letter-spacing:-.3pt'> </span><span class=SpellE>Barang</span></span></b><span
style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
"Arial Narrow"'><o:p></o:p></span></p>

</div>

<span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Arial Narrow";
mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>
<?PHP
if($jml>16){
?>

<div class=WordSection2>

<p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:4.0pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:4.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
"Arial Narrow"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.7pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:.6in'>
  <td colspan=2 valign=top style='width:78.0pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:.6in'>
  <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:7.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:12.65pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua"'>BC 4.0</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=3 valign=top style='width:468.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:.6in'>
  <p class=MsoNormal align=center style='margin-top:1.9pt;margin-right:166.85pt;
  margin-bottom:0in;margin-left:166.9pt;margin-bottom:.0001pt;text-align:center;
  line-height:110%;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><b><span style='font-size:16.0pt;line-height:110%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>LEMBAR<span style='letter-spacing:-1.4pt'>
  </span>LANJUTAN DATA BARANG</span></b><span style='font-size:12.0pt;
  line-height:110%;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.7pt'>
  <td colspan=5 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:13.7pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:12.6pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>HE<span
  style='letter-spacing:.05pt'>A</span>DER</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:30.85pt'>
  <td colspan=5 valign=top style='width:546.5pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:30.85pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:5.2pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>...<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>.<span
  style='letter-spacing:-.1pt'> </span><span class=SpellE><span class=GramE>dari</span></span><span
  class=GramE><span style='letter-spacing:-.1pt'> </span><span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>..<span
  style='letter-spacing:.05pt'>.</span>..</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>NOMOR<span style='letter-spacing:.2pt'> </span><span
  class=GramE2>PENGAJUAN <span
  style='font-weight:normal'>: <?php echo $r[nomor_pengajuan] ?></span></span></span></b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
  <o:p></o:p>
  </span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.95pt'>
  <td colspan=3 valign=top style='width:283.65pt;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.95pt'>
    <p class=MsoNormal2 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style="font-size:8.0pt;line-height:165%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">A.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;</span>KANTOR<span style='letter-spacing:
  -.35pt'> </span><span class=GramE11>PABEAN<span style='mso-tab-count:1'>&nbsp; </span>: <span style='letter-spacing:.1pt'><span style='mso-spacerun:yes'>&nbsp;</span></span><?php echo $r[kantor_pabean]; ?></span></span></p>
    <p class=MsoNormal2 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:165%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>B.<span style='mso-spacerun:yes'>&nbsp;&nbsp;</span>JENIS TPB <span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp; </span> : <?php echo $r[jenis_tpb]; ?></span></p>
    <p class=MsoNormal2 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span
  style='font-size:8.0pt;line-height:165%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>C.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;</span>TUJUAN <span class=GramE3>PENGIRIMAN<span
  style='letter-spacing:-.5pt'> </span>:</span><span style='mso-spacerun:yes'>&nbsp;<?php echo $r[tujuan_pengiriman]; ?></span></span><span
  style='font-size:12.0pt;line-height:165%;font-family:"Times New Roman","serif"'>
      <o:p></o:p>
    </span></p>
    <p class=MsoNormal style='margin-top:.05pt;margin-right:44.05pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span
  style='font-size:12.0pt;line-height:165%;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:262.85pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.95pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal6 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal6 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE511><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE511><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE511><span style='letter-spacing:.05pt'><?php echo $r[nomor_pendaftaran]?><Br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo IndonesiaTgl($r[tgl_pendaftaran]); ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
</span></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.6pt'>
  <td width=40 valign=top style='width:28.4pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:51.6pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:10.45pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:115%;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;line-height:115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>21. No</span><span style='font-size:12.0pt;line-height:115%;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:255.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:51.6pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>22.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:9.4pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Uraian</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>jumlah</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>dan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.15pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>j<span
  style='letter-spacing:.1pt'>e</span>nis</span></span><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>
  <span class=SpellE>barang</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>secara</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>lengkap</span>,<span style='letter-spacing:1.9pt'> </span><span
  class=SpellE>kode</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>baran<span style='letter-spacing:-.05pt'>g</span></span>,<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE>merk</span>,<span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>tipe</span>,<span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>ukuran</span>,<span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>dan</span> <span
  class=SpellE>spesifikasi</span><span style='letter-spacing:-.4pt'> </span>lain</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=199 valign=top style='width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:51.6pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>23.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span><span class=SpellE>Jumlah</span><span
  style='letter-spacing:-.25pt'> </span>&amp;<span style='letter-spacing:-.05pt'>
  </span><span class=SpellE>Jenis</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>Satuan</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span><span class=SpellE>Berat</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>Ber<span
  style='letter-spacing:.05pt'>s</span>ih</span><span style='letter-spacing:
  -.15pt'> </span>(Kg)<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span>Volume<span style='letter-spacing:-.3pt'>
  </span>(m<span style='letter-spacing:.1pt'>3</span>)</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=209 valign=top style='width:114.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:51.6pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>24.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Harga</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .3pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Penyerahan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.45pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>(<span
  class=SpellE>Rp</span>)</span><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:402.85pt'>
  <td width=40 valign=top style='width:28.4pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:402.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p><span style="font-size:
  8.0pt;line-height:115%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;"><?php for($i=1;$i<=$jml;$i++){ echo "&nbsp;".$i."<br><br><br><br><br>"; }?>
    </span></o:p>
  </span></p>
  </td>
  <td colspan=2 valign=top style='width:255.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:402.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p><span style="font-size:8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;"> <?php 
  $barang = mysql_query("select barang.kd_barang,barang.nm_barang,tbl_bc40_detail.* from tbl_bc40_detail,barang where tbl_bc40_detail.nomor='$r[nomor]' and tbl_bc40_detail.kode=barang.kd_barang");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rbarang[kode];&nbsp;&nbsp;&nbsp;$rbarang[nm_barang];<br><Br><br><br>";
  }
  ?>
  </span>&nbsp;</o:p>
  </span></p>
  </td>
  <td width=199 valign=top style='width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:402.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p><span class="MsoNormal" style="margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><?php
  $barang = mysql_query("select * from tbl_bc40_detail where nomor='$r[nomor]'");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rbarang[jumlah]<br><Br><br>";
  }
  ?>
</span>
          <o:p></o:p>
  </span>&nbsp;</o:p></span></p>
  </td>
  <td width=209 valign=top style='width:114.05pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:402.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p><span class="MsoNormal" style="margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><?php
  $barang = mysql_query("select * from tbl_bc40_detail where nomor='$r[nomor]'");
  while($rbarang = mysql_fetch_array($barang)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. ".number_format($rbarang[harga_detail],2,',','.')."<br><Br><br>";
  }
  ?></span>
          <o:p></o:p>
  </span>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.15pt'>
  <td colspan=5 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:278.3pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>E. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANG<span style='letter-spacing:.1pt'>A</span>N<span
  style='letter-spacing:-.25pt'> </span>PENGUSAHA<span style='letter-spacing:
  -.5pt'> </span>TPB</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:77.6pt'>
  <td colspan=5 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:77.6pt'>
  <p class=MsoNormal style='margin-top:2.8pt;margin-right:35.9pt;margin-bottom:
  0in;margin-left:278.3pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Dengan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>ini</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.1pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>saya</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.15pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>m<span
  style='letter-spacing:-.05pt'>e</span>nyatakan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.05pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>bertangg<span style='letter-spacing:-.05pt'>u</span>ng</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>jawab</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.2pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>atas</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.15pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>kebe<span style='letter-spacing:-.05pt'>n</span>aran</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> <span class=SpellE>hal-<span class=GramE>hal</span></span><span
  class=GramE> <span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>yang</span><span style='letter-spacing:
  -.2pt'> </span><span class=SpellE>diberitahukan</span> <span class=SpellE>dalam</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>pemberitahuan</span><span
  style='letter-spacing:-.55pt'> </span><span class=SpellE>pab<span
  style='letter-spacing:-.05pt'>e</span>an</span><span style='letter-spacing:
  -.15pt'> </span><span class=SpellE>ini</span>.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  6.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:314.3pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bekasi ,  <span class=SpellE>Tg<span
  style='letter-spacing:.05pt'>l</span></span><span class=GramE> <?php echo $tgl; ?></span>
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:8.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:78.75pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>( <span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha]; ?></span>)</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
  <o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=40 style='border:none'></td>
  <td width=66 style='border:none'></td>
  <td width=275 style='border:none'></td>
  <td width=199 style='border:none'></td>
  <td width=209 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='margin-top:2.9pt;margin-right:0in;margin-bottom:0in;
margin-left:11.4pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif"'>Rang<span
style='letter-spacing:-.05pt'>k</span><span style='letter-spacing:.05pt'>a</span>p</span></b></span><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif";letter-spacing:
2.35pt'> </span></b><span class=SpellE><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'>ke</span></b></span><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif";letter-spacing:
-.1pt'> </span></b><b><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'>-1<span
style='letter-spacing:-.1pt'> </span>/<span style='letter-spacing:.1pt'> </span>2<span
style='letter-spacing:-.05pt'> </span>/ <span class=GramE>3<span
style='letter-spacing:-.05pt'> </span>:</span> Kantor<span style='letter-spacing:
-.25pt'> </span><span class=SpellE>Pab<span style='letter-spacing:.05pt'>e</span>an</span><span
style='letter-spacing:-.15pt'> </span>/<span class=SpellE>Pengusaha</span><span
style='letter-spacing:-.5pt'> </span><span style='letter-spacing:.1pt'>T</span>PB<span
style='letter-spacing:-.05pt'> </span>/ <span style='letter-spacing:.05pt'><span
style='mso-spacerun:yes'> </span></span><span class=SpellE>Pengir<span
style='letter-spacing:.05pt'>i</span>m</span><span style='letter-spacing:-.35pt'>
</span><span class=SpellE>B<span style='letter-spacing:.1pt'>a</span>rang</span></span></b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>

</div>
<?php 
 }else{echo ""; }
?>
<span style='font-size:8.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<?php
if($jml_document>1){
?>
<div class=WordSection3>

<p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:4.0pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:4.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.7pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:.6in'>
  <td colspan=2 valign=top style='width:70.95pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:.6in'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:21.6pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua";position:relative;top:-.5pt;mso-text-raise:.5pt'>BC 4.0</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=4 valign=top style='width:475.55pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:.6in'>
  <p class=MsoNormal style='margin-top:1.9pt;margin-right:128.6pt;margin-bottom:
  0in;margin-left:131.45pt;margin-bottom:.0001pt;text-indent:40.8pt;line-height:
  110%;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:16.0pt;line-height:110%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>LEMBAR<span style='letter-spacing:-1.4pt'>
  </span>LANJUTAN DOKUMEN PELENGKAP PABEAN</span></b><span style='font-size:
  12.0pt;line-height:110%;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.7pt'>
  <td colspan=6 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:13.7pt'>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:12.6pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>HE<span
  style='letter-spacing:.05pt'>A</span>DER</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:30.85pt'>
  <td colspan=6 valign=top style='width:546.5pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:30.85pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:5.2pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>...<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>.<span
  style='letter-spacing:-.1pt'> </span><span class=SpellE><span class=GramE>dari</span></span><span
  class=GramE><span style='letter-spacing:-.1pt'> </span><span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>..<span
  style='letter-spacing:.05pt'>.</span>..</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>NOMOR<span style='letter-spacing:.2pt'> </span><span
  class=GramE21>PENGAJUAN <span
  style='font-weight:normal'>: <?php echo $r[nomor_pengajuan] ?></span></span></span></b><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
  <o:p></o:p>
  </span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.95pt'>
  <td colspan=4 valign=top style='width:283.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.95pt'>
    <p class=MsoNormal21 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style="font-size:8.0pt;line-height:165%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">A.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;</span>KANTOR<span style='letter-spacing:
  -.35pt'> </span><span class=GramE111>PABEAN<span style='mso-tab-count:1'>&nbsp; </span>: <span style='letter-spacing:.1pt'><span style='mso-spacerun:yes'>&nbsp;</span></span><?php echo $r[kantor_pabean]; ?></span></span></p>
    <p class=MsoNormal21 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:165%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>B.<span style='mso-spacerun:yes'>&nbsp;&nbsp;</span>JENIS TPB <span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp; </span> : <?php echo $r[jenis_tpb]; ?></span></p>
    <p class=MsoNormal21 style='margin-top:.05pt;margin-right:45.65pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-align:justify;line-height:
  165%;mso-pagination:none;tab-stops:94.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span
  style='font-size:8.0pt;line-height:165%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>C.<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;</span>TUJUAN <span class=GramE31>PENGIRIMAN<span
  style='letter-spacing:-.5pt'> </span>:</span><span style='mso-spacerun:yes'>&nbsp;<?php echo $r[tujuan_pengiriman]; ?></span></span><span
  style='font-size:12.0pt;line-height:165%;font-family:"Times New Roman","serif"'>
      <o:p></o:p>
    </span><span
  style='font-size:12.0pt;line-height:165%;font-family:"Times New Roman","serif"'>
      <o:p></o:p>
    </span></p>
    </td>
  <td colspan=2 valign=top style='width:3.65in;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.95pt'>
  <p class=MsoNormal style='margin-top:.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE51><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE51><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE51><span style='letter-spacing:.05pt'><?php echo $r[nomor_pengajuan]?><Br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[tgl_pendaftaran]; ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
    <o:p></o:p>
  </span></span></p></td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.9pt'>
  <td width=50 valign=top style='width:35.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:21.9pt'>
  <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:10.1pt;
  margin-bottom:0in;margin-left:11.75pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>NO</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:212.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.9pt'>
  <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:76.65pt;
  margin-bottom:0in;margin-left:78.3pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>JENIS DOKUMEN</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:184.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.9pt'>
  <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:76.8pt;
  margin-bottom:0in;margin-left:78.55pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>NOMOR</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=207 valign=top style='width:114.1pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.9pt'>
  <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:38.6pt;
  margin-bottom:0in;margin-left:40.4pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>TANGGAL</span><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:411.3pt'>
  <td width=50 valign=top style='width:35.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p><span class="MsoNormal" style="margin-top:0in;margin-right:10.1pt;
  margin-bottom:0in;margin-left:11.75pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none"><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><?PHP
  for($i=1;$i<=$jml_document;$i++){
  		echo $i."<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  }
  ?></span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
    <o:p></o:p>
  </span></span>&nbsp;</o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:212.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'><span style="font-size:8.0pt;line-height:165%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;
  mso-bidi-font-family:&quot;Arial Narrow&quot;"></span><span class="style1">
  <?php
  $document = mysql_query("select * from detail_lamp_document where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($rdocument = mysql_fetch_array($document)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rdocument[jenis_document]."<br><br><br><br>";
  }
  ?>
    </span>
    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td colspan=2 valign=top style='width:184.3pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p><span style="font-size:8.0pt;line-height:165%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;
  mso-bidi-font-family:&quot;Arial Narrow&quot;">
  <?php
  $document = mysql_query("select * from detail_lamp_document where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($rdocument = mysql_fetch_array($document)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rdocument[nomor_document]."<BR><br><br><br>";
  }
  ?>
  </span>&nbsp;</o:p></span></p>
  </td>
  <td width=207 valign=top style='width:114.1pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p><span style="font-size:8.0pt;line-height:165%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;
  mso-bidi-font-family:&quot;Arial Narrow&quot;">
  <?php
  $document = mysql_query("select * from detail_lamp_document where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($rdocument = mysql_fetch_array($document)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rdocument[tgl_document]."<BR><br><br><br>";
  }
  ?>
  </span>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.2pt'>
  <td colspan=6 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:278.35pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>E. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANG<span style='letter-spacing:.1pt'>A</span>N<span
  style='letter-spacing:-.25pt'> </span>PENGUSAHA<span style='letter-spacing:
  -.5pt'> </span>TPB</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:77.6pt'>
  <td colspan=6 valign=top style='width:546.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:77.6pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:35.85pt;margin-bottom:
  0in;margin-left:278.35pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Dengan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>ini</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.1pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>saya</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.15pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>m<span
  style='letter-spacing:-.05pt'>e</span>nyatakan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.05pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>bertangg<span style='letter-spacing:-.05pt'>u</span>ng</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>jawab</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.2pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>atas</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.15pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>kebe<span style='letter-spacing:-.05pt'>n</span>aran</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> <span class=SpellE>hal-<span class=GramE>hal</span></span><span
  class=GramE> <span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>yang</span><span style='letter-spacing:
  -.2pt'> </span><span class=SpellE>diberitahukan</span> <span class=SpellE>dalam</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>pemberitahuan</span><span
  style='letter-spacing:-.55pt'> </span><span class=SpellE>pab<span
  style='letter-spacing:-.05pt'>e</span>an</span><span style='letter-spacing:
  -.15pt'> </span><span class=SpellE>ini</span>.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  6.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal4 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:314.3pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bekasi , <span class=SpellE8>Tg<span
  style='letter-spacing:.05pt'>l</span></span><span class=GramE5> <?php echo $tgl; ?></span>
        <o:p></o:p>
  </span></p>
  <p class=MsoNormal4 style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:8.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Times New Roman","serif"'>
    <o:p>&nbsp;</o:p>
  </span></p>
  <p class=MsoNormal4 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>
    <o:p>&nbsp;</o:p>
  </span></p>
  <p class=MsoNormal4 align=right style='margin-top:0in;margin-right:78.75pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>(<span style='letter-spacing:.4pt'> </span><span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha]; ?></span> )</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p></o:p>
  </span></p>  
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=50 style='border:none'></td>
  <td width=47 style='border:none'></td>
  <td width=237 style='border:none'></td>
  <td width=47 style='border:none'></td>
  <td width=200 style='border:none'></td>
  <td width=207 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='margin-top:2.9pt;margin-right:0in;margin-bottom:0in;
margin-left:11.4pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif"'>Rang<span
style='letter-spacing:-.05pt'>k</span><span style='letter-spacing:.05pt'>a</span>p</span></b></span><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif";letter-spacing:
2.35pt'> </span></b><span class=SpellE><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'>ke</span></b></span><b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif";letter-spacing:
-.1pt'> </span></b><b><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'>-1<span
style='letter-spacing:-.1pt'> </span>/<span style='letter-spacing:.1pt'> </span>2<span
style='letter-spacing:-.05pt'> </span>/ <span class=GramE>3<span
style='letter-spacing:-.05pt'> </span>:</span> Kantor<span style='letter-spacing:
-.25pt'> </span><span class=SpellE>Pab<span style='letter-spacing:.05pt'>e</span>an</span><span
style='letter-spacing:-.15pt'> </span>/<span class=SpellE>Pengusaha</span><span
style='letter-spacing:-.5pt'> </span><span style='letter-spacing:.1pt'>T</span>PB<span
style='letter-spacing:-.05pt'> </span>/ <span style='letter-spacing:.05pt'><span
style='mso-spacerun:yes'> </span></span><span class=SpellE>Pengir<span
style='letter-spacing:.05pt'>i</span>m</span><span style='letter-spacing:-.35pt'>
</span><span class=SpellE>B<span style='letter-spacing:.1pt'>a</span>rang</span></span></b><span
style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<span style='font-size:8.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

</div>
<?php
}
?>
<span style='font-size:8.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection4>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>
