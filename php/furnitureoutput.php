<?php

if(isset($_POST["submit"]))
{
    $id=$_POST["id"];
    $name=$_POST["name"];
    $material=$_POST["material"];
    $price=$_POST["price"];
 
   ?>

<html>
    <head>
        
        <style>
            
            table{
                    width:250;
                    height:250;
                    background-color: lightgray;
                    
                }
            td{
                    
                    text-align: center;
                    
                }
            
        </style>
        
    </head>
    
    <body>
    <center>
        <br><br>
            
                <h1 style="color:crimson"><u>Furniture Mart</u></h1>
                <h3 style="color:crimson"> Your Product </h3>
            <br>
      <table border='1'>
                
                <tr>
                    <th width="70">Item Id</th>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Material</th>
                 <td><?php echo $material; ?></td>
                </tr> 
                <tr>
                    <th>Price</th>
                    <td><?php echo $price; ?> Rs.</td>
                </tr>
                
            </table>
    </center>
    </body>
    
</html>

<?php
    
}

?>