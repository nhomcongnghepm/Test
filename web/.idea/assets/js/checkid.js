function CheckALL(counts)
{
	for(i=0;i<counts;i++)
	{
		
	if(document.getElementById("checkid").checked!="")
	{
	document.getElementById("checkid").checked	='checked';
	}else{
	document.getElementById("checkid").checked	='';	
	}
	}
}
