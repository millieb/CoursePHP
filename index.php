<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>    
    </head>
    <body>
    
        <form method='post' action='form.php'>
        <table>
            <?php 
            $array=array('name'=>'Name', 'lastName'=>'Last Name', 'address'=>'Address', 'phone'=>'Phone');
            foreach($array as $key=>$value):

            ?>
            <tr>
                <td><?php echo $value?>
                </td>
                <td>
                   <input type="text" name=<?php echo $key?>> 
                </td>
            </tr>
            <?php endforeach; ?> 
            

            <tr>
                <td>Sex
                </td>
                <td>
                   <input type="radio" name='sex' value='Mujer'>Mujer
                   <input type="radio" name='sex' value='Hombre'>Hombre
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Enviar">
                </td>
            </tr>
        </table>
        </form>
        <h1><?php echo "!!!!! {$_GET['answer']} gracias {$_GET['name']}"; ?> </h1>
    </body>
</html>

