!function(){$(function(){return $(".chosen").chosen()})}.call(this);
	function updateClock ( )
    {
    var currentTime = new Date ( );
    var currentHours = currentTime.getHours ( );
    var currentMinutes = currentTime.getMinutes ( );
    var currentSeconds = currentTime.getSeconds ( );
 
    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
 
    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
 
    // Convert the hours component to 12-hour format if needed
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
 
    // Convert an hours component of "0" to "12"
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;
 
    // Compose the string for display
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
     
     $("#date").html(currentTime.toDateString());
    $("#time").html(currentTimeString);        
 }

 
$(document).ready(function()
{
   setInterval('updateClock()', 1000);
   $(".main-content").mouseover(function(){
     $(".main-content").css("background-color","#669966");
})
     $(".main-content").mouseout(function(){
     $(".main-content").css("background-color","#f9f2f4");
})


});
    

    //ajax page loda
    $(document).ready(function(){
        //creating  teacher account profile
         $("ctaccount").click(function(){
           $("#home-widget").load("teacherProfile",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="success")
        alert("External content loaded successfully!");
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
          });

    });
       
       $(function(){
        $("[id^=image-icon]").rotate({ 
   bind: 
     { 
        mouseover : function() { 
            $(this).rotate({animateTo:360})
        },
        mouseout : function() { 
            $(this).rotate({animateTo:0})
        }
     } 

    });
       });

       //ajax page loading
       $(document).ready(function(){
        $("[id^=image-icon]").click(function(e){
            //e.preventDefault();
            var baseurl ="http://localhost/JmiAdmin/";
           var link= $(this).attr("href");
           $('.main-content').load(link);
           window.location.replace(baseurl + link);

           $.ajax({url:page,success: function(data){
            $('.main-content').html(data);
            }});


           
         return false;
        });

       });
            /* $(document).ready( function() {
            $('[id^=image-icon]').click( function() {
                var page = $(this).attr('href');
                $.ajax({
                    type: 'POST',
                    url: '/'+page,
                    data: page,
                    success: function(content) {
                       $('.main-content').html(content);  // replace
                    }
                });
                return false; // to stop link
            });
        }); */

;
