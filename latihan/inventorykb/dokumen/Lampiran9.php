<?php
include "koneksi.php";
$sql = mysql_query("select * from lampiran9 where nomor_pengajuan='$_GET[id]'");
$r = mysql_fetch_array($sql);
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=lampiran8.doc");

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
<link rel=File-List href="Lampiran%20IX_files/filelist.xml">
<link rel=Edit-Time-Data href="Lampiran%20IX_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>SAWITRI-NOTEBOOK</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>SAWITRI-NOTEBOOK</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>1</o:TotalTime>
  <o:Created>2013-03-29T03:00:00Z</o:Created>
  <o:LastSaved>2013-03-29T03:00:00Z</o:LastSaved>
  <o:Pages>4</o:Pages>
  <o:Words>1284</o:Words>
  <o:Characters>7321</o:Characters>
  <o:Company>KINOSENTRA</o:Company>
  <o:Lines>61</o:Lines>
  <o:Paragraphs>17</o:Paragraphs>
  <o:CharactersWithSpaces>8588</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="Lampiran%20IX_files/themedata.thmx">
<link rel=colorSchemeMapping href="Lampiran%20IX_files/colorschememapping.xml">
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
	{font-family:"Bookman Old Style";
	panose-1:2 5 6 4 5 5 5 2 2 4;
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
@font-face
	{font-family:"Book Antiqua";
	panose-1:2 4 6 2 5 3 5 3 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
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
	margin:38.0pt 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 not-even 239.55pt 76.65pt 242.8pt;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection3
	{page:WordSection3;}
@page WordSection4
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 not-even 236.05pt 90.35pt 232.6pt;
	mso-paper-source:0;}
div.WordSection4
	{page:WordSection4;}
@page WordSection5
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection5
	{page:WordSection5;}
@page WordSection6
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:4 not-even 111.95pt 33.55pt 155.0pt 18.8pt 48.75pt 34.55pt 156.4pt;
	mso-paper-source:0;}
div.WordSection6
	{page:WordSection6;}
@page WordSection7
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 not-even 240.5pt 90.95pt 227.55pt;
	mso-paper-source:0;}
div.WordSection7
	{page:WordSection7;}
@page WordSection8
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection8
	{page:WordSection8;}
@page WordSection9
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 not-even 240.15pt 91.3pt 227.55pt;
	mso-paper-source:0;}
div.WordSection9
	{page:WordSection9;}
@page WordSection10
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection10
	{page:WordSection10;}
@page WordSection11
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:3 not-even 339.45pt 27.95pt 97.1pt 43.15pt 51.35pt;
	mso-paper-source:0;}
div.WordSection11
	{page:WordSection11;}
@page WordSection12
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection12
	{page:WordSection12;}
@page WordSection13
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:5 not-even 16.75pt 22.3pt 9.2pt 5.05pt 218.6pt 17.2pt 71.15pt 76.6pt 122.15pt;
	mso-paper-source:0;}
div.WordSection13
	{page:WordSection13;}
@page WordSection14
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection14
	{page:WordSection14;}
@page WordSection15
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:2 not-even 274.0pt 53.25pt 231.75pt;
	mso-paper-source:0;}
div.WordSection15
	{page:WordSection15;}
@page WordSection16
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection16
	{page:WordSection16;}
@page WordSection17
	{size:8.5in 14.0in;
	margin:.75in 22.0pt 14.0pt 31.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:3 not-even 218.7pt 68.7pt 107.55pt 41.35pt 122.7pt;
	mso-paper-source:0;}
div.WordSection17
	{page:WordSection17;}
