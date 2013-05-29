<?php
session_start();

//Generate new session id
if(isset($_SESSION['cap_id'])) {
  //Fetch session
  $id = $_SESSION['cap_id'];
} else {
  header("Location: ./pin.html");
}

?>

</html><html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="index_files/filelist.xml">
<link rel=Edit-Time-Data href="index_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Capability-based Security Risk Estimation and Mitigation for Information
Systems</title>
<link rel=themeData href="index_files/themedata.thmx">
<link rel=colorSchemeMapping href="index_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:Zoom>FullPage</w:Zoom>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
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
   <w:SplitPgBreakAndParaMark/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
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
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 2"/>
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
  {font-family:Helvetica;
  panose-1:2 11 6 4 2 2 2 2 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-536859905 -1073711037 9 0 511 0;}
@font-face
  {font-family:Helvetica;
  panose-1:2 11 6 4 2 2 2 2 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-536859905 -1073711037 9 0 511 0;}
@font-face
  {font-family:Tahoma;
  panose-1:2 11 6 4 3 5 4 4 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
  {font-family:Verdana;
  panose-1:2 11 6 4 3 5 4 4 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-1593833729 1073750107 16 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin:0cm;
  margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
h2
  {mso-style-priority:9;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-link:"Heading 2 Char";
  mso-margin-top-alt:auto;
  margin-right:0cm;
  mso-margin-bottom-alt:auto;
  margin-left:0cm;
  mso-pagination:widow-orphan;
  mso-outline-level:2;
  font-size:18.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;
  font-weight:bold;}
a:link, span.MsoHyperlink
  {mso-style-noshow:yes;
  mso-style-priority:99;
  color:#0000EE;
  text-decoration:underline;
  text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
  {mso-style-noshow:yes;
  mso-style-priority:99;
  color:#551A8B;
  text-decoration:underline;
  text-underline:single;}
p
  {mso-style-noshow:yes;
  mso-style-priority:99;
  mso-margin-top-alt:auto;
  margin-right:0cm;
  mso-margin-bottom-alt:auto;
  margin-left:0cm;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
  {mso-style-noshow:yes;
  mso-style-priority:99;
  mso-style-link:"Balloon Text Char";
  margin:0cm;
  margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:8.0pt;
  font-family:"Tahoma","sans-serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
  {mso-style-noshow:yes;
  mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
  {mso-style-noshow:yes;
  mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
  {mso-style-noshow:yes;
  mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
  {mso-style-noshow:yes;
  mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  mso-pagination:widow-orphan;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;}
span.Heading2Char
  {mso-style-name:"Heading 2 Char";
  mso-style-noshow:yes;
  mso-style-priority:9;
  mso-style-unhide:no;
  mso-style-locked:yes;
  mso-style-link:"Heading 2";
  mso-ansi-font-size:13.0pt;
  mso-bidi-font-size:13.0pt;
  font-family:"Cambria","serif";
  mso-ascii-font-family:Cambria;
  mso-ascii-theme-font:major-latin;
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:major-fareast;
  mso-hansi-font-family:Cambria;
  mso-hansi-theme-font:major-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:major-bidi;
  color:#4F81BD;
  mso-themecolor:accent1;
  font-weight:bold;}
span.BalloonTextChar
  {mso-style-name:"Balloon Text Char";
  mso-style-noshow:yes;
  mso-style-priority:99;
  mso-style-unhide:no;
  mso-style-locked:yes;
  mso-style-link:"Balloon Text";
  mso-ansi-font-size:8.0pt;
  mso-bidi-font-size:8.0pt;
  font-family:"Tahoma","sans-serif";
  mso-ascii-font-family:Tahoma;
  mso-fareast-font-family:"Times New Roman";
  mso-fareast-theme-font:minor-fareast;
  mso-hansi-font-family:Tahoma;
  mso-bidi-font-family:Tahoma;}
span.GramE
  {mso-style-name:"";
  mso-gram-e:yes;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-size:10.0pt;
  mso-ansi-font-size:10.0pt;
  mso-bidi-font-size:10.0pt;}
@page WordSection1
  {size:612.0pt 792.0pt;
  margin:72.0pt 72.0pt 72.0pt 72.0pt;
  mso-header-margin:35.4pt;
  mso-footer-margin:35.4pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 @list l0
  {mso-list-id:1203598278;
  mso-list-type:hybrid;
  mso-list-template-ids:115661680 -1777153222 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
  {mso-level-text:%1-;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:54.0pt;
  text-indent:-18.0pt;
  mso-ansi-font-size:12.0pt;
  font-family:"Verdana","sans-serif";
  mso-ansi-font-weight:normal;
  mso-ansi-font-style:normal;}
@list l0:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:90.0pt;
  text-indent:-18.0pt;}
@list l0:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:126.0pt;
  text-indent:-9.0pt;}
@list l0:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:162.0pt;
  text-indent:-18.0pt;}
@list l0:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:198.0pt;
  text-indent:-18.0pt;}
@list l0:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:234.0pt;
  text-indent:-9.0pt;}
@list l0:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:270.0pt;
  text-indent:-18.0pt;}
@list l0:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:306.0pt;
  text-indent:-18.0pt;}
@list l0:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:342.0pt;
  text-indent:-9.0pt;}
@list l1
  {mso-list-id:1937396792;
  mso-list-type:hybrid;
  mso-list-template-ids:-2129990926 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l1:level1
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:54.0pt;
  text-indent:-18.0pt;}
@list l1:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:90.0pt;
  text-indent:-18.0pt;}
@list l1:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:126.0pt;
  text-indent:-9.0pt;}
