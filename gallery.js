/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var pp=0;
 var str=new Array();
    str[0]="Welcome to NIT Patna";
    str[1]="Dr. APJ Abdul Kalam at 3rd Convocation of NIT Patna";
    str[2]="Main Building NIT Patna";
    str[3]="4th Convocation at NIT Patna";
    str[4]="M.Tech. degree holders at 4th Convocation";
    str[5]="Foundation Day Celebration at NIT Patna";
    str[6]="Administrative building NIT Patna";
$(window).ready(function() {
   

    $('.slide #slide1').show("fade",500);
                    
                

    $('#captiongallery').text(str[0]);
    $("#pause").hide();
                        $("#capbutton").hide();
                    $("#gallery").mouseout(function(){
                        $("#pause").hide();
                        $("#capbutton").hide();
                    });
                    $("#gallery").mouseover(function(){
                        
                        $("#capbutton").show();
                        $("#pause").show();
                    });
            var cap=0;
            $(".slide").mouseout(function(){
                       intrvl=setInterval(function(){timeslide()},5000);
                    });
                    $(".slide").mouseover(function(){
                        clearInterval(intrvl);                        
                    });
            $("#capbutton").click(function(){
                cap++;
                if(cap%2==0)
                    {
                        $("#capbutton").text('x');
                        $("#captiongallery").slideDown();
                        
                    }
                    
                else
                    {
                        $("#capbutton").text('show');
                        $("#captiongallery").slideUp();
                        
                    }
                    
            });
            
            var intrvl=setInterval(function(){timeslide()},5000);       
            $("#pause").click(function(){
                pp++;
                if(pp%2==0)
                    {
                        intrvl=setInterval(function(){timeslide()},5000);
                        $("#pause").text('||');
                    }
                else
                    {
                        clearInterval(intrvl);
                        $("#pause").text('â–¶');
                    }
                    
                            
            });
            function timeslide()
            {
                
                //increase image counter
                currentImage++;
                //if we are at the end let set it to 0
                if(currentImage>allImages) currentImage = 1;
                //calcualte and set position
                fadefunc(currentImage);
            }
            
    var currentImage = 1;

            //set image count 
            var allImages = $('.slide img').length;
            
            //setup slideshow frame width
            

            //attach click event to slideshow buttons
            $('#right').mousedown(function(){
                
                //increase image counter
                currentImage++;
                $(this).css('text-shadow','2px 1px 5px #000');
                //if we are at the end let set it to 0
                if(currentImage>allImages) currentImage = 1;
                //calcualte and set position
                fadefunc(currentImage);

            });
            $('#right').mouseup(function(){
                
            $(this).css('text-shadow','2px 1px 10px #000');
            });
            $('#left').mousedown(function(){
                
                //decrease image counter
                currentImage--;
                $(this).css('text-shadow','2px 1px 5px #000');
                //if we are at the end let set it to 0
                if(currentImage<1) currentImage = allImages;
                //calcualte and set position
                fadefunc(currentImage);

            });
            $('#left').mouseup(function(){
                
            $(this).css('text-shadow','2px 1px 10px #000');
            });
           
        });

        //calculate the slideshow frame position and animate it to the new position
        function fadefunc(pos){
            
            $('.slide img').hide("fade",500);
            $('.slide #slide'+pos).show("fade",500);
            $('#captiongallery').text(str[pos-1]);
        }