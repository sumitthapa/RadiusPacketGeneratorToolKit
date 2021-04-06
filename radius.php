<html>
<title>
Radius Packet Generater Tool
</title>
<body>
<?php #print_r(get_loaded_extensions());  echo print (phpinfo());
?>

<form action="radiustool.php" method='post' name='sumit' style="border:1px solid #ccc;background-color:#f2f2f2;">
  <div class="container" style='background-color:silver;'>
  <p style="text-align:right"> <a href='mailto:thapa.sumit6@gmail.com?subject=Radius Packet Generator Tool Glitch'>[ Report Glitch]</a> &nbsp;&nbsp;</p>
    <h1><font color='black'>[ Radius Packet Generator Tool BLR]<font size=2><i>by @SumitThapa</i></font></font></h1> 
	
    <hr>
	<br>
    <label for="email"><b>&nbsp;&nbsp; Radius IP_Address :</b></label>
    <input type="text" placeholder="Enter IP Address" style='height:30px;' value='10.40.19.235' name="ip" required>
    &nbsp;&nbsp; &nbsp;&nbsp;
   
  <label for="psw"><b> Radius Secret_Key :</b></label>
    <input type="text" placeholder="Secret Key" style='height:30px;' value='admin@123' name="skey" required>
	&nbsp;&nbsp;
	 <label for="psw"><b> Radius_Port :</b></label>
    <input type="text" placeholder="Port Number"  value='1812' style='height:30px;width:90px;' name="port" required>
	
	<br>
	
<hr>


&nbsp;&nbsp; &nbsp;<b>Radius Handle Type :</b> &nbsp;&nbsp;
<input type="radio" checked  onclick="return displayscreen1()" style='cursor:pointer;' value='1' name='rtype'>

RADIUS_ACCESS_REQUEST 
<input type="radio" onclick="return displayscreen2()" value='2' style='cursor:pointer;' name='rtype'>
RADIUS_ACCOUNTING_REQUEST
<input type="radio" onclick="return displayscreen2()" value='3' style='cursor:pointer;' name='rtype'>
RADIUS_DISCONNECT_REQUEST
<input type="radio" onclick="return displayscreen2()" value='4' style='cursor:pointer;' name='rtype'>
RADIUS_COA_REQUEST 


<hr>
<h3> &nbsp;&nbsp;[ Radius Attributes ]  &nbsp;&nbsp;<a href='RadiusPacketGeneratorToolKit.docx' download><font size=3>Supported Attributes [Click Here ]</font></a>  </h3>


<br>
<div id='screen'>
1. Radius Handle Type : &nbsp;&nbsp;
<select name='resourcehandle1' onchange='return autodisplay()' style='height:30px;'>
<option value='radius_​put_​addr'> radius_​put_​addr </option>
<option value='radius_​put_​attr'> radius_​put_​attr </option>
<option value='radius_​put_​int'> radius_​put_​int </option>
<option value='radius_​put_​string'> radius_​put_​string</option>
<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>
<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>
<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>
<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>
</select>
Attribute_type
<input type="text" placeholder="Example: RADIUS_Framed_IP_Address" value=RADIUS_USER_NAME style='height:30px;width:300px;' name="atype1">
Address_Value
<input type='hidden' name='count' value='1'>
<input type="text" placeholder="Enter Value" style='height:30px;' name="avalue1">
&nbsp;&nbsp; <img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes1()'>
<br><br>

</div>
	</div>
<!-- Display !-->
<div id='screen2'></div>
<!-- Display !-->

<script>

