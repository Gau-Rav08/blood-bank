<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   

    <style>

        *{margin: 0; padding: 0;}

        body{ color: white;}

        .donorform{
            width: 520px; 
            background:rgb(64, 119, 153);
            padding: 60px 30px;
            box-sizing: border-box;
            margin: 0 auto; 
            border-left: 2px solid black; 
            border-right: 2px solid black;          
           
        }

        input[type=submit] {
            background-color: white;            
            color: black;
            border: 2px solid black;
            padding: 12px 20px;            
            border-radius: 4px;
            cursor: pointer;
            text-align:center;
            height:50px; width: 450px;
            border-radius: 16px;
            }
        input[type=submit]:hover {
        background-color: black;
        color: white;
        text-align:center;
        height:50px; width: 450px;
        border-radius: 16px;
        }
        input{
            background-color: white;
            border: 1.5px solid black;
            color: black;
            border-radius: 5px;   
        }
        textarea{
            background-color: white;
            border: 1.5px solid black;
            color: black;
            border-radius: 5px;  
        }
    </style>

</head>
<body>
<?php include_once 'nav-bar.php';?>
    <div class="donorform">
        <form action="connect.php" method="post">

            <h1 style="text-align:center; color: white; ">Donor Registration</h1><br><hr><br><br>
                <label for="fullname"><b>Full Name</b></label><br><br>
                <input type="text" style="height:30px; width: 200px;" placeholder=" Eg: Parth Prajapati" name="fullname" id="fullname" required><br><br>
                
                <label><b>Gender</b></label><br><br>
                <input style="background-color: white; border: 2px solid #cc2406;" type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label><br><br>

                <label for="agelimit"><b>Age</b></label><br><br>
                <input type="number" id="agelimit" name="agelimit" min="18" max="65" required><br><br>
                

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

                <label for="address"><b>Address</b></label><br><br>
                <textarea id="address" name="address" placeholder=" Write your address over here.." style="height:90px; width: 400px;"></textarea><br><br>

                <label for="contactno"><b>Contact No.</b></label><br><br>
                <input type="text" style="height:30px; width: 200px;" name="contactno" id="contactno" required><br><br>

                <label for="email"><b>Email Id </b></label><br><br>
                <input type="email" style="height:30px; width: 300px;" placeholder=" Eg: parthdprajapati@gmail.com" name="email" id="email" required></i><br><br>
                <br><br>
                <input type="submit" value="Submit">
        </form><br><br><br>
    </div>  
</body>
</html>