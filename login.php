<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head> 
 <body>
     <div class="container">
         <div class="title">Registration</div>
         <form action="#">
             <div class="user-details">
                 <div class="input-box">
                     <span class="details">Full Name</span>
                     <input type="text" placeholder="Enter your Name" required>
                 </div>
             <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your Username" required>
                </div>
            <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Email" required>
                </div>
            <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your Phone Number" required>
                </div> 
             <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your Password" required>
                </div> 
            <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Confirm your Password" required>
                </div>     
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one "></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender"> Prefer not to say </span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
            </div>
         </form>
     </div>
 </body>

    
</html>