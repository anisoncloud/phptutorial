<?php error_reporting(0);
include "config.php";
?>
<!doctype html>
<html>
<head>
    <title>How to Auto populate dropdown with jQuery AJAX</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery-1.12.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#sel_depart").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getUsers.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){
                        if(!response){
                            $("#sel_user").empty();
                            $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");
                        }else{

                        var len = response.length;                                              

                       $("#sel_user").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['name'];
                            $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");
                           }
                           }
                    }
                });
            });

        });
    </script>
</head>
<body>
<div class="container">
    <h1>Auto populate dropdown</h1>
    <div id="div_content">

        <div>Departments </div>
        <select id="sel_depart">
        <?php $sql = "select * from category";
        $result = mysql_query($sql);
        ?>
<option value="0">- Select -</option>
        <?php while( $row = mysql_fetch_array($result) ){ ?>

        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category'];?></option>
        
        <?php } ?>
        </select>
        <div class="clear"></div>

        <div>Users </div>
        <select id="sel_user">
            <option value="0">- Select -</option>
        </select>

    </div>
</div>
</body>
</html>

