<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


* {
  box-sizing: border-box;
}
ul{
  text-align: left;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #581845;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #900C3F;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
footer {
  background-color:  black;
  padding: 10px;
  text-align: center;
  color: white;
  
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
  <div class="topnav">
  <div id="nav">
<a href="Home">Home</a> |
<a href="women.php">women</a> |
<a href="men.php">Men</a>
<a href="kids.php">Kids</a>
<a href="blog.php">Blog</a>
<a href="#">Contact Me</a>
  
</div>

<h3>We want to hear from you</h3>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
   
    </div>
    <div class="column">
      <form method="POST" action="contactdatabase.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email..">
        
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      
      <ul style="list-style-type:none;">
 
  
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">

<p>&copy; 2019| Harriet's Fashion is your daily dose of high quality outfits| 
<a href="https://www.google.com/" target="_blank">Google</a>
<a href="https://www.yahoo.com.com/" target="_blank">Yahoo</a>
<a href="https://www.mail.google.com" target="_blank">Gmail</a></p></footer>
   
</ul>


      

    </div>
    
  </div>
</div>
</footer>

</body>
</html>
