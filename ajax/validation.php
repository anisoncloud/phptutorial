<script type="text/javascript">

var ajaxRequest;
function ajaxFunction(){
   try{
      // Opera, Firefox
      ajaxRequest = XMLHttpRequest();
   }catch(e){
      
      try{
         // internet exploere
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch(e){
         
         try{
         //internet explorer
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch(e){
            alert("Your Brosers Broke");
            return false;
         }
      }
   }
}

function vaidateUserId(){
   ajaxFunction();
   
}

</script>