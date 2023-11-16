<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
<div class="containerx">
            <h1 class="fc5">Make a Franchise Registration</h1>
            <form action="main.php" method="GET"> 
            <div class="row">
              <div class="col form-group ">
                <lable  class="lb" for="name">Name</lable><br>
                <input class="in1" type="text" name="name" placeholder="Enter Your Name" id="name" data-name="UserName">
                <p class="error" id="nameError"></p>
              </div>
              <div class="col form-group ">
                <lable  class="lb" for="emailId">Email</lable><br>
                <input class="in1"  type="email" name="email" placeholder="Enter Email" id="emailId" data-name="EmailId">
                <p class="error" id="emailError"></p>
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <lable  class="lb" for="mobileNumber">Mobile</lable><br>
                <input class="in1" type="tel" name="mobile" placeholder="Mobile No" id="mobileNumber" maxlength="10" data-name="Mobilenumber">
                <p class="error" id="mobileError"></p>
              </div>
              <div class="col form-group">
                <lable  class="lb" for="cityName">City</lable><br>
                <input class="in1"  type="text" name="cityname" placeholder="Your City" id="cityName" data-name="Cityname">
                 <p class="error" id="cityError"></p>
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <lable  class="lb" for="area">Area Size</lable><br>
                <select name="area"  class="in1" required="required" aria-required="true" id="area" data-name="Areasize">
                  <option value="select"  selected="selected">-Select-</option> 
                  <option value="12x14 Feets">12x14 Feets</option>
                  <option value="20x20 Feets">20x20 Feets</option>
                  <option value="100x100 Feets">100x100 Feets</option>
              </select>
              <p class="error" id="areaError"></p>
              </div>
              <div class="col form-group">
                <lable  class="lb" for="budget">Budget</lable><br>
                <select name="budget"  class="in1" required="required" aria-required="true" id="budget" data-name="Budget">
                  <option value="select"  selected="selected">-Select-</option>
                  <option value="1 Lac">1 Lac</option>
                  <option value="2 Lac">2 Lac</option>
                  <option value="3 Lac">3 Lac</option>
                  <option value="Above 5 Lacs">Above 5 Lacs</option>
                  <option value="Above 10 Lacs">Above 10 Lacs</option>
              </select>
              <p class="error" id="budgetError"></p>
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <lable  class="lb" for="plan">When Do You Plan To Open</lable><br>
                <select name="duration"  class="in1" required="required" aria-required="true" id="plan" data-name="Plan to open">
                  <option value="select" selected="selected">-Select-</option>
                  <option >Within 30 Days</option>
                  <option>between 30-60 Days</option>
                  <option>Post 90 Days</option>
                  <option>Haven't Decided</option>
                  <option>Above 10 Lacs</option>
              </select>
              <p class="error" id="openError"></p>
              </div>
            <div class="col form-group">
                <lable  class="lb" for="timeToContact">What is the best time to contact You?</lable><br>
                <select name="call"  class="in1" required="required" aria-required="true" id="timeToContact" data-name="Contact Time">
                  <option value="select" selected="selected">-Select-</option>
                  <option>09.00-12.00 hrs</option>
                  <option>12.00-15.00 hrs</option>
                  <option>15.00-18.00 hrs</option>
                  
              </select>
              <p class="error" id="timeError"></p>
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <lable  class="lb" for="address">Address</lable><br>
                <textarea name="address"  class="in1" placeholder="Address" id="address" data-name="Address">
                  
                </textarea>
                <p class="error" id="addressError"></p>
              </div>
            <div class="col form-group">
                <lable  class="lb" for="message">Message</lable><br>
                <textarea name="message"  class="in1" placeholder="Message" id="message" data-name="Message">
                  
                  
                </textarea>
                <p class="error" id="mesError"></p>
              </div>
            </div>
            <button type= "submit" id="button" class="button" name="register">GET QUOTE</button>
            <button class="button"> <a href="table.php">
              View Report
             </a> </button>
        </form>
</div>
</body>
</html>
