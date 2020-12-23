$(document).ready(function(){
    $("#not_body").load('../php/notice.php?table=registrar');
    $(".notice").css("color","#fff");
                   $("#notice").css("background","#224e90");
                  
                  var table='notice';
                 $("#notice").click(function(){
   
                       $("#not_body").load("../php/notice.php?table=registrar");
                       table='notices';
                       $(".events").css("color","#000");
                       $("#events").css("background","#fff");
                       $(".notice").css("color","#fff");
                       $("#notice").css("background","#224e90");
                       $(".tenders").css("color","#000");
                       $("#tenders").css("background","#fff");
                   
                 });
   
                 //events
                 
                
                 $("#events").click(function()
                 {
                       $("#not_body").load("../php/notice.php?table=recruitments");
                       table='recruitments';
                       $(".notice").css("color","#000");
                       $("#notice").css("background","#fff");
                       $(".events").css("color","#fff");
                       $("#events").css("background","#224e90");
                       $(".tenders").css("color","#000");
                       $("#tenders").css("background","#fff");
                 });
   
                   //tenders
   
   
                 $("#tenders").click(function(){
                   $(".tenders").css("color","#fff");   
                   $("#tenders").css("background","#224e90"); 
                   $("#not_body").load("../php/notice.php?table=tenders");
                   table='tenders';
                   $(".events").css("color","#000");
                   $("#events").css("background","#fff");
                   $(".notice").css("color","#000");
                   $("#notice").css("background","#fff");
                 });
                 
                 
   });