function autodisplay()
{
	
var val=document.sumit.resourcehandle1.value;
if(val=='radius_​put_​addr')
 {
document.getElementById("screen2").innerHTML="<br>Available Attribute_Type Option : <font color=blue>RADIUS_Framed_IP_Address </font>";
  }
else if(val=='radius_​put_​string')
  {
document.getElementById("screen2").innerHTML="<br> Available Attribute_Type Option :  <font color=blue> RADIUS_USER_NAME &nbsp;&nbsp; RADIUS_ACCT_SESSION_ID"+
"&nbsp;&nbsp; RADIUS_Framed_IPv6_Prefix  RADIUS_ACCT_SESSION_ID  &nbsp;&nbsp; RADIUS_MESSAGE_AUTHENTICATOR </font>";
  }
  else if(val=='radius_​put_​attr')
  {
document.getElementById("screen2").innerHTML="<br> Available Attribute_Type Option :  <font color=blue> RADIUS_USER_NAME &nbsp;&nbsp; RADIUS_USER_PASSWORD </font>";
  }
   else if(val=='radius_​put_​int')
  {
document.getElementById("screen2").innerHTML="<br> Available Attribute_Type Option :  <font color=blue> RADIUS_ACCT_INPUT_OCTETS &nbsp;&nbsp; RADIUS_ACCT_OUTPUT_OCTETS &nbsp;&nbsp; RADIUS_ACCT_STATUS_TYPE </font>";
  }
else
{
	document.getElementById("screen2").innerHTML="<Br> This Attribute_Type is not supported yet mail to <a href='mailto:sthapa@fortinet.com?subject=Radius Packet Generator Tool'>sthapa@fortinet.com [ Send Mail ]</a> ";
 }
 return true;
}
function addmoredes0()
{
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

if(val=='radius_​put_​addr') 
{  temp='radius_​put_​addr'; } else if(val=='radius_​put_​attr'){  temp='radius_​put_​addr'; } else if(val=='radius_​put_​int'){  temp='radius_​put_​int'; } 
else if(val=='radius_​put_​string'){  temp='radius_​put_​string'; } else if(val=='radius_​put_​vendor_​addr'){  temp='radius_​put_​vendor_​addr'; } else if(val=='radius_​put_​vendor_​attr')
{  temp='radius_​put_​vendor_​attr'; } else if(val=='radius_​put_​vendor_​int') {  temp='radius_​put_​vendor_​int'; } else if(val=='radius_​put_​vendor_​string'){  temp='radius_​put_​vendor_​string'; } 
else { temp='invalid_option'; }

document.getElementById("screen").innerHTML="<input type='hidden' name='count' value='2'>"+
"1. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle1' onchange='return autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp+"'>"+temp+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb1+"' name='atype1'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc1+"' name='avalue1'>"+
"<img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes1()'><br><br>";
}


function addmoredes1()
{
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

if(val=='radius_​put_​addr') 
{  temp='radius_​put_​addr'; } else if(val=='radius_​put_​attr'){  temp='radius_​put_​addr'; } else if(val=='radius_​put_​int'){  temp='radius_​put_​int'; } 
else if(val=='radius_​put_​string'){  temp='radius_​put_​string'; } else if(val=='radius_​put_​vendor_​addr'){  temp='radius_​put_​vendor_​addr'; } else if(val=='radius_​put_​vendor_​attr')
{  temp='radius_​put_​vendor_​attr'; } else if(val=='radius_​put_​vendor_​int') {  temp='radius_​put_​vendor_​int'; } else if(val=='radius_​put_​vendor_​string'){  temp='radius_​put_​vendor_​string'; } 
else { temp='invalid_option'; }

document.getElementById("screen").innerHTML="<input type='hidden' name='count' value='2'>"+
"1. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle1' onchange='return autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp+"'>"+temp+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb1+"' name='atype1'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc1+"' name='avalue1'>"+
"<br> 2. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle2' onchange='return autodisplay()' style='height:30px;'>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' name='atype2'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' name='avalue2'>"+
"&nbsp;&nbsp; <img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes2()'> "+
"<img src='cancel.png' style='height:30px;weight:30px;border-radius:50%;cursor:pointer;' onclick='addmoredes0()'> "+
"<br><br>";
}