@list l1:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:162.0pt;
  text-indent:-18.0pt;}
@list l1:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:198.0pt;
  text-indent:-18.0pt;}
@list l1:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:234.0pt;
  text-indent:-9.0pt;}
@list l1:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:270.0pt;
  text-indent:-18.0pt;}
@list l1:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:306.0pt;
  text-indent:-18.0pt;}
@list l1:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:342.0pt;
  text-indent:-9.0pt;}
ol
  {margin-bottom:0cm;}
ul
  {margin-bottom:0cm;}
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
  mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
  mso-para-margin:0cm;
  mso-para-margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:10.0pt;
  font-family:"Times New Roman","serif";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link="#0000EE" vlink="#551A8B" style='tab-interval:36.0pt'
alink="#FF0000">

<div class=WordSection1>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><a
name=top></a><br>
&nbsp; <br>
&nbsp; </p>

<p align=center style='text-align:center'><b><span style='font-size:24.0pt;
font-family:"Helvetica","sans-serif";color:navy'>Welcome to Risk Estimation
Survey</span></b> </p>

<p align=center style='text-align:center'><b><span style='color:#CC0000'><a
href="#People">People</a> | <a href="#Project">Project</a> | <a href="#Survey">Survey</a>
</span></b></p>

<div>

<div>

<div>

<div>

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>

</span></div>

</div>

</div>

</div>

</div>

<h2 align=center style='text-align:center'><a name=People></a><span
style='mso-fareast-font-family:"Times New Roman";color:#000099'>People</span><span
style='mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></h2>

<blockquote style='margin-top:5.0pt;margin-bottom:5.0pt'><!-- <h2><span style='font-size:13.5pt;color:#000099'>Graduated Students</span></h2> -->

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:54.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='mso-fareast-font-family:"Times New Roman"'><a
href="http://www.cs.purdue.edu/homes/bb"><span style='font-size:13.5pt'>Prof.
Bharat Bhargava</span></a><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:54.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='mso-fareast-font-family:"Times New Roman"'><a
href="http://www.win.tue.nl/~lothmane/"><span style='font-size:13.5pt'>Dr.
Lotfi Ben Othmane</span></a><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:54.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='mso-fareast-font-family:"Times New Roman"'><a
href="http://www.ruchith.org"><span style='font-size:13.5pt'>Ruchith Fernando</span></a><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:54.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
style='mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:13.5pt;mso-fareast-font-family:"Times New Roman"'><a
href="http://www.cs.purdue.edu/homes/rranchal">Rohit Ranchal</a></span><span
style='mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>

