<?php
// Initialize variables to store form data and error messages
$firstname = $lastname = $email = $phone_no = $resume = "";
$error = "";
$success = false;

// Process form submission

?>

<!DOCTYPE html>




<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Suvichak Jaroenpanit" />
    <title>Internship Submit Application Website</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body class="bg">

    
    <div class="container">
        <h2> Internship Registration Form</h2>
     
        <div>
        <Form action="mail.php" method="post" enctype="multipart/form-data">
           
                
                <div class="input-user">
                    <i class="fa fa-user user"></i>
                    <input type="text" placeholder="First Name" class="name" name="firstname" id="first_name" value="<?php echo $firstname; ?>" required>
                    <span>
                        <i class="fa fa-user user"></i>
                        <input type="text" placeholder="Last Name" class="name" name="lastname" id="last_name" value="<?php echo $lastname; ?>" required>
                    </span>
                </div>

                <Div class="input-email">
                    <i class="fa fa-envelope email"></i>
                   <label for="email"> <input  type="email" placeholder="your@examplegmail.com" class="emailtxt" name="email" id="email"  value="<?php echo $email; ?>" required> </label>
                </Div>

                <Div class="input-phone">
                    <i class="fa fa-phone phone"></i>
                    <input type="number" placeholder=" +66-xxx-xxx" class="phonetxt" name="phone_no" id="phone_no"  value="<?php echo $phone_no; ?>" required>
                </Div>

                <Div class="input-resume">
                    <Div class="container_resume" >
                        <i class="fa fa-file file"></i>
                        <h4>Please attach your Resume here</h4>
                        <input type="file" name="resume" required>
                    </Div>
                </Div>

                <Div class="input-submit">

                  <a href = "mail.php">  <input type="submit"  name="send"></a> 
                      

                </Div>
                
            </Form>
        </div>
    </div>


</body>




</html>
