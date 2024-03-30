<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Register</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="Donors.php">Blood Donors</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="index.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="Container">
        <header>Register the form to become a blood donor</header>
        <form method="post">
            <div class="form-group mt-2">
            <label for="gender">Gender *</label>
            <select name="gender">
            <option value='Male'> Male</option><option value='Female'> Female</option><option value='Others'> Others</option> </select>
            </div>
            <div class="form-group">
            <label class="m-0  color-dark" for="Your Name">Blood Donor Name *</label>
            <input type="text" class="form-control" placeholder="Full name" name="name">
            </div>
            <div class="form-group mt-2">
            <label class="m-0 color-dark" for="Contract Number">Phone Number *</label>
            <input type="text" class="form-control" placeholder="01*********" name="number">
            </div>
            <div class="form-group mt-2">
            <label class="m-0 color-dark" for="Contract Facebook">Contract Facebook</label>
            <input type="text" class="form-control" placeholder="Your Facebook ID URL" name="contract_fb">
            </div>
            <div class="form-group mt-2">
            <label>Blood Group Required *</label>
            <select name="blood_name" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A + (A POSITIVE)</option>
            <option value="A-">A - (A NEGATIVE)</option>
            <option value="B+">B + (B POSITIVE)</option>
            <option value="B-">B - (B NEGATIVE)</option>
            <option value="AB+">AB + (AB POSITIVE)</option>
            <option value="AB-">AB - (AB NEGATIVE)</option>
            <option value="O+">O + (O POSITIVE)</option>
            <option value="O-">O - (O NEGATIVE)</option>
            </select>
            </div>
            <div class="form-group mt-2">
            <label>Blood Status</label>
             <select name="blood_status" style="width: 250px;">
            <option value="">Blood Status</option>
            <option value="Regular & Ready">Regular & Ready To Donate Blood - নিয়মিত এবং প্রস্তুত</option>
            <option value="Irregular but Interested">Irregular but Interested - অনিয়মিত কিন্তু আগ্রহী</option>
            <option value="Time hasn't yet">Time hasn't yet - সময় হয়নি</option>
            <option value="Regular">Regular Blood Donate - নিয়মিত</option>
            <option value="Irregular">Irregular-অনিয়মিত</option>
            <option value="If necessary ">If necessary - প্রয়োজনে</option>
            </select>
            </div>
            <div class="form-group mt-2">
            <label>Date of Birth</label>
            <input type="date" name="birthday_date">
            </div>
            <div class="form-group mt-2">
            <label>Last Date of Donation</label>
            <input type="date" name="last_donation_date">
            </div>
            <div class="form-group mt-2">
            <label for="district">Present District *</label>
            <select id="country" name="district" required>
            <option value="">Select District</option>
            </select>
            </div>
            <div class="form-group mt-2">
            <label for="city">Present City *</label>
            <select id="state" name="city" required>
            <option value="">Select City</option>
            </select>
            </div>
            <div class="form-group mt-2">
            <label for="Zone">Present Zone</label>
            <input type="text" name='zone'>
            </div>
            
            <div class="form-group mt-2">
            <label for="Total Donation Time">Total Blood Donation Time</label>
             <select name="tota_donation_donate_time">
            <option value='0 Time'> 0 Time</option><option value='1st'> 1st</option><option value='2nd'> 2nd</option><option value='3rd'> 3rd</option><option value='4th'> 4th</option><option value='5th'> 5th</option><option value='6th'> 6th</option><option value='7th'> 7th</option><option value='8th'> 8th</option><option value='9th'> 9th</option><option value='10th'> 10th</option><option value='11th'> 11th</option><option value='12th'> 12th</option><option value='13th'> 13th</option><option value='14th'> 14th</option><option value='15th'> 15th</option><option value='16th'> 16th</option><option value='17th'> 17th</option><option value='18th'> 18th</option><option value='19th'> 19th</option><option value='20th'> 20th</option><option value='21st'> 21st</option><option value='22nd'> 22nd</option> </select>
            </div>
            <button>
                Register 
            </button>
            </form>
    </div>
</body>
</html>