@page WordSection18
	{size:8.5in 14.0in;
	margin:67.0pt 21.0pt 14.0pt 26.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection18
	{page:WordSection18;}
@page WordSection19
	{size:8.5in 14.0in;
	margin:87.0pt 21.0pt 14.0pt 26.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection19
	{page:WordSection19;}
@page WordSection20
	{size:8.5in 14.0in;
	margin:87.0pt 21.0pt 14.0pt 26.0pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection20
	{page:WordSection20;}
.style2 {font-size: 8pt
}
p.MsoNormal71 {mso-style-unhide:no;
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
span.SpellE51211 {mso-style-name:"";
	mso-spl-e:yes;}
p.MsoNormal711 {mso-style-unhide:no;
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
span.SpellE512111 {mso-style-name:"";
	mso-spl-e:yes;}
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
span.SpellE1 {mso-style-name:"";
	mso-spl-e:yes;}
p.MsoNormal7111 {mso-style-unhide:no;
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
span.SpellE5121111 {mso-style-name:"";
	mso-spl-e:yes;}
.style4 {
	font-family: "Arial Narrow", "sans-serif";
	font-size: 8.0pt;
}
div.MsoListParagraph {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpFirst {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpLast {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpMiddle {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraph {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpFirst {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpLast {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpMiddle {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraph {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpFirst {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpLast {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpMiddle {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
span.GramE1 {mso-style-name:"";
	mso-gram-e:yes;}
span.SpellE2 {mso-style-name:"";
	mso-spl-e:yes;}
div.MsoListParagraph1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpFirst1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpLast1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
div.MsoListParagraphCxSpMiddle1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraph1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpFirst1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpLast1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
li.MsoListParagraphCxSpMiddle1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraph1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpFirst1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpLast1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpMiddle1 {mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
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
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
span.GramE2 {mso-style-name:"";
	mso-gram-e:yes;}
span.SpellE3 {mso-style-name:"";
	mso-spl-e:yes;}
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
 <o:shapedefaults v:ext="edit" spidmax="1067"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:.5in'>
<div class=WordSection1>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td colspan=2 style='width:176.35pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:14.0pt'>BC 2.7
                  <o:p></o:p>
      </span></b></p></td>
      <td colspan=4 valign=top style='width:302.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt'>PEMBERITAHUAN PENGELUARAN BARANG UNTUK DIANGKUT DARI
        TEMPAT
                  <o:p></o:p>
      </span></b></p>
          <p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt'>PENIMBUNAN BERIKAT KE TEMPAT PENIMBUNAN BERIKAT
            LAINNYA</span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:1'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'>HEADER
                  <o:p></o:p>
      </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:2;height:6.25pt'>
      <td colspan=2 valign=top style='width:176.35pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt'>
        <o:p>&nbsp;</o:p>
      </span></b></p></td>
      <td colspan=4 valign=top style='width:302.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span class=SpellE3><span
  style='font-size:9.0pt'>Halaman</span></span><span style='font-size:9.0pt'> 1 <span class=SpellE3>dari</span> &hellip;
                <o:p></o:p>
      </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:3;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insidev:none'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
          <td width=311 valign=top style='width:233.6pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>NOMOR <span class=GramE2>PENGAJUAN<span
    style='font-weight:normal'> :</span></span></span></b><span
    style='font-size:9.0pt'> <?php echo $r[nomor_pengajuan]; ?>
            <o:p></o:p>
          </span></p></td>
          <td width=312 valign=top style='width:233.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>D. TUJUAN <span class=GramE2>PENGIRIMAN<span
    style='font-weight:normal'> :</span></span></span></b><span
    style='font-size:9.0pt'> <?php echo $r[tujuan_pengiriman]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:4;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;margin-bottom:
  0in;margin-left:.25in;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -13.5pt;line-height:normal;mso-list:l0 level1 lfo2'>
        <![if !supportLists]>
        <span
  style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
  style='mso-list:Ignore'>A.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span>
        <![endif]>
        <span style='font-size:9.0pt'>KANTOR PABEAN
          <o:p></o:p>
        </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:5;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=311 valign=top style='width:233.6pt;border:none;padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-bottom:0in;margin-bottom:.0001pt;
    mso-add-space:auto;text-indent:-.25in;line-height:normal;mso-list:l1 level1 lfo4'>
            <![if !supportLists]>
            <span
    style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:9.0pt'>Kantor <span
    class=SpellE3>Asal</span><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:
              <?php echo $r[kantor_pabean_asal]; ?>
              <o:p></o:p>
            </span></p></td>
          <td width=312 valign=top style='width:233.65pt;border-top:solid windowtext 1.0pt;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
    mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:1'>
          <td width=311 valign=top style='width:233.6pt;border:none;border-right:
    solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-bottom:0in;margin-bottom:.0001pt;
    mso-add-space:auto;text-indent:-.25in;line-height:normal;mso-list:l1 level1 lfo4'>
            <![if !supportLists]>
            <span
    style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:9.0pt'>Kantor <span
    class=SpellE3><span class=GramE2>Tujuan</span></span><span class=GramE2><span
    style='mso-spacerun:yes'>&nbsp;&nbsp; </span>: <?php echo $r[kantor_pabean_tujuan]; ?></span>
              <o:p></o:p>
            </span></p></td>
          <td width=312 valign=top style='width:233.65pt;border:none;mso-border-top-alt:
    solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:
    0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>G. KOLOM KHUSUS BEA DAN CUKAI
                        <o:p></o:p>
          </span></b></p></td>
        </tr>
        <tr style='mso-yfti-irow:2'>
          <td width=311 valign=top style='width:233.6pt;border:none;border-right:
    solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:13.5pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l0 level1 lfo2'>
            <![if !supportLists]>
            <span
    style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>B.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:9.0pt'>JENIS TPB <span
    class=GramE2>ASAL<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[jenis_tpb_asal]; ?></span>
              <o:p></o:p>
            </span></p></td>
          <td width=312 valign=top style='width:233.65pt;border:none;mso-border-left-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span class=SpellE3><span style='font-size:9.0pt'>Nomor</span></span><span
    style='font-size:9.0pt'> <span class=SpellE3><span class=GramE2>Pendaftaran</span></span><span
    class=GramE2><span style='mso-spacerun:yes'>&nbsp; </span>:</span> <?php echo $r[nomor_pendaftaran]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
          <td width=311 valign=top style='width:233.6pt;border:none;border-right:
    solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:13.5pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l0 level1 lfo2'>
            <![if !supportLists]>
            <span
    style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>C.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:9.0pt'>JENIS TPB <span
    class=GramE2>TUJUAN<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[jenis_tpb_tujuan]; ?></span>
              <o:p></o:p>
            </span></p></td>
          <td width=312 valign=top style='width:233.65pt;border:none;mso-border-left-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span class=SpellE3><span style='font-size:9.0pt'>Tanggal</span></span><span
    style='font-size:9.0pt'><span
    style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:
            <?php echo $r[tanggal_pendaftaran]; ?>
            <o:p></o:p>
          </span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:6;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;margin-bottom:
  0in;margin-left:13.5pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -13.5pt;line-height:normal;mso-list:l4 level1 lfo5'>
        <![if !supportLists]>
        <b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>E.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b>
        <![endif]>
        <b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'>DATA
          PEMBERITAHUAN
          <o:p></o:p>
        </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:7;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 5.4pt 0in 5.4pt'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
          <td width=311 valign=top style='width:233.6pt;border:none;border-right:
    solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>TPB ASAL BARANG
                        <o:p></o:p>
          </span></b></p></td>
          <td width=312 valign=top style='width:233.65pt;border:none;mso-border-left-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>TPB TUJUAN BARANG
                        <o:p></o:p>
          </span></b></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'>
            <o:p></o:p>
          </b></p></td>
    </tr>
    <tr style='mso-yfti-irow:8;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:
   none'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=104 valign=top style='width:77.85pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:21.35pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l5 level1 lfo6'>
            <![if !supportLists]>
            <span
    style='font-size:8.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:8.0pt'>NPWP
              <o:p></o:p>
            </span></p></td>
          <td width=190 valign=top style='width:142.4pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[npwp_pengusaha_asal]; ?>
                      <o:p></o:p>
          </span></p></td>
          <td width=18 valign=top style='width:13.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>5. NPWP
                      <o:p></o:p>
          </span></p></td>
          <td width=186 valign=top style='width:139.5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[npwp_pengusaha_tujuan]; ?></span></p></td>
        </tr>
        <tr style='mso-yfti-irow:1'>
          <td width=104 valign=top style='width:77.85pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:21.35pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l5 level1 lfo6'>
            <![if !supportLists]>
            <span
    style='font-size:8.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span class=SpellE3><span style='font-size:
    8.0pt'>Nama</span></span><span style='font-size:8.0pt'>
              <o:p></o:p>
            </span></p></td>
          <td width=190 valign=top style='width:142.4pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[nama_pengusaha_asal]; ?></span></p></td>
          <td width=18 valign=top style='width:13.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>6. <span class=SpellE3>Nama</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=186 valign=top style='width:139.5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[nama_pengusaha_tujuan]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:2'>
          <td width=104 valign=top style='width:77.85pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:21.35pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l5 level1 lfo6'>
            <![if !supportLists]>
            <span
    style='font-size:8.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span class=SpellE3><span style='font-size:
    8.0pt'>Alamat</span></span><span style='font-size:8.0pt'>
              <o:p></o:p>
            </span></p></td>
          <td width=190 valign=top style='width:142.4pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[alamat_pengusaha_asal]; ?></span></p></td>
          <td width=18 valign=top style='width:13.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>7. <span class=SpellE3>Alamat</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=186 valign=top style='width:139.5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[alamat_pengusaha_tujuan]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
          <td width=104 valign=top style='width:77.85pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoListParagraph1 style='margin-top:0in;margin-right:0in;
    margin-bottom:0in;margin-left:21.35pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-indent:-13.5pt;line-height:normal;mso-list:l5 level1 lfo6'>
            <![if !supportLists]>
            <span
    style='font-size:8.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>
            <![endif]>
            <span style='font-size:8.0pt'>No <span
    class=SpellE3>Izin</span> TPB
              <o:p></o:p>
            </span></p></td>
          <td width=190 valign=top style='width:142.4pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[nomor_ijin_tpb_pengusaha_asal]; ?></span></p></td>
          <td width=18 valign=top style='width:13.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>8. No <span class=SpellE3>Izin</span> TPB
                      <o:p></o:p>
          </span></p></td>
          <td width=186 valign=top style='width:139.5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[nomor_ijin_tpb_pengusaha_tujuan]; ?></span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:9;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>DOKUMEN
        PELENGKAP PABEAN
                  <o:p></o:p>
      </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:10;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:
   none'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=102 valign=top style='width:76.25pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'><span
    style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>9.<span style='mso-spacerun:yes'>&nbsp;&nbsp; </span><span class=SpellE3>Invoide</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=210 valign=top style='width:157.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[invoice]. " Tgl ".$r[tanggal_invoice]; ?></span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>12. <span class=SpellE3>Surat</span> <span class=SpellE3>Jalan</span><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                      <o:p></o:p>
          </span></p></td>
          <td width=197 valign=top style='width:148.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[surat_jalan]." Tgl ".$r[tanggal_surat_jalan]; ?></span></p></td>
        </tr>
        <tr style='mso-yfti-irow:1'>
          <td width=102 valign=top style='width:76.25pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'><span
    style='mso-spacerun:yes'>&nbsp; </span>10.<span style='mso-spacerun:yes'>&nbsp; </span>Packing list
                      <o:p></o:p>
          </span></p></td>
          <td width=210 valign=top style='width:157.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[packinglist]." Tgl ".$r[tanggal_packinglist]; ?></span></p></td>
          <td width=312 colspan=2 valign=top style='width:233.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>13. <span class=SpellE3>Surat</span> <span class=SpellE3>Keputusan</span> /<span class=SpellE3>Persetujuan</span>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:2'>
          <td width=102 valign=top style='width:76.25pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'><span
    style='mso-spacerun:yes'>&nbsp; </span>11.<span style='mso-spacerun:yes'>&nbsp; </span><span class=SpellE3>Kontrak</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=210 valign=top style='width:157.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[kontrak]." Tgl ".$r[tanggal_kontrak]; ?></span></p></td>
          <td width=312 colspan=2 valign=top style='width:233.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'><span
    style='mso-spacerun:yes'>&nbsp;</span><?php echo $r[surat_keputusan]." Tgl ".$r[tanggal_surat_keputusan]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
          <td width=102 valign=top style='width:76.25pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=210 valign=top style='width:157.35pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=114 valign=top style='width:85.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>14. <span class=SpellE3>Lainnya</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=197 valign=top style='width:148.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php
    $doc = mysql_query("select * from detail_lamp_document9 where nomor_pengajuan='$r[nomor_pengajuan]'");
	$jml_doc = mysql_num_rows($doc);
	if($jml_doc>1){echo "Lihat lampiran pelengkap dokumen"; }else{ echo $r[nomor_document]; } 
	?></span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:11;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>RIWAYAT
        BARANG
                  <o:p></o:p>
      </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:12;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span></span><span style='font-size:8.0pt'>15.<span
  style='mso-spacerun:yes'>&nbsp; </span><span class=SpellE3>Nomor</span> <span
  class=SpellE3>dan</span> <span class=SpellE3>tanggal</span> BC 2.7 <span
  class=SpellE3><span class=GramE2>Asal</span></span><span class=GramE2><span
  style='mso-spacerun:yes'>&nbsp; </span>:</span> <?php echo $r[nomor_bc_asal]." Tgl ".$r[tanggal_bc_asal]; ?></span></p></td>
    </tr>
    <tr style='mso-yfti-irow:13;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>DATA
        PERDAGANGAN
                  <o:p></o:p>
      </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:14;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:
   none'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=156 valign=top style='width:116.8pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>16.<span
    style='mso-spacerun:yes'>&nbsp; </span><span class=SpellE3>Jenis</span> <span
    class=SpellE3>valuta</span> <span class=SpellE3>asing</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=156 valign=top style='width:116.8pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo $r[jenis_valuta_asing]; ?></span></p></td>
          <td width=138 valign=top style='width:103.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>18. <span class=SpellE3>Harga</span> <span class=SpellE3>Penyerahan</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=173 valign=top style='width:130.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo number_format($r[harga_penyerahan],0,'.','.'); ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
          <td width=156 valign=top style='width:116.8pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>17. CIF
                      <o:p></o:p>
          </span></p></td>
          <td width=156 valign=top style='width:116.8pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>: <?php echo number_format($r[nilai_cif],0,'.','.'); ?></span></p></td>
          <td width=138 valign=top style='width:103.65pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=173 valign=top style='width:130.0pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:15;height:6.25pt'>
      <td colspan=3 valign=top style='width:220.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>DATA
        PENGANGKUTAN
                  <o:p></o:p>
      </span></b></p></td>
      <td colspan=3 valign=top style='width:258.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt'>SEGEL
        (DIISI OLEH BEA DAN CUKAI )
                <o:p></o:p>
      </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:16;height:78.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:78.25pt'><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=642
   style='width:481.75pt;border-collapse:collapse;border:none;mso-border-alt:
   solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=258 valign=top style='width:193.75pt;border:none;border-top:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>19. <span class=SpellE3>Jenis</span> <span class=SpellE3>Sarana</span> <span class=SpellE3>Pengangkut</span> <span
    class=SpellE3>Darat</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=149 colspan=2 valign=top style='width:112.0pt;border-top:solid windowtext 1.0pt;
    border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>20. No <span
    class=SpellE3>Polisi</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=126 colspan=2 valign=top style='width:94.75pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span style='font-size:8.0pt'>BC
            ASAL
                      <o:p></o:p>
          </span></p></td>
          <td width=108 valign=top style='width:81.25pt;border:none;border-top:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span style='font-size:8.0pt'>23. <span class=SpellE3>Catatan</span> BC
            <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:1'>
          <td width=258 valign=top style='width:193.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span><?php echo $r[jenis_sarana_pengangkut_darat]; ?></p></td>
          <td width=149 colspan=2 valign=top style='width:112.0pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p><?php echo $r[nomor_polisi]; ?></o:p>
          </span></p></td>
          <td width=73 valign=top style='width:54.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>21. No <span
    class=SpellE3>Segel</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=54 valign=top style='width:40.25pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>22. <span class=SpellE3>Jenis</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=108 valign=top style='width:81.25pt;border:none;border-bottom:
    solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span class=SpellE3><span
    style='font-size:8.0pt'>tujuan</span></span><span style='font-size:8.0pt'>
            <o:p></o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:2'>
          <td width=408 colspan=3 valign=top style='width:305.75pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:9.0pt'>DATA PETI KEMAS DAN PENGEMAS
                        <o:p></o:p>
          </span></b></p></td>
          <td width=73 valign=top style='width:54.5pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=54 valign=top style='width:40.25pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=108 valign=top style='width:81.25pt;border:none;mso-border-top-alt:
    solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:
    0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:3;height:34.15pt'>
          <td width=276 colspan=2 valign=top style='width:207.25pt;border:none;
    mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:34.15pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>24. <span class=SpellE3>Merek</span> <span class=SpellE3>dan</span> No <span class=SpellE3>Kemasan</span> / <span
    class=SpellE3>Peti</span> <span class=SpellE3>Kemas</span> <span
    class=SpellE3>dan</span> <span class=SpellE3>jumlah</span> <span
    class=SpellE3>petikemas</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=131 valign=top style='width:98.5pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:34.15pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>25. <span class=SpellE3>Jumlah</span> &amp; <span class=SpellE3>Jenis</span> <span class=SpellE3>Kemasan</span>
                      <o:p></o:p>
          </span></p></td>
          <td width=73 valign=top style='width:54.5pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:34.15pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span><span style="font-size:8.0pt"><span
    class=SpellE3><?php echo $r[nomor_segel]; ?></span>
          <o:p></o:p>
          </span></p></td>
          <td width=54 valign=top style='width:40.25pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:34.15pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span><span style="font-size:8.0pt"><span
    class=SpellE3><?php echo $r[jenis]; ?></span>
          <o:p></o:p>
          </span></p></td>
          <td width=108 valign=top style='width:81.25pt;border:none;mso-border-left-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:34.15pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span style='font-size:9.0pt'>
            <o:p><span style="font-size:8.0pt"><span
    class=SpellE3><?php echo $r[catatan_bc_tujuan]; ?></span>
                <o:p></o:p>
            </span>&nbsp;</o:p>
          </span></p></td>
        </tr>
        <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
          <td width=276 colspan=2 valign=top style='width:207.25pt;border:none;
    padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:8.0pt'>
            <o:p>&nbsp;</o:p>
          </span><?php echo $r[merk_nomor_petikemas]; ?></p></td>
          <td width=131 valign=top style='width:98.5pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span><?php echo number_format($r[jumlah_jenis_kemasan],0,'.','.'); ?></p></td>
          <td width=73 valign=top style='width:54.5pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=54 valign=top style='width:40.25pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
          <td width=108 valign=top style='width:81.25pt;border:none;mso-border-left-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 align=center style='margin-bottom:0in;margin-bottom:
    .0001pt;text-align:center;line-height:normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
          </span></p></td>
        </tr>
        <![if !supportMisalignedColumns]>
        <tr height=0>
          <td width=258 style='border:none'></td>
          <td width=18 style='border:none'></td>
          <td width=131 style='border:none'></td>
          <td width=73 style='border:none'></td>
          <td width=54 style='border:none'></td>
          <td width=108 style='border:none'></td>
        </tr>
        <![endif]>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
        </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:17;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>DATA
        BARANG
                  <o:p></o:p>
      </span></b></p></td>
    </tr>
    <tr style='mso-yfti-irow:18;height:6.25pt'>
      <td colspan=6 valign=top style='width:6.65in;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insidev:
   none'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
          <td width=208 valign=top style='width:155.75pt;border:none;border-top:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>26. Volume (m3<span
    class=GramE2>) :</span> <?php echo $r[volume]; ?></span></p></td>
          <td width=208 valign=top style='width:155.75pt;border:none;border-top:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span style='font-size:9.0pt'>27. <span class=SpellE3>Berat</span> <span class=SpellE3>kotor</span> (kg<span class=GramE2>) :</span> <?php echo $r[berat_kotor]; ?></span></p></td>
          <td width=208 valign=top style='width:155.75pt;border:none;border-top:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;
    line-height:normal'><span class=GramE2><span style='font-size:9.0pt'>28 .</span></span><span
    style='font-size:9.0pt'> <span class=SpellE3>Berat</span> <span
    class=SpellE3>Bersih</span> (kg<span class=GramE2>) :</span> <?php echo $r[berat_bersih]; ?>
                      <o:p></o:p>
          </span></p></td>
        </tr>
      </table>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p></o:p>
          </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:19;height:6.25pt'>
      <td width=75 valign=top style='width:23.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>29.
                <o:p></o:p>
      </span></p>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>No
                <o:p></o:p>
      </span></p></td>
      <td colspan=3 valign=top style='width:225.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>30.<br>
                <span class=SpellE3>Pos</span> tariff/ <span class=SpellE3>Hs</span> , <span
  class=SpellE3>uraian</span> <span class=SpellE3>jumlah</span> <span
  class=SpellE3>dan</span> <span class=SpellE3>jenis</span> <span class=SpellE3>barang</span> <span class=SpellE3>secara</span> <span class=SpellE3>lengkap</span> , <span
  class=SpellE3>kode</span> <span class=SpellE3>barang</span>, <span
  class=SpellE3>merk</span>, <span class=SpellE3>tipe</span>, <span class=SpellE3>ukuran</span> <span class=SpellE3>dan</span> <span class=SpellE3>spesifikasi</span> lain
        <o:p></o:p>
      </span></p></td>
      <td width=183 valign=top style='width:113.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>31.<br>
        - <span class=SpellE3>Jumlah</span> &amp; <span class=SpellE3>Jenis</span> <span
  class=SpellE3>Satuan</span><br>
        - <span class=SpellE3>Berat</span> <span class=SpellE3>Bersih</span> (kg)
        <o:p></o:p>
      </span></p>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>- Volume (m3)
                <o:p></o:p>
          </span></p></td>
      <td width=194 valign=top style='width:115.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>32.
                <o:p></o:p>
      </span></p>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>- <span class=SpellE3>Nilai</span> CIF
                <o:p></o:p>
          </span></p>
        <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>- <span class=SpellE3>Harga</span> <span
  class=SpellE3>Penyerahan</span>
              <o:p></o:p>
        </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:20;height:6.25pt'>
      <td width=75 valign=top style='width:23.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span><span style="font-size:8.0pt">1</span></p></td>
      <td colspan=3 valign=top style='width:225.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span><span style="font-size:8.0pt"><?php
      $brg = mysql_query("select a.*,b.* from detail_lamp_barang9 a,barang b  where a.kode_barang=b.kd_barang and  a.nomor_pengajuan='$r[nomor_pengajuan]'");
	  $jml_brg = mysql_num_rows($brg);
	  $r_brg = mysql_fetch_array($brg);
	  if($jml_brg>1){ echo "Lihat lembar lanjutan barang"; }else{echo $r_brg[uraian]." ".$r_brg[type]." ".$r_brg[spec]." ".$r_brg[kd_barang]." ".$r_brg[nm_barang]; }	  
	  ?></span></p></td>
      <td width=183 valign=top style='width:113.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span><span style="font-size:8.0pt"><?php echo "- ".$r_brg[jumlah_jenis]."<br>- ".$r_brg[berat_bersih]."<Br>- ".$r_brg[volume]; ?></span></p></td>
      <td width=194 valign=top style='width:115.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span><span style="font-size:8.0pt"><?php echo number_format($r[nilai_cif],0,'.','.'); ?></span></p>
        <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
            <o:p>&nbsp;</o:p>
        </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:21;height:6.25pt'>
      <td colspan=4 valign=top style='width:249.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraphCxSpFirst1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  text-indent:-9.0pt;line-height:normal;mso-list:l4 level1 lfo5'>
        <![if !supportLists]>
        <b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>F.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b>
        <![endif]>
        <b
  style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt'>TANDA
          TANGAN PENGUSAHA TPB
          <o:p></o:p>
        </span></b></p></td>
      <td colspan=2 valign=top style='width:229.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraphCxSpLast1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  text-indent:-9.0pt;line-height:normal;mso-list:l6 level1 lfo7'>
        <![if !supportLists]>
        <span
  style='font-size:9.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
  style='mso-list:Ignore'>H.<span style='font:7.0pt "Times New Roman"'> </span></span></span>
        <![endif]>
        <span
  style='font-size:9.0pt'>UNTUK PEJABAT BEA DAN CUKAI
          <o:p></o:p>
        </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:22;height:6.25pt'>
      <td colspan=4 valign=top style='width:249.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraphCxSpFirst1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  line-height:normal'><span class=SpellE3><span style='font-size:8.0pt'>Dengan</span></span><span
  style='font-size:8.0pt'> <span class=SpellE3>ini</span> <span class=SpellE3>saya</span> <span class=SpellE3>menyatakan</span> <span class=SpellE3>bertanggung</span> <span
  class=SpellE3>jawab</span> <span class=SpellE3>atas</span> <span class=SpellE3>kebenaran</span> <span class=SpellE3>hal-hal</span> yang <span class=SpellE3>diberitahukan</span> <span class=SpellE3>dalam</span> <span class=SpellE3>pemberitahuan</span> <span
  class=SpellE3>pabean</span> <span class=SpellE3>ini</span><b style='mso-bidi-font-weight:
  normal'>
        <o:p></o:p>
      </b></span></p></td>
      <td width=183 valign=top style='width:113.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoListParagraphCxSpLast1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  line-height:normal'><span style='font-size:9.0pt'>Kantor <span class=SpellE3>Pabean</span> <span class=SpellE3>Asal</span><b style='mso-bidi-font-weight:normal'>
        <o:p></o:p>
      </b></span></p></td>
      <td width=194 valign=top style='width:115.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:6.25pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>Kantor <span class=SpellE3>Pabean</span> <span class=SpellE3>Tujuan</span>
                <o:p></o:p>
      </span></p></td>
    </tr>
    <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes;height:46.3pt'>
      <td colspan=4 valign=top style='width:249.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:46.3pt'><p class=MsoListParagraphCxSpFirst1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  line-height:normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span></p>
          <p class=MsoListParagraphCxSpMiddle1 align=center style='margin:0in;
  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal'><span
  class=SpellE3><span style='font-size:9.0pt'>Bekasi</span></span><span
  style='font-size:9.0pt'>,<span class="GramE">
            <?php
     $tgl = date('d-M-Y');
	 echo $tgl;
  ?>
          </span>
          <o:p></o:p>
          </span></p>
        <p class=MsoListParagraphCxSpMiddle1 align=center style='margin:0in;
  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal'><span
  style='font-size:9.0pt'>
          <o:p>&nbsp;</o:p>
        </span></p>
        <p class=MsoListParagraphCxSpMiddle1 align=center style='margin-top:0in;
  margin-right:0in;margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;
  mso-add-space:auto;text-align:center;line-height:normal'><span
  style='font-size:9.0pt'>( <span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha_asal]; ?></span> )
              <o:p></o:p>
        </span></p></td>
      <td width=183 valign=top style='width:113.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:46.3pt'><p class=MsoListParagraphCxSpLast1 style='margin-top:0in;margin-right:0in;
  margin-bottom:0in;margin-left:9.0pt;margin-bottom:.0001pt;mso-add-space:auto;
  line-height:normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span></p>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE3><span class=GramE2><span style='font-size:9.0pt'>Nama</span></span></span><span
  class=GramE2><span style='font-size:9.0pt'> :</span></span><span style="letter-spacing:.05pt"><?php echo $r[nama_pejabat_pabean_asal]; ?></span></p>
        <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=GramE2><span style='font-size:9.0pt'>NIP :</span></span><span
  style='font-size:9.0pt'><span style="letter-spacing:.05pt"><?php echo $r[nip_pejabat_pabean_asal]; ?></span>
          <o:p></o:p>
        </span></p></td>
      <td width=194 valign=top style='width:115.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:46.3pt'><p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt'>
        <o:p>&nbsp;</o:p>
      </span></p>
          <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE3><span class=GramE2><span style='font-size:9.0pt'>Nama</span></span></span><span
  class=GramE2><span style='font-size:9.0pt'> :</span></span><span style="letter-spacing:.05pt"><?php echo $r[nama_pejabat_pabean_tujuan]; ?></span></p>
        <p class=MsoNormal3 style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span class=GramE2><span style='font-size:9.0pt'>NIP :</span></span><span style="letter-spacing:.05pt"><?php echo $r[nip_pejabat_pabean_tujuan]; ?></span></p></td>
    </tr>
    <![if !supportMisalignedColumns]>
    <tr height=0>
      <td width=75 style='border:none'></td>
      <td width=156 style='border:none'></td>
      <td width=189 style='border:none'></td>
      <td width=41 style='border:none'></td>
      <td width=183 style='border:none'></td>
      <td width=194 style='border:none'></td>
    </tr>
    <![endif]>
  </table>
  <p class=MsoNormal3>
    <o:p>&nbsp;</o:p>
  </p>
</div>
<p style="font-size:8.0pt;line-height:132%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;;
color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA">&nbsp;</p>
<p style="font-size:8.0pt;line-height:132%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;;
color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA">
  <?php
  $brg = mysql_query("select * from detail_lamp_barang9 where nomor_pengajuan='$_GET[id]' and cflag='A'");
  $jml_brg = mysql_num_rows($brg);
  if($jml_brg>1) {
?>
  <br clear=all style='page-break-before:always;mso-break-type:section-break'>


</p>
<div class=WordSection18>

<p class=MsoNormal style='margin-top:.45pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:4.5pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:4.5pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
"Arial Narrow";color:black'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.2pt;border-collapse:collapse;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.0pt'>
  <td width=177 colspan=2 valign=top style='width:132.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:39.95pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua"'>BC 2.7</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=560 colspan=3 valign=top style='width:419.85pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:158.25pt;
  margin-bottom:0in;margin-left:159.35pt;margin-bottom:.0001pt;text-align:center;
  line-height:13.7pt;mso-line-height-rule:exactly;mso-pagination:none;
  mso-layout-grid-align:none;text-autospace:none'><b><span style='font-size:
  12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>LEMBAR<span
  style='letter-spacing:-.45pt'> </span>LANJUTAN</span></b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:6.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:170.6pt;
  margin-bottom:0in;margin-left:171.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><b><span style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>DATA<span style='letter-spacing:-.45pt'>
  </span>BARANG</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.75pt'>
  <td width=737 colspan=5 valign=top style='width:552.45pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:17.75pt'>
  <p class=MsoNormal style='margin-top:1.7pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>HEADER</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.4pt'>
  <td width=737 colspan=5 valign=top style='width:552.45pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:52.4pt'>
  <p class=MsoNormal align=right style='margin-top:2.75pt;margin-right:4.1pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>1<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE><span class=GramE>dari</span></span><span
  class=GramE><span style='letter-spacing:-.15pt'> </span>...<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>..</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:4.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:8.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt'>NOMOR<span
  style='letter-spacing:.2pt'> </span><span class=GramE>PENGAJUAN<span
  style='letter-spacing:-.5pt'> </span><span style='font-weight:normal'>:</span></span></span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt;letter-spacing:
  -.05pt'><span style='mso-spacerun:yes'> </span></span><span class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><?php echo $r[nomor_pengajuan];?></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>
    <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:286.7pt;margin-bottom:.0001pt;line-height:7.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'></span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>
  <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.55pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>A.<span style='mso-spacerun:yes'>     </span><span
  style='letter-spacing:.55pt'><span style='mso-spacerun:yes'> </span></span>KANTOR<span
  style='letter-spacing:-.35pt'> </span>PABEAN</span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  0in;margin-left:13.95pt;margin-bottom:.0001pt;line-height:7.85pt;mso-line-height-rule:
  exactly;mso-pagination:none;tab-stops:98.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow";position:relative;top:1.0pt;mso-text-raise:
  -1.0pt'>1.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  1.8pt'><span style='mso-spacerun:yes'> </span></span>Kantor <span class=SpellE><span class=GramE>A<span
  style='letter-spacing:.05pt'>s</span>al</span></span><span class=GramE><span
  style='mso-tab-count:1'>             </span>: <?php echo $r[kantor_pabean_asal]; ?></span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
    <o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.9pt'>
  <td width=375 colspan=3 valign=top style='width:281.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.9pt'>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:40.7pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>2.<span
  style='mso-spacerun:yes'>    </span><span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>Kantor<span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>Tujuan</span><span class=GramE><span
  style='mso-tab-count:1'>         </span><span style='mso-spacerun:yes'> 
  </span>: <span style='letter-spacing:.05pt'><span
  style='mso-spacerun:yes'> </span></span><?php echo $r[kantor_pabean_tujuan]; ?></span><span style='letter-spacing:
  -.05pt'> </span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:40.7pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><b>B.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:.15pt'><span style='mso-spacerun:yes'> </span></span>JENIS<span
  style='letter-spacing:-.25pt'> </span>TPB ASAL<span style='mso-tab-count:
  1'>                               </span> :<span style='letter-spacing:.05pt'>
    </span></b><span style='letter-spacing:.05pt'><?php echo $r[jenis_tpb_asa]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:40.7pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><b>C.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'> </span></span>JENIS<span
  style='letter-spacing:-.25pt'> </span>TPB TUJUAN<span style='mso-tab-count:
  1'>                           </span>:<span style='letter-spacing:.05pt'> </span></b><?php echo $r[jenis_tpb_tujuan]; ?></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:40.7pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style="font-size:8.0pt;line-height:169%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><b>D.<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'>&nbsp;</span></span>TUJUAN PENGIRIMAN<span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:<span style='letter-spacing:.05pt'> </span></b><?php echo $r[tujuan_pengiriman]; ?></span></p></td>
  <td width=361 colspan=2 valign=top style='width:270.85pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.9pt'>
  <p class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal71 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal71 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE51211><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE51211><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE51211><span style='letter-spacing:.05pt'><?php echo $r[nomor_pendaftaran]?><Br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[tanggal_pendaftaran]; ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
</span></span></p>  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:44.75pt'>
  <td width=42 valign=top style='width:31.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:44.75pt'>
  <p class=MsoNormal style='margin-top:1.3pt;margin-right:13.6pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:116%;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;line-height:116%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>29. No</span><span style='font-size:12.0pt;line-height:116%;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=333 colspan=2 valign=top style='width:250.1pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:44.75pt'>
  <p class=MsoNormal style='margin-top:1.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>30.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:8.55pt;margin-bottom:
  0in;margin-left:21.0pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pos</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .35pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>tarif</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>/<span style='letter-spacing:-.15pt'> </span>HS,<span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>uraian</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>jumlah</span><span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>dan</span><span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>jen<span
  style='letter-spacing:-.05pt'>i</span>s</span><span style='letter-spacing:
  -.1pt'> </span><span class=SpellE>barang</span><span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>secara</span><span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>lengk<span style='letter-spacing:-.05pt'>a</span>p</span>,<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE>kode</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>barang</span>,<span
  style='letter-spacing:-.3pt'> </span><span class=SpellE>merk</span>,<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE>tipe</span>,<span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>ukuran</span>,<span
  style='letter-spacing:-.3pt'> </span><span class=SpellE><span
  style='letter-spacing:.1pt'>d</span>an</span><span style='letter-spacing:
  -.05pt'> </span><span class=SpellE>spesifikasi</span><span style='letter-spacing:
  -.4pt'> </span>lain</span><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=197 valign=top style='width:147.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:44.75pt'>
  <p class=MsoNormal style='margin-top:1.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>31.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
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
  <td width=164 valign=top style='width:123.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:44.75pt'>
  <p class=MsoNormal style='margin-top:1.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>32.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.4pt'> </span><span class=SpellE>Nilai</span><span
  style='letter-spacing:-.15pt'> </span>CIF<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:1.5pt;margin-right:0in;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>-<span
  style='letter-spacing:.45pt'> </span><span class=SpellE>Harga</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>penyerahan</span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:392.75pt'>
  <td width=42 valign=top style='width:31.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:392.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;line-height:116%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;">
    <?php for($i=1;$i<=$jml_brg;$i++){ echo "&nbsp;".$i."<br><br><br><br>"; }?>
  </span></p>
  </td>
  <td width=333 colspan=2 valign=top style='width:250.1pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:392.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;line-height:116%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;">
    <?php 
  $brg = mysql_query("select a.*,b.* from detail_lamp_barang9 a,barang b where a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and a.cflag='A'");
  while($r_brg = mysql_fetch_array($brg)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$r_brg[uraian] $r_brg[type] $r_brg[spec] $r_brg[kode_barang] $r_brg[nm_barang]<br><Br><br>";
  }
  ?>
  </span></p>
  </td>
  <td width=197 valign=top style='width:147.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:392.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;line-height:116%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;">
    <?php 
  $brg = mysql_query("select a.*,b.* from detail_lamp_barang9 a,barang b where a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and a.cflag='A'");
  while($r_brg = mysql_fetch_array($brg)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- $r_brg[berat_bersih]<br>-$r_brg[volume]<Br><br><br>";
  }
  ?>
  </span></p>
  </td>
  <td width=164 valign=top style='width:123.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:392.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;line-height:116%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:
  &quot;Arial Narrow&quot;">
    <?php 
  $brg = mysql_query("select a.*,b.* from detail_lamp_barang9 a,barang b where a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and a.cflag='A'");
  while($r_brg = mysql_fetch_array($brg)){
  		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".number_format($r_brg[nilai_cif],0,'.','.')."<br><Br><br><br>";
  }
  ?>
  </span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.3pt'>
  <td width=375 colspan=3 valign=top style='width:281.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.3pt'>
  <p class=MsoNormal style='margin-top:2.1pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>F. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANGAN<span style='letter-spacing:-.35pt'> </span>PENGUSAHA<span
  style='letter-spacing:-.5pt'> </span>TPB</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=361 colspan=2 valign=top style='width:270.85pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.3pt'>
  <p class=MsoNormal style='margin-top:2.1pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>H.<span style='letter-spacing:.4pt'> </span>UNTUK<span
  style='letter-spacing:-.3pt'> </span>PEJABAT<span style='letter-spacing:-.4pt'>
  </span>BEA<span style='letter-spacing:-.15pt'> </span>DAN<span
  style='letter-spacing:-.2pt'> </span>CUKAI</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:21.65pt'>
  <td width=375 colspan=3 rowspan=2 valign=top style='width:281.6pt;border:
  solid black 1.0pt;border-top:none;mso-border-top-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.65pt'>
  <p class=MsoNormal style='margin-top:.95pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:14.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:14.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:6.45pt;margin-bottom:
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
  "Arial Narrow";letter-spacing:-.3pt'> </span><span class=SpellE><span
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
  "Arial Narrow";letter-spacing:-.2pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>hal-hal</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'> yang<span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>diberitahukan</span><span
  style='letter-spacing:-.5pt'> </span><span class=SpellE>dalam</span> <span
  class=SpellE>pemberitahuan</span><span style='letter-spacing:-.55pt'> </span><span
  class=SpellE>pabean</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>ini</span>.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.2pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:41.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>
    Bekasi, 
     <span class=SpellE>Tg<span
  style='letter-spacing:.05pt'>l</span></span><span class=GramE>
    <?php
     $tgl = date('d-M-Y');
	 echo $tgl;
  ?></span>
     <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:7.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:7.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:113.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>( <span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha_asal]; ?></span> )</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=197 valign=top style='width:147.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.65pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:44.9pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Kantor<span
  style='letter-spacing:.25pt'> </span><span class=SpellE>Pabean</span><span
  style='letter-spacing:-.3pt'> </span><span class=SpellE>Asal</span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=164 valign=top style='width:123.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.65pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:28.4pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Kantor<span
  style='letter-spacing:.25pt'> </span><span class=SpellE>Pabean</span><span
  style='letter-spacing:-.3pt'> </span><span class=SpellE>Tujuan</span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:88.75pt'>
  <td width=197 valign=top style='width:147.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:88.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:10.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:33.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:132%;mso-pagination:
  none;tab-stops:26.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  class=SpellE><span class=GramE><span style='font-size:8.0pt;line-height:132%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Nama</span></span></span><span
  class=GramE><span style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'> <span style='letter-spacing:.7pt'><span
  style='mso-spacerun:yes'> </span></span>:</span></span><span
  style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span style='mso-spacerun:yes'>   
  </span><span style="letter-spacing:.05pt"><?php echo $r[nama_pejabat_pabean_asal]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:33.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:132%;mso-pagination:
  none;tab-stops:26.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span class=GramE>NIP<span
  style='mso-tab-count:1'>         </span>:<span style='mso-spacerun:yes'> 
    </span><span style="letter-spacing:.05pt"><?php echo $r[nip_pejabat_pabean_asal]; ?></span>.</span></span><span style='font-size:
  12.0pt;line-height:132%;font-family:"Times New Roman","serif"'><o:p></o:p>
    </span></p></td>
  <td width=164 valign=top style='width:123.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:88.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:.65pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:10.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:8.3pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:132%;mso-pagination:
  none;tab-stops:26.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  class=SpellE><span class=GramE><span style='font-size:8.0pt;line-height:132%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Nama</span></span></span><span
  class=GramE><span style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'> <span style='letter-spacing:.7pt'><span
  style='mso-spacerun:yes'> </span></span>:</span></span><span
  style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span style='mso-spacerun:yes'>   </span><span style="letter-spacing:.05pt"><?php echo $r[nama_pejabat_pabean_tujuan]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:8.3pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:132%;mso-pagination:
  none;tab-stops:26.0pt;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;line-height:132%;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'><span class=GramE>NIP<span
  style='mso-tab-count:1'>         </span>:<span style='mso-spacerun:yes'> 
    </span><span style="letter-spacing:.05pt"><?php echo $r[nip_pejabat_pabean_tujuan]; ?></span>.</span></span><span style='font-size:
  12.0pt;line-height:132%;font-family:"Times New Roman","serif"'><o:p></o:p>
    </span></p></td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=42 style='border:none'></td>
  <td width=135 style='border:none'></td>
  <td width=199 style='border:none'></td>
  <td width=197 style='border:none'></td>
  <td width=164 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>
<?php } ?>
<span style='font-size:12.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<?php
  $doc = mysql_query("select * from detail_lamp_document9 where nomor_pengajuan='$r[nomor_pengajuan]'");
  $jml_doc = mysql_num_rows($doc);
  if($jml_doc>1){
  
?>
<div class=WordSection19>

<p class=MsoNormal style='margin-top:.2pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:4.0pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:4.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.2pt;border-collapse:collapse;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.0pt'>
  <td width=177 colspan=2 valign=top style='width:132.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:40.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua"'>BC 2.7</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td width=561 colspan=3 valign=top style='width:420.8pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:159.3pt;
  margin-bottom:0in;margin-left:159.35pt;margin-bottom:.0001pt;text-align:center;
  line-height:13.7pt;mso-line-height-rule:exactly;mso-pagination:none;
  mso-layout-grid-align:none;text-autospace:none'><b><span style='font-size:
  12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>LEMBAR<span
  style='letter-spacing:-.45pt'> </span>LANJUTAN</span></b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:6.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:128.7pt;
  margin-bottom:0in;margin-left:128.65pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><b><span style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>DOKUMEN<span style='letter-spacing:-.4pt'>
  </span>PELENGKAP<span style='letter-spacing:.05pt'> </span>PABEAN</span></b><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.75pt'>
  <td width=738 colspan=5 valign=top style='width:553.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:17.75pt'>
  <p class=MsoNormal style='margin-top:1.7pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>HEADER</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.4pt'>
  <td width=738 colspan=5 valign=top style='width:553.5pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:52.4pt'>
  <p class=MsoNormal align=right style='margin-top:2.8pt;margin-right:5.15pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>1<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE><span class=GramE>dari</span></span><span
  class=GramE><span style='letter-spacing:-.15pt'> </span>...<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>..</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:8.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt'>NOMOR<span
  style='letter-spacing:.2pt'> </span><span class=GramE>PENGAJUAN<span
  style='letter-spacing:-.5pt'> </span><span style='font-weight:normal'>:</span></span></span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt;letter-spacing:
  -.05pt'><span style='mso-spacerun:yes'> </span></span><span class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><?php echo $r[nomor_pengajuan];?></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:329.25pt;margin-bottom:.0001pt;line-height:7.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>
    <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;tab-stops:329.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>A.<span style='mso-spacerun:yes'>     </span><span
  style='letter-spacing:.55pt'><span style='mso-spacerun:yes'> </span></span>KANTOR<span
  style='letter-spacing:-.35pt'> </span>PABEAN<span style='mso-tab-count:1'>                                                                                                           </span></span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>
    <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  0in;margin-left:13.95pt;margin-bottom:.0001pt;line-height:7.85pt;mso-line-height-rule:
  exactly;mso-pagination:none;tab-stops:98.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow";position:relative;top:1.0pt;mso-text-raise:
  -1.0pt'>1.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  1.8pt'><span style='mso-spacerun:yes'> </span></span>Kantor<span
  style='letter-spacing:-.25pt'> </span><span class=SpellE><span class=GramE>A<span
  style='letter-spacing:.05pt'>s</span>al</span></span><span class=GramE><span
  style='mso-tab-count:1'>             </span>: <span style='letter-spacing:
  .05pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[kantor_pabean_asal]; ?></span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.9pt'>
  <td width=432 colspan=3 valign=top style='width:324.15pt;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.9pt'>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:83.25pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>2.<span
  style='mso-spacerun:yes'>    </span><span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>Kantor<span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>Tujuan</span><span class=GramE><span
  style='mso-tab-count:1'>         </span><span style='mso-spacerun:yes'> 
  </span>:</span><span class="GramE"><?php echo $r[kantor_pabean_tujuan]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:83.25pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><b>B.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:.15pt'><span style='mso-spacerun:yes'> </span></span>JENIS<span
  style='letter-spacing:-.25pt'> </span>TPB ASAL<span style='mso-tab-count:
  1'>    </span>:<span style='letter-spacing:.05pt'>
    </span></b><span style="letter-spacing:.05pt"><?php echo $r[jenis_tpb_asal]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:83.25pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>    <b>C.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'> </span></span>JENIS<span
  style='letter-spacing:-.25pt'> </span>TPB TUJUAN<span style='mso-tab-count:
  1'>   </span>: <span style='letter-spacing:.05pt'> </span></b></span><span style="font-size:8.0pt;line-height:169%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><span class="MsoNormal" style="margin-top:4.3pt;margin-right:83.25pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none"><?php echo $r[jenis_tpb_tujuan]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:83.25pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style="font-size:8.0pt;line-height:169%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><b>D.<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'>&nbsp;</span></span>TUJUAN PENGIRIMAN<span style='mso-tab-count:
  1'>&nbsp;&nbsp;</span>:<span style='letter-spacing:.05pt'> </span></b><?php echo $r[tujuan_pengiriman]; ?></span></p></td>
  <td width=306 colspan=2 valign=top style='width:229.35pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.9pt'>
  <p class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal711 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal711 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE512111><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE512111><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE512111><span style='letter-spacing:.05pt'><?php echo $r[nomor_pendaftaran]?><Br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[tanggal_pendaftaran]; ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
</span></span></p>  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.95pt'>
  <td width=60 valign=top style='width:45.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:21.95pt'>
  <p class=MsoNormal style='margin-top:.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:14.85pt;
  margin-bottom:0in;margin-left:16.55pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>NO</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td width=372 colspan=2 valign=top style='width:279.15pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.95pt'>
  <p class=MsoNormal style='margin-top:.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:109.85pt;
  margin-bottom:0in;margin-left:111.5pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>JENIS DOKUMEN</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td width=192 valign=top style='width:143.85pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.95pt'>
  <p class=MsoNormal style='margin-top:.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:56.65pt;
  margin-bottom:0in;margin-left:58.3pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>NOMOR</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
  <td width=114 valign=top style='width:85.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:21.95pt'>
  <p class=MsoNormal style='margin-top:.45pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:27.65pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>TANGGAL</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:411.3pt'>
  <td width=60 valign=top style='width:45.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?PHP
  for($i=1;$i<=$jml_doc;$i++){
  		echo $i."<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  }
  ?>
  </span></p>  </td>
  <td width=372 colspan=2 valign=top style='width:279.15pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
  $doc = mysql_query("select * from detail_lamp_document9 where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($r_doc = mysql_fetch_array($doc)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$r_doc[jenis_document]."<br><br><br><br>";
  }
  ?>
  </span></p>  </td>
  <td width=192 valign=top style='width:143.85pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
  $doc = mysql_query("select * from detail_lamp_document9  where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($r_doc = mysql_fetch_array($doc)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$r_doc[nomor_document]."<br><br><br><br>";
  }
  ?>
  </span></p>  </td>
  <td width=114 valign=top style='width:85.5pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:411.3pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
  $doc = mysql_query("select * from detail_lamp_document9 where nomor_pengajuan='$r[nomor_pengajuan]'");
  while($r_doc = mysql_fetch_array($doc)){
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$r_doc[tgl_document]."<br><br><br><br>";
  }
  ?>
  </span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.2pt'>
  <td width=738 colspan=5 valign=top style='width:553.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:318.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>E. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANG<span style='letter-spacing:.1pt'>A</span>N<span
  style='letter-spacing:-.25pt'> </span>PENGUSAHA<span style='letter-spacing:
  -.5pt'> </span>TPB</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:79.75pt'>
  <td width=738 colspan=5 valign=top style='width:553.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:79.75pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:21.95pt;margin-bottom:
  0in;margin-left:354.8pt;margin-bottom:.0001pt;text-indent:-.5in;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Dengan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>ini</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.1pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>saya</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.15pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>m<span style='letter-spacing:-.05pt'>e</span>nyatakan</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.05pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>bertangg<span style='letter-spacing:-.05pt'>u</span>ng</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.3pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>jawab</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  -.2pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>atas</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> <span class=SpellE>kebe<span style='letter-spacing:-.05pt'>n</span>aran</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>hal-hal</span><span
  style='letter-spacing:-.25pt'> </span>yang <span class=SpellE>diberitahukan</span><span
  style='letter-spacing:-.5pt'> </span><span class=SpellE><span
  style='letter-spacing:-.05pt'>d</span>alam</span> <span class=SpellE>pemberitahuan</span><span
  style='letter-spacing:-.55pt'> </span><span class=SpellE>pabean</span><span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>ini</span>.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  6.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:354.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Bekasi,  <span class=SpellE>Tg<span
  style='letter-spacing:.05pt'>l</span></span><span class=GramE>. 
    <?php
     $tgl = date('d-M-Y');
	 echo $tgl;
  ?>
  </span>
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:7.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:7.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=right style='margin-top:0in;margin-right:45.25pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>(<span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha_asal]; ?></span> )</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=60 style='border:none'></td>
  <td width=117 style='border:none'></td>
  <td width=255 style='border:none'></td>
  <td width=192 style='border:none'></td>
  <td width=114 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>
<?php } ?>
<span style='font-size:12.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";mso-ansi-language:EN-US;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<?php if ($r[tujuan_pengiriman]=='Disubkontrakan'){ ?>
<div class=WordSection20>

<p class=MsoNormal style='margin-top:.2pt;margin-right:0in;margin-bottom:0in;
margin-left:0in;margin-bottom:.0001pt;line-height:4.0pt;mso-line-height-rule:
exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
style='font-size:4.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:5.2pt;border-collapse:collapse;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.0pt'>
  <td width=177 colspan=2 valign=top style='width:132.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal style='margin-top:.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:40.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:18.0pt;font-family:"Book Antiqua","serif";mso-bidi-font-family:
  "Book Antiqua"'>BC 2.7</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=561 colspan=6 valign=top style='width:420.8pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:40.0pt'>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:159.95pt;
  margin-bottom:0in;margin-left:159.85pt;margin-bottom:.0001pt;text-align:center;
  line-height:13.7pt;mso-line-height-rule:exactly;mso-pagination:none;
  mso-layout-grid-align:none;text-autospace:none'><b><span style='font-size:
  12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>LEMBAR<span
  style='letter-spacing:-.45pt'> </span>LAMPIRAN</span></b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:6.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:6.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='margin-top:0in;margin-right:92.75pt;
  margin-bottom:0in;margin-left:92.6pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><b><span style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>KONVERSI<span style='letter-spacing:
  -.4pt'> </span>PEMAKAIAN<span style='letter-spacing:.05pt'> </span>BAHAN
  (SUBKONTRAK)</span></b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.75pt'>
  <td width=738 colspan=8 valign=top style='width:553.5pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:17.75pt'>
  <p class=MsoNormal style='margin-top:1.7pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:12.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>HEADER</span></b><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.4pt'>
  <td width=738 colspan=8 valign=top style='width:553.5pt;border-top:none;
  border-left:solid black 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-left-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:52.4pt'>
  <p class=MsoNormal align=right style='margin-top:2.8pt;margin-right:5.15pt;
  margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;text-align:right;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Halaman</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>1<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE><span class=GramE>dari</span></span><span
  class=GramE><span style='letter-spacing:-.15pt'> </span>...<span
  style='letter-spacing:.05pt'>.</span>.<span style='letter-spacing:.05pt'>.</span>..</span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:8.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt'>NOMOR<span
  style='letter-spacing:.2pt'> </span><span class=GramE>PENGAJUAN<span
  style='letter-spacing:-.5pt'> </span><span style='font-weight:normal'>:</span></span></span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";position:relative;top:1.0pt;mso-text-raise:-1.0pt;letter-spacing:
  -.05pt'><span style='mso-spacerun:yes'> </span></span><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";
  position:relative;top:1.0pt;mso-text-raise:-1.0pt;letter-spacing:.05pt'>.</span><span class="MsoNormal" style="margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none"><?php echo $r[nomor_pengajuan];?></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>
    <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:311.1pt;margin-bottom:.0001pt;line-height:7.1pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>
  <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.55pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>A.<span style='mso-spacerun:yes'>     </span><span
  style='letter-spacing:.55pt'><span style='mso-spacerun:yes'> </span></span>KANTOR<span
  style='letter-spacing:-.35pt'> </span>PABEAN</span></b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:
  0in;margin-left:13.95pt;margin-bottom:.0001pt;line-height:7.85pt;mso-line-height-rule:
  exactly;mso-pagination:none;tab-stops:98.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow";position:relative;top:1.0pt;mso-text-raise:
  -1.0pt'>1.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  1.8pt'><span style='mso-spacerun:yes'> </span></span>Kantor<span
  style='letter-spacing:-.25pt'> </span><span class=SpellE><span class=GramE>A<span
  style='letter-spacing:.05pt'>s</span>al</span></span><span class=GramE><span
  style='mso-tab-count:1'>             </span>: <span style='letter-spacing:
  .05pt'><span style='mso-spacerun:yes'> </span></span><?php echo $r[kantor_pabean_asal]; ?></span></span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:53.9pt'>
  <td width=408 colspan=5 valign=top style='width:4.25in;border:solid black 1.0pt;
  border-top:none;mso-border-left-alt:solid black .5pt;mso-border-bottom-alt:
  solid black .5pt;mso-border-right-alt:solid black .5pt;padding:0in 0in 0in 0in;
  height:53.9pt'>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:65.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>2.<span
  style='mso-spacerun:yes'>    </span><span style='letter-spacing:1.8pt'><span
  style='mso-spacerun:yes'> </span></span>Kantor<span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>Tujuan</span><span class=GramE><span
  style='mso-tab-count:1'>         </span><span style='mso-spacerun:yes'> 
  </span>: <span style='letter-spacing:.05pt'><span
  style='mso-spacerun:yes'> </span></span></span><span class="GramE"><?php echo $r[kantor_pabean_tujuan]; ?></span></span>             </p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:65.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><b>B.<span style='mso-spacerun:yes'>    </span><span
  style='letter-spacing:.15pt'><span style='mso-spacerun:yes'> </span></span>JENIS<span
  style='letter-spacing:-.25pt'> </span>TPB ASAL<span style='mso-tab-count:
  1'>           </span> :<span style='letter-spacing:.05pt'>
    </span></b><span style="letter-spacing:.05pt"> <?php echo $r[jenis_tpb_asa]; ?></span></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:65.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:8.0pt;line-height:169%;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'><b>C.<span style='mso-spacerun:yes'>    </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'> </span></span>JENIS TPB TUJUAN<span style='mso-tab-count:
  1'>         </span>: </b><?php echo $r[jenis_tpb_tujuan]; ?></span></p>
  <p class=MsoNormal style='margin-top:4.3pt;margin-right:65.15pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;text-indent:8.8pt;line-height:
  169%;mso-pagination:none;tab-stops:95.0pt;mso-layout-grid-align:none;
  text-autospace:none'><span style='font-size:12.0pt;
  line-height:169%;font-family:"Times New Roman","serif"'>
    <o:p></o:p>
  </span><span style="font-size:8.0pt;line-height:169%;
  font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><b>D.<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span><span style='letter-spacing:
  .15pt'><span style='mso-spacerun:yes'>&nbsp;</span></span>TUJUAN PENGIRIMAN<span style='mso-tab-count:
  1'>&nbsp;&nbsp;</span>:<span style='letter-spacing:.05pt'> </span></b><?php echo $r[tujuan_pengiriman]; ?></span></p></td>
  <td width=330 colspan=3 valign=top style='width:247.5pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:53.9pt'>
  <p class=MsoNormal style='margin-top:.35pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal7111 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class="style2" style="font-weight: bold"><span style='line-height:196%;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: &quot;Arial Narrow&quot;'>F. KOLOM KHUSUS BEA DAN CUKAI</span></span></p>
  <p class=MsoNormal7111 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.05pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE5121111><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor</span></span> <span class=SpellE5121111><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pendaftaran : </span></span><span style='font-size:8.0pt;
  line-height:196%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'><span
  class=SpellE5121111><span style='letter-spacing:.05pt'><?php echo $r[nomor_pendaftaran]?><Br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</span><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>: <?php echo $r[tanggal_pendaftaran]; ?></span><span
  style='font-size:12.0pt;line-height:196%;font-family:"Times New Roman","serif"'>
  <o:p></o:p>
</span></span></p>
  <p class=MsoNormal1 style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:20.05pt'>
  <td width=408 colspan=5 valign=top style='width:4.25in;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:20.05pt'>
  <p class=MsoNormal align=center style='margin-top:1.3pt;margin-right:133.6pt;
  margin-bottom:0in;margin-left:133.6pt;margin-bottom:.0001pt;text-align:center;
  line-height:normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";
  mso-bidi-font-family:"Arial Narrow"'>Barang</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:.25pt'> </span><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Jadi</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=330 colspan=3 valign=top style='width:247.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:20.05pt'>
  <p class=MsoNormal style='margin-top:4.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:81.85pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Bahan</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .25pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>baku</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow";letter-spacing:-.2pt'> </span><span style='font-size:8.0pt;
  font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>y<span
  style='letter-spacing:-.05pt'>a</span>ng<span style='letter-spacing:-.05pt'> </span><span
  class=SpellE>digunakan</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:42.2pt'>
  <td width=36 valign=top style='width:27.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>No</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=246 colspan=2 valign=top style='width:184.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:11.5pt;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span class=SpellE><span style='font-size:8.0pt;
  line-height:115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pos</span></span><span style='font-size:8.0pt;line-height:
  115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";
  letter-spacing:.35pt'> </span><span class=SpellE><span style='font-size:8.0pt;
  line-height:115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>tarif</span></span><span style='font-size:8.0pt;line-height:
  115%;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>/<span
  style='letter-spacing:-.15pt'> </span>HS,<span style='letter-spacing:-.15pt'>
  </span><span class=SpellE>uraian</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>jumlah</span><span style='letter-spacing:-.25pt'> </span><span
  class=SpellE>dan</span><span style='letter-spacing:-.15pt'> </span><span
  class=SpellE>jenis</span><span style='letter-spacing:-.15pt'> </span><span
  class=SpellE>barang</span> <span class=SpellE>secara</span><span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>lengkap</span>,<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE>kode</span><span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>bara<span
  style='letter-spacing:-.05pt'>n</span>g</span><span style='letter-spacing:
  2.05pt'> </span><span class=SpellE>merk</span>,<span style='letter-spacing:
  -.2pt'> </span><span class=SpellE>tipe</span>,<span style='letter-spacing:
  -.05pt'> </span><span class=SpellE>ukura<span style='letter-spacing:.1pt'>n</span></span>,<span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>dan</span><span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>spesifikasi</span><span
  style='letter-spacing:-.4pt'> </span>lain</span><span style='font-size:12.0pt;
  line-height:115%;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Jumlah</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:1.25pt;margin-right:0in;margin-bottom:
  0in;margin-left:11.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Satuan</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:4.95pt;margin-bottom:
  0in;margin-left:6.8pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Pos</span></span><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow";letter-spacing:
  .35pt'> </span><span class=SpellE><span style='font-size:8.0pt;font-family:
  "Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>tarif</span></span><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>/<span style='letter-spacing:-.15pt'> </span>HS,<span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>ura<span
  style='letter-spacing:-.05pt'>i</span>an</span><span style='letter-spacing:
  -.05pt'> </span><span class=SpellE>jumlah</span><span style='letter-spacing:
  -.25pt'> </span><span class=SpellE>dan</span><span style='letter-spacing:
  -.15pt'> </span><span class=SpellE>jenis</span> <span class=SpellE>barang</span><span
  style='letter-spacing:-.25pt'> </span><span class=SpellE>secara</span> <span
  class=SpellE>lengkap</span>,<span style='letter-spacing:-.35pt'> </span><span
  class=SpellE>ko<span style='letter-spacing:-.05pt'>d</span>e</span> <span
  class=SpellE>barang</span> <span style='letter-spacing:-.05pt'><span
  style='mso-spacerun:yes'> </span></span><span class=SpellE>merk</span>,<span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>tipe</span>,<span
  style='letter-spacing:-.15pt'> </span><span class=SpellE>ukuran</span>,<span
  style='letter-spacing:-.05pt'> </span><span class=SpellE>dan</span> <span
  class=SpellE>spesifikasi</span><span style='letter-spacing:-.4pt'> </span>lain</span><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:0in;margin-bottom:
  0in;margin-left:17.0pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Jumlah</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:42.2pt'>
  <p class=MsoNormal style='margin-top:2.75pt;margin-right:0in;margin-bottom:
  0in;margin-left:14.9pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>Satuan</span></span><span style='font-size:12.0pt;font-family:
  "Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.2pt'>
  <td width=36 rowspan=7 valign=top style='width:27.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p>
  </span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">1</span></p>
  </td>
  <td width=246 colspan=2 rowspan=7 valign=top style='width:184.5pt;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgkonversi = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and cflag='A' limit 0,1");
	   $r_brgkonversi = mysql_fetch_array($brgkonversi);
	   echo $r_brgkonversi[uraian]." ".$r_brgkonversi[type]." ".$r_brgkonversi[spec]." ".$r_brgkonversi[kd_barang]." ".$r_brgkonversi[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=66 rowspan=7 valign=top style='width:49.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo number_format($r_brgkonversi[volume],0,'.','.');?></span></p>
  </td>
  <td width=60 rowspan=7 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgkonversi[satuan];?></span></p>
  </td>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 0,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 1,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 2,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 3,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 4,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 5,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 6,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:14.15pt'>
  <td width=36 rowspan=7 valign=top style='width:27.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span class="style4">2</span></p>
  </td>
  <td width=246 colspan=2 rowspan=7 valign=top style='width:184.5pt;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgkonversi = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and cflag='A' limit 1,1");
	   $r_brgkonversi = mysql_fetch_array($brgkonversi);
	   echo $r_brgkonversi[uraian]." ".$r_brgkonversi[type]." ".$r_brgkonversi[spec]." ".$r_brgkonversi[kd_barang]." ".$r_brgkonversi[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=66 rowspan=7 valign=top style='width:49.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo number_format($r_brgkonversi[volume],0,'.','.');?></span></p>
  </td>
  <td width=60 rowspan=7 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgkonversi[satuan];?></span></p>
  </td>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 7,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 8,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 9,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 10,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 11,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 12,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 13,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:14.2pt'>
  <td width=36 rowspan=7 valign=top style='width:27.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span class="style4">3</span></p>
  </td>
  <td width=246 colspan=2 rowspan=7 valign=top style='width:184.5pt;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgkonversi = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and cflag='A' limit 2,1");
	   $r_brgkonversi = mysql_fetch_array($brgkonversi);
	   echo $r_brgkonversi[uraian]." ".$r_brgkonversi[type]." ".$r_brgkonversi[spec]." ".$r_brgkonversi[kd_barang]." ".$r_brgkonversi[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=66 rowspan=7 valign=top style='width:49.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo number_format($r_brgkonversi[volume],0,'.','.');?></span></p>
  </td>
  <td width=60 rowspan=7 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgkonversi[satuan];?></span></p>
  </td>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 14,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 15,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 16,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 17,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 18,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 19,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 20,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:14.2pt'>
  <td width=36 rowspan=7 valign=top style='width:27.0pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span class="style4">4</span></p>
  </td>
  <td width=246 colspan=2 rowspan=7 valign=top style='width:184.5pt;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgkonversi = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and cflag='A' limit 3,1");
	   $r_brgkonversi = mysql_fetch_array($brgkonversi);
	   echo $r_brgkonversi[uraian]." ".$r_brgkonversi[type]." ".$r_brgkonversi[spec]." ".$r_brgkonversi[kd_barang]." ".$r_brgkonversi[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=66 rowspan=7 valign=top style='width:49.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo number_format($r_brgkonversi[volume],0,'.','.');?></span></p>
  </td>
  <td width=60 rowspan=7 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgkonversi[satuan];?></span></p>
  </td>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p>
  </span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
  <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 21,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 22,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 23,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 24,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;height:14.15pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 25,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 26,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;height:14.2pt'>
  <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;">
    <?php
       $brgbaku = mysql_query("SELECT a.*,b.* FROM detail_lamp_barang9 a,barang b WHERE a.kode_barang=b.kd_barang and a.nomor_pengajuan='$r[nomor_pengajuan]' and  cflag='C' limit 27,1");
	   $r_brgbaku = mysql_fetch_array($brgbaku);
	   echo $r_brgbaku[uraian]." ".$r_brgbaku[type]." ".$r_brgbaku[spec]." ".$r_brgbaku[kd_barang]." ".$r_brgbaku[nm_barang];
  ?>
  </span></p>
  </td>
  <td width=72 valign=top style='width:.75in;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[volume];?></span></p>
  </td>
  <td width=66 valign=top style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span><span style="font-size:
  8.0pt;font-family:&quot;Arial Narrow&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Arial Narrow&quot;"><?php echo $r_brgbaku[satuan]; ?></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:34;height:14.2pt'>
  <td width=408 colspan=5 rowspan=2 valign=top style='width:4.25in;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:12.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=330 colspan=3 valign=top style='width:247.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:14.2pt'>
  <p class=MsoNormal style='margin-top:2.05pt;margin-right:0in;margin-bottom:
  0in;margin-left:5.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><b><span
  style='font-size:8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:
  "Arial Narrow"'>F. <span style='letter-spacing:.8pt'><span
  style='mso-spacerun:yes'> </span></span>TANDA<span style='letter-spacing:
  -.3pt'> </span>TANGAN<span style='letter-spacing:-.35pt'> </span>PENGUSAHA<span
  style='letter-spacing:-.5pt'> </span>TPB</span></b><span style='font-size:
  12.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:35;mso-yfti-lastrow:yes;height:104.3pt'>
  <td width=330 colspan=3 valign=top style='width:247.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0in 0in 0in 0in;height:104.3pt'>
  <p class=MsoNormal style='margin-top:.95pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:14.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:14.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:13.5pt;margin-bottom:
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
  "Arial Narrow"'> <span class=SpellE>kebe<span style='letter-spacing:-.05pt'>n</span>aran</span>
  <span class=SpellE>hal-hal</span><span style='letter-spacing:-.25pt'> </span>yang<span
  style='letter-spacing:-.2pt'> </span><span class=SpellE>diberitahukan</span> <span
  class=SpellE>dalam</span><span style='letter-spacing:-.2pt'> </span><span
  class=SpellE>pemberitahuan</span> <span class=SpellE>pab<span
  style='letter-spacing:-.05pt'>e</span>an</span><span style='letter-spacing:
  -.15pt'> </span><span class=SpellE>ini</span>.<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:.2pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:5.0pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:5.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:41.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>Bekasi,  <span class=SpellE>Tg<span
  style='letter-spacing:.05pt'>l</span></span><span class=GramE>. 
    <?php
     $tgl = date('d-M-Y');
	 echo $tgl;
  ?>
  </span></span></p>
  <p class=MsoNormal style='margin-top:.2pt;margin-right:0in;margin-bottom:
  0in;margin-left:0in;margin-bottom:.0001pt;line-height:6.5pt;mso-line-height-rule:
  exactly;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:6.5pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  10.0pt;mso-line-height-rule:exactly;mso-pagination:none;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
  margin-left:113.1pt;margin-bottom:.0001pt;line-height:normal;mso-pagination:
  none;mso-layout-grid-align:none;text-autospace:none'><span style='font-size:
  8.0pt;font-family:"Arial Narrow","sans-serif";mso-bidi-font-family:"Arial Narrow"'>(<span style="letter-spacing:.05pt"><?php echo $r[nama_pengusaha_asal]; ?></span> )</span><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>
    <o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=36 style='border:none'></td>
  <td width=141 style='border:none'></td>
  <td width=105 style='border:none'></td>
  <td width=66 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=192 style='border:none'></td>
  <td width=72 style='border:none'></td>
  <td width=66 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal;mso-pagination:none;mso-layout-grid-align:none;text-autospace:none'><o:p>&nbsp;</o:p></p>

</div>
<?php } ?>
</body>

</html>
