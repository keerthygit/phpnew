<html>
    
    <head>
        
        <style>
            
            table{
                    width:300;
                    height:250;
                    background-color: lightgrey;
                    
                }
                input[type="submit" ]
                {
                    border-radius: 20%;
                     background-color: lightblue;
                    
                }
               input[type="text" ]
                {
                     background-color: lightgray ;
                    
                }
                input[type="reset" ]
                {
                    border-radius: 20%;
                    
                }
                
        </style>
        <script type="text/javascript">
            
            function validation()
            {
                if( document.forms.form1.id.value=="" )
                {
                    window.alert("Enter Item Id");
                    document.forms.form1.id.focus();
                    return false;
                    
                }
                else if( document.forms.form1.name.value=="" )
                {
                    window.alert("Enter Product Name");
                    document.forms.form1.name.focus();
                    return false;
                    
                }
                else if( document.forms.form1.material.value=="" )
                {
                    window.alert("Enter Material");
                    document.forms.form1.material.focus();
                    return false;
                    
                }
                else if( document.forms.form1.price.value=="" )
                {
                    window.alert("Enter Price");
                    document.forms.form1.price.focus();
                    return false;
                    
                }
                else
                {
                    window.alert("Added Successfully");
                    return true;
                }
                
                
            }
            
        </script>
        
    </head>
    <body>
      
        <form id="form1"  method="post" onsubmit="return validation()" action="furnitureoutput.php">
            <center>
                <br><br>
            
                <h1 style="color:crimson"><u>Furniture Mart</u></h1>
                <h3 style="color:crimson"> Add Product </h3>
            <br>
            <table border='1'>
                
                <tr>
                    <th width="110" >Item Id</th>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>Material</th>
                 <td><input type="text" name="material"></td>
                </tr> 
                <tr>
                    <th>Price</th>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td colspan='2'><center><input type="submit" name="submit" value="Submit" >&nbsp;&nbsp&nbsp<input type="reset" name="reset" value="Clear" ></center></td>
                </tr>
            </table>
            
            </center>
        </form>
        
    </body>
    
</html>