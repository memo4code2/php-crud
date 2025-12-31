<?php
include('include/db.php');
include('create.php');

if(isset($_POST['BtnUpdate'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $phone= $_POST['phone'];
    $ID= $_POST['id'];

    $sql= "UPDATE users
SET fname = '$fname', lname = '$lname'
WHERE id = '$ID'
"  ;

mysqli_query($conn,$sql);



}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
    </style>
</head>
<body>
    <div class="container">
         <button> <a href="delete.php"> DELETE-USER</a></button>
        <form action="" method="post">
            <h2>Add New Record</h2>
            <div class="form-group">
                <div class="input-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter first name" required>
                </div>

<div class="input-group">
                    <label for="fname">ID</label>
                    <input type="text" id="fname" name="id" placeholder="Enter ID" required>
                </div>

                <div class="input-group">
                    <label for="lname">Last Name</label> 
                    <input type="text" id="lname" name="lname" placeholder="Enter last name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>
                <div class="input-group">
                    <label for="id">Update-User</label>

                    <button><a href="index.php">HOME</a></button>
                   
                    
                </div>
            </div>
            <button type="submit" name="BtnUpdate" class="submit-btn">
                <span>Update</span>
            </button>



        </form>

        
            </table>
        </div>
    </div>

    <script>
        // Add floating animation to form on load
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.classList.add('floating');
            
            // Remove floating animation on scroll
            window.addEventListener('scroll', function() {
                form.classList.remove('floating');
            });
            
            // Add input focus effects
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>