function Time() 
           { 
           var today=new Date() 
           var h=today.getHours() 
           var m=today.getMinutes() 
           //var s=today.getSeconds() 
           //add a zero in front of numbers which<10 
           h=checkTime(h) 
           m=checkTime(m) 
           //s=checkTime(s) 
           document.getElementById('Time').innerHTML=h+":"+m
           t=setTimeout('Time()',100) 
           } 
           //add a zero in front of numbers which<10 
           function checkTime(i) 
           { 
             if (i<10) 
           { 
             i="0" + i 
           } 
             return i 
           } 