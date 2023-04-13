<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th>Select photo</th>
                <td><input type="file" name="img"></td>
            </tr>
            
            <tr>
                <th>Email</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="pass"></td>
            </tr>
            
            <tr>
                <th>Address</th>
                <td><textarea name="add"></textarea></td>
            </tr>
            <!-- call webservices to fecth all country list -->
            <tr>
                <th>Select country</th>
                <td><select name="country">
                    <option value="">-select country-</option>
                    <?php 
                    $url="http://country.io/names.json";
                    $countrylist=file_get_contents($url,true);
                    $data=json_decode($countrylist,true);
                    foreach($data as $country)
                    {
                    ?>
                    <option value="<?php echo $country;?>"><?php echo $country;?></option>
                    <?php 
                    }
                    ?>
                </td>
            </tr>
               <!-- call webservices to fecth all state list -->
               <tr>
                <th>Select state</th>
                <td><select name="state">
                    <option value="">-select state-</option>
                    <?php 
                    $url1="http://localhost/php830/advanced_php8/webservices/examples/state_list.json";
                    $statelist=file_get_contents($url1,true);
                    $data1=json_decode($statelist,true);
                    foreach($data1 as $state)
                    {
                    ?>
                    <option value="<?php echo $state;?>"><?php echo $state;?></option>
                    <?php 
                    }
                    ?>
                </td>
            </tr>

            
            <tr>
                
                <td><input type="submit" name="sub" value="Register"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>