</blockquote>

<p class=MsoNormal align=right style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:right'><a href="#top">top</a></p>

<div>

<div>

<div>

<div>

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>

</span></div>

</div>

</div>

</div>

</div>

<h2 style='margin-left:36.0pt'><a name=Project></a><span style='font-size:14.0pt;
mso-fareast-font-family:"Times New Roman";color:#000099'>Introduction<o:p></o:p></span></h2>

<h2 style='margin-left:36.0pt'><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'>The goal of this survey is to
collect expert opinions about the likelihood of a set of threats to video
conferencing systems using two different approaches. You assume that the risk
estimate is performed at the inception stage of the project; that is, before
making choices concerning the technologyÑe.g., operating system and programming
language. You consider that there are successful attacks that exercise the
threats and the attacker is an individual hackerÑnot expert though. <o:p></o:p></span></h2>

<h2 style='margin-left:36.0pt'><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'>In the following we describe the
system and the steps of the survey.<o:p></o:p></span></h2>

<p class=MsoNormal align=right style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:right'><a href="#top">top</a></p>

<!-- <h2 style='margin-left:36.0pt;line-height:150%'><span style='font-size:12.0pt;
line-height:150%;font-family:"Verdana","sans-serif";font-weight:normal;
mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></h2>

<h2><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left> -->

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>


</span></h2>

<h2 style='margin-left:36.0pt'><span style='font-size:14.0pt;mso-fareast-font-family:
"Times New Roman";color:#000099'>Description of the Video Conferencing System</span><span
style='mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></h2>

<h2 style='margin-left:36.0pt'><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'>Video Conferencing (VC) system,
as depicts in the following figure, allows multiple users to remotely communicate
with each other and share applications and documents. A typical VC station may
use devices such as: camera for video input, television for video output,
microphone for audio input, speaker for audio output, and computer for data and
application sharing. The stations communicate without the use of third party
service. The assets of the VC system are the video, audio, and data captured by
the communicating stations, station firmware, and station hardware. <br>
<br>
</span><span style='font-size:13.5pt;mso-fareast-font-family:"Times New Roman";
font-weight:normal;mso-bidi-font-weight:bold;mso-no-proof:yes'><img border=0
width=800 height=242 id="_x0000_i1031"
src="http://www.cs.purdue.edu/homes/rranchal/images/VC-system.png"
alt="Video conferencing system"></span><span style='font-size:13.5pt;
mso-fareast-font-family:"Times New Roman";font-weight:normal'><o:p></o:p></span></h2>

<p class=MsoNormal align=right style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:right'><a href="#top">top</a></p>

<div>

<div>

<div>

<div>

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>

</span></div>

</div>

</div>

</div>

</div>

<h2 align=center style='text-align:center'><a name=Survey></a><span
style='mso-fareast-font-family:"Times New Roman";color:#000099'>Survey<o:p></o:p></span></h2>

<h2 style='text-align:justify'><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></h2>

<h2 style='margin-bottom:3.0pt;text-align:justify'><span style='font-size:12.0pt;
font-family:"Verdana","sans-serif";font-weight:normal;mso-bidi-font-weight:
bold'>Attackers could be interested to snoop on organization meetings stealthily,
view documents in the meeting rooms, or disturb the meeting schedules of the
staff of the organization and their partners. An attacker may have or acquire
certain capabilities to carry out a successful attack on VC station. We
appreciate that you provide us with your expert opinion of the likelihood of
the threats that the attacker can trigger. The steps are:<o:p></o:p></span></h2>

