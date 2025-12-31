<?php
include('include/db.php');

if(isset($_POST['Btndel'])){

  $id=$_POST['id'];

    $sql= "DELETE FROM users
WHERE id = '$id'
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
         
        <form action="" method="post">
            <h2>Add New Record</h2>
         

<div class="input-group">
                    <label for="fname">ID</label>
                    <input type="text" id="fname" name="id" placeholder="Enter ID" required>
                </div>


                  <button type="submit" name="Btndel" class="submit-btn">
                <span>delete</span>
            </button>




             

                    <button><a href="index.php">HOME</a></button>
                   
                    
                </div>
            </div>
          



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