function addmoredes2()
{
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

if(val=='radius_​put_​addr') 
{  temp='radius_​put_​addr'; } else if(val=='radius_​put_​attr'){  temp='radius_​put_​addr'; } else if(val=='radius_​put_​int'){  temp='radius_​put_​int'; } 
else if(val=='radius_​put_​string'){  temp='radius_​put_​string'; } else if(val=='radius_​put_​vendor_​addr'){  temp='radius_​put_​vendor_​addr'; } else if(val=='radius_​put_​vendor_​attr')
{  temp='radius_​put_​vendor_​attr'; } else if(val=='radius_​put_​vendor_​int') {  temp='radius_​put_​vendor_​int'; } else if(val=='radius_​put_​vendor_​string'){  temp='radius_​put_​vendor_​string'; } 
else { temp='invalid_option'; }

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

if(va2=='radius_​put_​addr') 
{  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​attr'){  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​int'){  temp2='radius_​put_​int'; } 
else if(va2=='radius_​put_​string'){  temp2='radius_​put_​string'; } else if(va2=='radius_​put_​vendor_​addr'){  temp2='radius_​put_​vendor_​addr'; } else if(va2=='radius_​put_​vendor_​attr')
{  temp2='radius_​put_​vendor_​attr'; } else if(va2=='radius_​put_​vendor_​int') {  temp2='radius_​put_​vendor_​int'; } else if(va2=='radius_​put_​vendor_​string'){  temp2='radius_​put_​vendor_​string'; } 
else { temp2='inva2id_option'; }

document.getElementById("screen").innerHTML="<input type='hidden' name='count' value='3'>"+
"1. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle1' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp+"'>"+temp+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  value='"+vb1+"' name='atype1'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;'  value='"+vc1+"'name='avalue1'>"+
"<br><br>2. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle2' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp2+"'>"+temp2+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb2+"' name='atype2'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc2+"'name='avalue2'>"+
"<br>3. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle3' onchange='autodisplay()' style='height:30px;'>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  name='atype3'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' name='avalue3'>"+
"&nbsp;&nbsp; <img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes3()'>"+
"<img src='cancel.png' style='height:30px;weight:30px;border-radius:50%;cursor:pointer;' onclick='addmoredes1()'> "+
"<br><br>";
}



function addmoredes3()
{
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

if(val=='radius_​put_​addr') 
{  temp='radius_​put_​addr'; } else if(val=='radius_​put_​attr'){  temp='radius_​put_​addr'; } else if(val=='radius_​put_​int'){  temp='radius_​put_​int'; } 
else if(val=='radius_​put_​string'){  temp='radius_​put_​string'; } else if(val=='radius_​put_​vendor_​addr'){  temp='radius_​put_​vendor_​addr'; } else if(val=='radius_​put_​vendor_​attr')
{  temp='radius_​put_​vendor_​attr'; } else if(val=='radius_​put_​vendor_​int') {  temp='radius_​put_​vendor_​int'; } else if(val=='radius_​put_​vendor_​string'){  temp='radius_​put_​vendor_​string'; } 
else { temp='invalid_option'; }

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

if(va2=='radius_​put_​addr') 
{  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​attr'){  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​int'){  temp2='radius_​put_​int'; } 
else if(va2=='radius_​put_​string'){  temp2='radius_​put_​string'; } else if(va2=='radius_​put_​vendor_​addr'){  temp2='radius_​put_​vendor_​addr'; } else if(va2=='radius_​put_​vendor_​attr')
{  temp2='radius_​put_​vendor_​attr'; } else if(va2=='radius_​put_​vendor_​int') {  temp2='radius_​put_​vendor_​int'; } else if(va2=='radius_​put_​vendor_​string'){  temp2='radius_​put_​vendor_​string'; } 
else { temp2='inva2id_option'; }

var va3=document.sumit.resourcehandle3.value;
var vb3=document.sumit.atype3.value;
var vc3=document.sumit.avalue3.value;

if(va3=='radius_​put_​addr') 
{  temp3='radius_​put_​addr'; } else if(va3=='radius_​put_​attr'){  temp3='radius_​put_​addr'; } else if(va3=='radius_​put_​int'){  temp3='radius_​put_​int'; } 
else if(va3=='radius_​put_​string'){  temp3='radius_​put_​string'; } else if(va3=='radius_​put_​vendor_​addr'){  temp3='radius_​put_​vendor_​addr'; } else if(va3=='radius_​put_​vendor_​attr')
{  temp3='radius_​put_​vendor_​attr'; } else if(va3=='radius_​put_​vendor_​int') {  temp3='radius_​put_​vendor_​int'; } else if(va3=='radius_​put_​vendor_​string'){  temp3='radius_​put_​vendor_​string'; } 
else { temp3='inva3id_option'; }

document.getElementById("screen").innerHTML="<input type='hidden' name='count' value='4'>"+
"1. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle1' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp+"'>"+temp+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  value='"+vb1+"' name='atype1'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;'  value='"+vc1+"'name='avalue1'>"+
"<br><br>2. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle2' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp2+"'>"+temp2+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb2+"' name='atype2'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc2+"'name='avalue2'>"+
"<br><br>3. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle3' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp3+"'>"+temp3+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb3+"' name='atype3'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;'  value='"+vc3+"' name='avalue3'>"+
"<br>4. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle4' onchange='autodisplay()' style='height:30px;'>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  name='atype4'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' name='avalue4'>"+

"&nbsp;&nbsp; <img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes4()'>"+
"<img src='cancel.png' style='height:30px;weight:30px;border-radius:50%;cursor:pointer;' onclick='addmoredes2()'> "+
"<br><br>";
}


