<?php
   $ip_address=$_GET['ip'];
   $port=$_GET['port'];
   $rtype=$_GET['rtype'];
   $shared_secret=$_GET['skey'];
   $count=$_GET['count'];
  
if($rtype==2 || $rtype==3 || $rtype==4) ## RADIUS_ACCOUNTING_REQUEST Code ###
{ 

$radius = radius_acct_open();
radius_add_server($radius, $ip_address, $port, $shared_secret, 5, 3);


if($rtype==2)
{
radius_create_request($radius, RADIUS_ACCOUNTING_REQUEST); $rtype='RADIUS_ACCOUNTING_REQUEST';
}
else if($rtype==3)
{
radius_create_request($radius, RADIUS_DISCONNECT_REQUEST); $rtype='RADIUS_DISCONNECT_REQUEST';
}
else if($rtype==4)
{
radius_create_request($radius, RADIUS_COA_REQUEST); $rtype='RADIUS_COA_REQUEST ';
}
else
{
	$rtype="Unsupported RADIUS_ACCOUNTING_REQUEST Type";
}
 print("<br><br><h3>[ Radius Server Configuration ]</h3>
   <b> Radius_Server_IP : $ip_address, Port : $port, Shared_Key : $shared_secret, Radius Handle Type: <font color=blue>$rtype</font> </b> 
   <Br><br> Total Group Attributes : $count <br>");
### Auto Add Attributes ##########
 for($j=1;$j<$count+1;$j++)
  {	
    $resourcehandle="resourcehandle".$j;
	$atypex="atype".$j;
	$avaluex="avalue".$j;
	$resourcehandle=$_GET["".$resourcehandle.""];
	$atype=$_GET[$atypex];
	$avalue=$_GET["".$avaluex.""];
	$length=strlen($avalue);
	echo"<font color=blue>Resource > $resourcehandle, [ Attributes Value Pair : t=$atype length=$length val= $avalue ] </font><br>";
  if(strcmp($resourcehandle,"radius_​put_​addr")==0) ##############
    {
	#radius_put_addr($radius,$atype,'10.1.1.2');
	if($atype=='RADIUS_Framed_IP_Address')
	{   radius_put_addr($radius,RADIUS_Framed_IP_Address,$avalue); }
      } 
else if(strcmp($resourcehandle,"radius_​put_​string")==0)#############################
    {
	
	if(strcmp($atype,"RADIUS_USER_NAME")==0)
	{ radius_put_string($radius,RADIUS_USER_NAME,$avalue);   }
   else if(strcmp($atype,"RADIUS_ACCT_SESSION_ID")==0)
	{ radius_put_string($radius,RADIUS_ACCT_SESSION_ID,$avalue);   } 
  else if(strcmp($atype,"RADIUS_Framed_IPv6_Prefix")==0)
	{ radius_put_string($radius,RADIUS_Framed_IPv6_Prefix,$avalue);   }
else if(strcmp($atype,"Acct_Input_Octets")==0)
	{ radius_put_string($radius,Acct_Input_Octets,$avalue);   } 
      }
else { echo "<font color=red>Unsupported Resource Type</font> <br>"; }
	   }
### Auto Add Attributes ##########
$result = radius_send_request($radius);
echo '<br><br> <font color=Green>  <b>Radius  Result</b> :' . radius_strerror($radius). "\n</font><br /> <br>";
switch ($result) {
	
case RADIUS_COA_ACK:
case RADIUS_DISCONNECT_ACK:
    $result = "CoA-ACK\n";
    break;
case RADIUS_COA_NAK:
case RADIUS_DISCONNECT_NAK:
    $result = "CoA-NAK\n";
    break;
default:
return "Unsupported reply\n";	
  }
  
  }
else{ ## RADIUS_ACCESS_REQUEST Code ###

$radius = radius_auth_open();
radius_add_server($radius, $ip_address, $port, $shared_secret, 5, 3);
radius_create_request($radius, RADIUS_ACCESS_REQUEST); 
$rtype='RADIUS_ACCESS_REQUEST';
print("<br><br><h3>[ Radius Server Configuration ]</h3>
   <b> Radius_Server_IP : $ip_address, Port : $port, Shared_Key : $shared_secret, Radius Handle Type: <font color=blue>$rtype</font> </b> 
   <Br><br> Total Group Attributes : $count <br>");
   
   for($j=1;$j<$count+1;$j++)
  {	
    $resourcehandle="resourcehandle".$j;
	$atypex="atype".$j;
	$avaluex="avalue".$j;
	$resourcehandle=$_GET["".$resourcehandle.""];
	$atype=$_GET[$atypex];
	$avalue=$_GET["".$avaluex.""];
	$length=strlen($avalue);
	echo"<font color=blue>Resource > $resourcehandle, [ Attributes Value Pair : t=$atype length=$length val= $avalue ] </font><br>";
   if(strcmp($resourcehandle,"radius_​put_​attr")==0)#############################
    {
	if(strcmp($atype,"RADIUS_USER_NAME")==0)
	{ radius_put_attr($radius,RADIUS_USER_NAME,$avalue); }
   else if(strcmp($atype,"RADIUS_USER_PASSWORD")==0)
	{ radius_put_attr($radius,RADIUS_USER_PASSWORD ,$avalue); }
      }
else { echo "<font color=red>Unsupported Resource Type</font> <br>"; }
	   }
$result = radius_send_request($radius);
echo '<br><br> <font color=green>  <b>Radius  Result</b> :' . radius_strerror($radius). "\n</font><br>";
switch ($result) {
case RADIUS_ACCESS_ACCEPT:
  // An Access-Accept response to an Access-Request indicating that the RADIUS server authenticated the user successfully.
  echo 'Authentication successful';
  break;
case RADIUS_ACCESS_REJECT:
  // An Access-Reject response to an Access-Request indicating that the RADIUS server could not authenticate the user.
  echo 'Authentication failed';
  break;
case RADIUS_ACCESS_CHALLENGE:
  // An Access-Challenge response to an Access-Request indicating that the RADIUS server requires further information in another Access-Request before authenticating the user.
  echo 'Challenge required';
  break;
default:
}
}

?>