<?php
include('include/db.php');
include('create.php');
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
            <div class="form-group">
                <div class="input-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter first name" required>
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

                    <button><a href="update.php">Update-Page</a></button>
                   
                    
                </div>
            </div>
            <button type="submit" name="BtnInsert" class="submit-btn">
                <span>Insert Record</span>
            </button>
        </form>

        <div class="showdata">
            <h2>Records</h2>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   if(isset($Show) && mysqli_num_rows($Show) > 0) {
                       while($row = mysqli_fetch_array($Show)) {
                           echo "<tr>";
                           echo "<td>" . htmlspecialchars($row['fname']) . "</td>";
                           echo "<td>" . htmlspecialchars($row['lname']) . "</td>";
                           echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                           echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
                           echo "</tr>";
                       }
                   } else {
                       echo '<tr><td colspan="4" class="no-data">No records found. Add your first record above!</td></tr>';
                   }
                   ?>
                </tbody>
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