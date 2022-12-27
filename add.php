<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodstock Add</title>
    <style>
        *{margin: 0; padding: 0;}
        body{color: white;}
        .stockform{
            width: 400px; 
            background:#cf2c26;
            padding: 60px 30px;
            box-sizing: border-box;
            margin: 1% auto; 
            border: 2px solid black;
            border-radius: 30px; 
            padding-bottom: 30px;                      
        }
        input[type=submit] {
            background-color: white;            
            color: black;
            border: 2px solid black;
            padding: 12px 20px;            
            border-radius: 4px;
            cursor: pointer;
            text-align:center;
            height:50px; width: 350px;
            border-radius: 16px;
            }
        input[type=submit]:hover {
        background-color: black;
        color: white;
        text-align:center;
        height:50px; width: 350px;
        border-radius: 16px;
        }
        input{
            background-color: white;
            border: 1.5px solid black;
            color: black;
            border-radius: 5px;    
        }
    </style>

</head>
<body>
<?php 
include_once 'nav-bar.php'
?>
    <div class="stockform">
        <form action="addBlood.php" method="post">
            <h1 style="text-align:center; color: white; ">Bloodstock</h1><br><hr><br><br>
                <label for="donated_date"><b>Donated Date</b></label><br><br>
                <input type="text" style="height:30px; width: 200px;" placeholder=" dd/mm/yy" name="donated_date" id="donated_date" required><br><br>
                <label for="bloodgroup"><b>Blood Group</b></label><br><br>
                <select id="bloodgroup" style="height:30px;" name="bloodgroup">
                <option value="A+ve">A+ve</option>
                <option value="A-ve">A-ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="O+ve">O+ve</option>
                <option value="O-ve">O-ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="AB-ve">AB-ve</option>
                </select><br><br>

                <label for="complication"><b>Any Complications recently</b></label><br><br>
                <input type="text" style="height:30px; width: 200px;" name="complication" id="complication" required><br><br>
                
                <br><br>
                <input type="submit" value="Submit">
        </form><br><br><br>

    </div>
    
</body>
</html>