function addmoredes4()
{
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

if(val=='radius_​put_​addr') 
{  temp='radius_​put_​addr'; } else if(val=='radius_​put_​attr'){  temp='radius_​put_​addr'; } else if(val=='radius_​put_​int'){  temp='radius_​put_​int'; } 
else if(val=='radius_​put_​string'){  temp='radius_​put_​string'; } else if(val=='radius_​put_​vendor_​addr'){  temp='radius_​put_​vendor_​addr'; } else if(val=='radius_​put_​vendor_​attr')
{  temp='radius_​put_​vendor_​attr'; } else if(val=='radius_​put_​vendor_​int') {  temp='radius_​put_​vendor_​int'; } else if(val=='radius_​put_​vendor_​string'){  temp='radius_​put_​vendor_​string'; } 
else { temp='invalid_option'; }

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

if(va2=='radius_​put_​addr') 
{  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​attr'){  temp2='radius_​put_​addr'; } else if(va2=='radius_​put_​int'){  temp2='radius_​put_​int'; } 
else if(va2=='radius_​put_​string'){  temp2='radius_​put_​string'; } else if(va2=='radius_​put_​vendor_​addr'){  temp2='radius_​put_​vendor_​addr'; } else if(va2=='radius_​put_​vendor_​attr')
{  temp2='radius_​put_​vendor_​attr'; } else if(va2=='radius_​put_​vendor_​int') {  temp2='radius_​put_​vendor_​int'; } else if(va2=='radius_​put_​vendor_​string'){  temp2='radius_​put_​vendor_​string'; } 
else { temp2='inva2id_option'; }

var va3=document.sumit.resourcehandle3.value;
var vb3=document.sumit.atype3.value;
var vc3=document.sumit.avalue3.value;

if(va3=='radius_​put_​addr') 
{  temp3='radius_​put_​addr'; } else if(va3=='radius_​put_​attr'){  temp3='radius_​put_​addr'; } else if(va3=='radius_​put_​int'){  temp3='radius_​put_​int'; } 
else if(va3=='radius_​put_​string'){  temp3='radius_​put_​string'; } else if(va3=='radius_​put_​vendor_​addr'){  temp3='radius_​put_​vendor_​addr'; } else if(va3=='radius_​put_​vendor_​attr')
{  temp3='radius_​put_​vendor_​attr'; } else if(va3=='radius_​put_​vendor_​int') {  temp3='radius_​put_​vendor_​int'; } else if(va3=='radius_​put_​vendor_​string'){  temp3='radius_​put_​vendor_​string'; } 
else { temp3='inva3id_option'; }



var va4=document.sumit.resourcehandle4.value;
var vb4=document.sumit.atype4.value;
var vc4=document.sumit.avalue4.value;

if(va4=='radius_​put_​addr') 
{  temp4='radius_​put_​addr'; } else if(va4=='radius_​put_​attr'){  temp4='radius_​put_​addr'; } else if(va4=='radius_​put_​int'){  temp4='radius_​put_​int'; } 
else if(va4=='radius_​put_​string'){  temp4='radius_​put_​string'; } else if(va4=='radius_​put_​vendor_​addr'){  temp4='radius_​put_​vendor_​addr'; } else if(va4=='radius_​put_​vendor_​attr')
{  temp4='radius_​put_​vendor_​attr'; } else if(va4=='radius_​put_​vendor_​int') {  temp4='radius_​put_​vendor_​int'; } else if(va4=='radius_​put_​vendor_​string'){  temp4='radius_​put_​vendor_​string'; } 
else { temp4='inva4id_option'; }


document.getElementById("screen").innerHTML="<input type='hidden' name='count' value='5'>"+
"1. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle1' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp+"'>"+temp+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  value='"+vb1+"' name='atype1'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;'  value='"+vc1+"'name='avalue1'>"+
"<br><br>2. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle2' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp2+"'>"+temp2+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb2+"' name='atype2'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc2+"'name='avalue2'>"+
"<br><br>3. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle3' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp3+"'>"+temp3+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;' value='"+vb3+"' name='atype3'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;'  value='"+vc3+"' name='avalue3'>"+
"<br><br>4. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle4' onchange='autodisplay()' style='height:30px;'>"+
"<option style='color:blue;' value='"+temp4+"'>"+temp4+"</option>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  value='"+vb4+"' name='atype4'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' value='"+vc4+"' name='avalue4'>"+
"<br>5. Radius Handle Type : &nbsp;&nbsp;&nbsp;"+
"<select name='resourcehandle5' onchange='autodisplay()' style='height:30px;'>"+
"<option value='radius_​put_​addr'> radius_​put_​addr </option>"+
"<option value='radius_​put_​attr'> radius_​put_​attr </option>"+
"<option value='radius_​put_​int'> radius_​put_​int </option>"+
"<option value='radius_​put_​string'> radius_​put_​string</option>"+
"<option value='radius_​put_​vendor_​addr'>radius_​put_​vendor_​addr </option>"+
"<option value='radius_​put_​vendor_​attr'> radius_​put_​vendor_​attr </option>"+
"<option value='radius_​put_​vendor_​int'> radius_​put_​vendor_​int</option>"+
"<option value='radius_​put_​vendor_​string'> radius_​put_​vendor_​string </option>"+
"</select>"+
"Attribute_type <input type='text' placeholder='Example: RADIUS_Framed_IP_Address' style='height:30px;width:300px;'  name='atype5'>"+
"Address_Value <input type='text' placeholder='Example: 10.0.0.1' style='height:30px;' name='avalue5'>"+
//"&nbsp;&nbsp; <img src='add.png' style='height:30px;weight:30px;border-radius:50%;cursor:crosshair;' onclick='addmoredes4()'>"+
" &nbsp;&nbsp; <img src='cancel.png' style='height:30px;weight:30px;border-radius:50%;cursor:pointer;' onclick='addmoredes3()'> "+
"<br><br>";
}
	</script>
	
<br><br>
&nbsp;&nbsp;&nbsp; <button type="submit" name='check' onclick="return startsqlfilter()" style='height:40px;width:200px;'> Generate Packet</button>
    </div>
  </div>
</form>
<div id='displayresult'>
<script>
function startsqlfilter()
{
 document.getElementById("displayresult").innerHTML=" <center><img src='loading.gif' style='width:250px;height:200px;'></center>";
  var count=document.sumit.count.value;
  var link='';
  if(count==1)
  {
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;
var ip=document.sumit.ip.value;
var port=document.sumit.port.value;
var rtype=document.sumit.rtype.value;
var skey=document.sumit.skey.value;
var link="count="+count+"&ip="+ip+"&port="+port+"&rtype="+rtype+"&skey="+skey+"&resourcehandle1="+val+"&atype1="+vb1+"&avalue1="+vc1;
  }
  else if(count==2)
  {
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

var ip=document.sumit.ip.value;
var port=document.sumit.port.value;
var rtype=document.sumit.rtype.value;
var skey=document.sumit.skey.value;

var link="count="+count+"&ip="+ip+"&port="+port+"&rtype="+rtype+"&skey="+skey+"&resourcehandle1="+val+"&atype1="+vb1+"&avalue1="+vc1;
var link2="&resourcehandle2="+va2+"&atype2="+vb2+"&avalue2="+vc2;
var link=link+link2;
  }
  
  else if(count==3)
  {
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

var va3=document.sumit.resourcehandle3.value;
var vb3=document.sumit.atype3.value;
var vc3=document.sumit.avalue3.value;

var ip=document.sumit.ip.value;
var port=document.sumit.port.value;
var rtype=document.sumit.rtype.value;
var skey=document.sumit.skey.value;

var link="count="+count+"&ip="+ip+"&port="+port+"&rtype="+rtype+"&skey="+skey+"&resourcehandle1="+val+"&atype1="+vb1+"&avalue1="+vc1;
var link2="&resourcehandle2="+va2+"&atype2="+vb2+"&avalue2="+vc2;
var link3="&resourcehandle3="+va3+"&atype3="+vb3+"&avalue3="+vc3;
var link=link+link2+link3;
  }
  
   else if(count==4)
  {
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

var va3=document.sumit.resourcehandle3.value;
var vb3=document.sumit.atype3.value;
var vc3=document.sumit.avalue3.value;

var va4=document.sumit.resourcehandle4.value;
var vb4=document.sumit.atype4.value;
var vc4=document.sumit.avalue4.value;


var ip=document.sumit.ip.value;
var port=document.sumit.port.value;
var rtype=document.sumit.rtype.value;
var skey=document.sumit.skey.value;

var link="count="+count+"&ip="+ip+"&port="+port+"&rtype="+rtype+"&skey="+skey+"&resourcehandle1="+val+"&atype1="+vb1+"&avalue1="+vc1;
var link2="&resourcehandle2="+va2+"&atype2="+vb2+"&avalue2="+vc2;
var link3="&resourcehandle3="+va3+"&atype3="+vb3+"&avalue3="+vc3;
var link4="&resourcehandle4="+va4+"&atype4="+vb4+"&avalue4="+vc4;
var link=link+link2+link3+link4;
  }
  else if(count==5)
  {
var val=document.sumit.resourcehandle1.value;
var vb1=document.sumit.atype1.value;
var vc1=document.sumit.avalue1.value;

var va2=document.sumit.resourcehandle2.value;
var vb2=document.sumit.atype2.value;
var vc2=document.sumit.avalue2.value;

var va3=document.sumit.resourcehandle3.value;
var vb3=document.sumit.atype3.value;
var vc3=document.sumit.avalue3.value;

var va4=document.sumit.resourcehandle4.value;
var vb4=document.sumit.atype4.value;
var vc4=document.sumit.avalue4.value;


var va5=document.sumit.resourcehandle5.value;
var vb5=document.sumit.atype5.value;
var vc5=document.sumit.avalue5.value;


var ip=document.sumit.ip.value;
var port=document.sumit.port.value;
var rtype=document.sumit.rtype.value;
var skey=document.sumit.skey.value;

var link="count="+count+"&ip="+ip+"&port="+port+"&rtype="+rtype+"&skey="+skey+"&resourcehandle1="+val+"&atype1="+vb1+"&avalue1="+vc1;
var link2="&resourcehandle2="+va2+"&atype2="+vb2+"&avalue2="+vc2;
var link3="&resourcehandle3="+va3+"&atype3="+vb3+"&avalue3="+vc3;
var link4="&resourcehandle4="+va4+"&atype4="+vb4+"&avalue4="+vc4;
var link5="&resourcehandle5="+va5+"&atype5="+vb5+"&avalue5="+vc5;
var link=link+link2+link3+link4+link5;
  }
  
  
  alert(link);

  var xmlhttpx=new XMLHttpRequest();
    xmlhttpx.onreadystatechange=function() {
        if (xmlhttpx.readyState==4 && xmlhttpx.status==200) {
            document.getElementById("displayresult").innerHTML=xmlhttpx.responseText;
        }
    }
    xmlhttpx.open("GET","processradiustool.php?"+link,true);
    xmlhttpx.send();
     return false;
}

</script>

</script>
</body>
</html>
