    function checkblank(cnt,lbl)
    {
    	var data=cnt.value.trim(); //abc
    	var len=data.length;
    	if(len==0)
		{
    	  lbl.innerHTML="Can not left blank";	  
		}
    	else
		{
		  lbl.innerHTML="";	
		}
    }


    function onlyalpha(cnt,lbl)
    {
		var data=cnt.value; //Monitor#345
    	var result=data.match(/[a-z|A-Z ]+/); //Monitor
    	if((data!=result)&&(data!=""))
		{
    	  lbl.innerHTML="Enter only alphabets";	  
		}
    	else
		{
    	  lbl.innerHTML="";	
		}
    	
     }

    function onlynumber(cnt,lbl)
    {
    	var data=cnt.value;  //20#00
    	var result=data.match(/[0-9]+/); //2000
    	if(data!=result)
		{
    	  lbl.innerHTML="Enter only number";	  
		}
    	else
		{
    	  lbl.innerHTML="";	
	    }
     }

    function checkrange(cnt,lbl,min,max)
    {
    	var data=eval(cnt.value);
    	if((data<min) || (data>max))
		{
    	  lbl.innerHTML="Value Between "+min+ " to "+max;	  
		}
    	else
		{
    	  lbl.innerHTML="";	
		}
     }

    function checklength(cnt,lbl,min,max)
    {
    	var data=cnt.value;
    	var len=data.length;

    	if((len<min) || (len>max))
		{
    	  lbl.innerHTML="Length Between "+min+ " to "+max;	  
		}
    	else
		{
    	  lbl.innerHTML="";	
		}
     }

    function checkemail(cnt,lbl)
    {
    	var data=cnt.value;
    	var ptrn=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    	if(!ptrn.test(data))
		{
    	  lbl.innerHTML="Invalid Email";	  
		}
    	else
		{
    	  lbl.innerHTML="";	
		}
     }
	 
	  function checkmobileno(cnt,lbl)
    {
    	var data=cnt.value;
    	var ptrn=/\d{10}/; 
    	if(!ptrn.test(data))
		{
    	  lbl.innerHTML="Invalid Mobile number";	  
		}
    	else
		{
    	  lbl.innerHTML="";	
		}
     }

	 function checkdate(cnt,lbl)
	 {
		var cdate=cnt.value;
		var sdate=new Date();
		if(sdate<cdate)
		{
          lbl.innerHTML="select current or future date ";
		}
		else
		{
			lbl.innerHTML="";
		}

	 }
