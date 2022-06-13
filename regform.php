<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Registration</title>
    <link rel="stylesheet" href="style.css">
    <img src="img4.jpg">
</head>
<h2>Register Your Vote</h2>
<form action="action.php" method="post" enctype="multipart/form-data">

    <label>Enter Your Name</label>
    <input type ="text" name="name" ></br>
    <label>Enter Your Address</label>
    <input type="text" name="address" ></br>
    <label>Enter Your CNIC</label>
    <input type="text" name="Id"></br>
    <label>Enter Your Total Votes</label>
    <input type="text" name="votes"></br>
    <label>Upload Your Picture</label>
    <input type="file" name="photo" value=""></br>

    <button type="submit" name="submit"> Submit </button>
   <h3> <a href="retrive.php" > DATA </a></h3>

</form>

<body>
    
</body>
</html>