<h2 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:5.0pt;margin-left:
53.85pt;text-align:justify;text-indent:-17.85pt;mso-list:l0 level1 lfo4'><![if !supportLists]><span
style='font-size:12.0pt;font-family:"Verdana","sans-serif";mso-fareast-font-family:
Verdana;mso-bidi-font-family:Verdana;font-weight:normal;mso-bidi-font-weight:
bold'><span style='mso-list:Ignore'>1-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'>Please use the following link to
provide your opinions about the likelihood of the threats to the system and
select the scores that you believe appropriate, for the given factors that
describe the likelihood of exercising the threat. </span><span
style='font-size:12.0pt;font-family:"Verdana","sans-serif";font-weight:normal'>Please
click</span><span style='font-size:12.0pt;font-family:"Verdana","sans-serif";
font-weight:normal;mso-bidi-font-weight:bold'> <a href="threats.php">here</a><o:p></o:p></span></h2>

<p class=MsoListParagraphCxSpFirst style='margin-top:6.0pt;mso-margin-bottom-alt:
auto;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l0 level1 lfo4'><![if !supportLists]><span
style='font-family:"Verdana","sans-serif";mso-fareast-font-family:Verdana;
mso-bidi-font-family:Verdana'><span style='mso-list:Ignore'>2-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-family:"Verdana","sans-serif"'>Please use the following link to
provide your opinions about the attacker capabilities (e.g., attacker physical access
to street camera) <span style='mso-bidi-font-weight:bold'>that an attacker may
have or acquire. For each capability, please select an option corresponding to
the likelihood that an attacker may have or acquire that capability. Please
click <a href="cap.php">here</a></span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;mso-margin-bottom-alt:
auto;margin-left:53.85pt;mso-add-space:auto;text-indent:-17.85pt;mso-list:l0 level1 lfo4'><![if !supportLists]><span
style='font-family:"Verdana","sans-serif";mso-fareast-font-family:Verdana;
mso-bidi-font-family:Verdana'><span style='mso-list:Ignore'>3-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-family:"Verdana","sans-serif"'>Please use the following link to
provide your opinions about the likelihood of the threats to the system and <span
style='mso-bidi-font-weight:bold'>select </span>the scores that you believe
appropriate,<span style='mso-bidi-font-weight:bold'> for </span>the <span
style='mso-bidi-font-weight:bold'>given attributes that describe the likelihood
of exercising the threat.</span> Note that in this step, w<span
style='mso-bidi-font-weight:bold'>e provide the capabilities related to each
threat and request survey takers to select scores for given attributes.<b> </b>Please
click</span><b style='mso-bidi-font-weight:normal'> </b><span style='mso-bidi-font-weight:
bold'><a href="threat_cap.php"><span style='mso-bidi-font-weight:normal'>here</span></a></span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:6.0pt;mso-margin-bottom-alt:
auto;margin-left:53.85pt;mso-add-space:auto'><span style='font-family:"Verdana","sans-serif";
mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:6.0pt;mso-margin-bottom-alt:auto'><span
style='font-family:"Verdana","sans-serif";mso-bidi-font-weight:bold'>We thank
you for accepting to participate in this survey and provide your expert opinion.<br
style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p class=MsoNormal align=right style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:right'><a href="#top">top</a></p>

<div>

<div>

<div>

<div>

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>

</span></div>

</div>

</div>

</div>

</div>

<p class=MsoNormal align=center style='text-align:center'><span
style='mso-fareast-font-family:"Times New Roman"'>All the information collected
in this survey will be kept anonymous and will never be linked with the survey
takers.&nbsp; <o:p></o:p></span></p>

<div>

<div>

<div>

<div>

<div class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman"'>

<hr size=10 width="100%" noshade style='color:navy' align=left>

</span></div>

</div>

</div>

</div>

</div>

<p class=MsoNormal align=center style='text-align:center'><span
style='mso-fareast-font-family:"Times New Roman"'>Questions and comments: <a
href="mailto:bb-survey@cs.purdue.edu">bb-survey@cs.purdue.edu</a><o:p></o:p></span></p>

</div>

</body>

