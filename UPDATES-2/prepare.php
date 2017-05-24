<?php $title = 'Ace in the Hole Multisport Events | Prepare'; ?>
<?php $currentPage = 'prepare'; ?>
<?php include('includes/head.php'); ?>

<body>
    
<?php include('includes/navbar.php'); ?>

    <main>
        <h2>Heading Goes Here</h2>
    <div class="section group">
	<div class="col span_1_of_2">
	Text Box with what to bring that is responsive
	</div>
	<div class="col span_1_of_2">
	<img src="images/placeholder.jpg" alt="placeholder stock photo for slideshow" class="hero">
	</div>
</div>  
    <div class="section group">
	<div class="col span_1_of_2">
	Text Box with registration costs that is responsive
	</div>
	<div class="col span_1_of_2">
	Text Box with registration details that is responsive
	</div>
</div>  

<h2>Register</h2>
        
<div class="form-style">        
    <h3>Sign Up Now!</h3>      
<form method="post" action="connections/insertreg.php">
 <div class="inner-wrap">   
<label>First and Last Name: <input type="varchar" name="name" required/><span class="error">* required </span></label>
      
<label>Birthdate: <input type="date" name="birthdate" required/><span class="error">* required </label></span>
      
<label>Gender: <select name="gender" required/> <option value="">Select...</option> <option value="1">Male</option> <option value="2">Female</option><option value="3">Non-Binary</option> <select><span class="error">* required </span></label>
      
<label>Address: <input type="varchar" name="address" required/><span class="error">* required </span></label>
      
<label>Phone Number: <input type="varchar" name="phone" required/><span class="error">* required </span></label>
      
<label>E-Mail: <input type="varchar" name="email" required/><span class="error">* required </span></label>
    
<label>Select Your Course: <select name="course" required> <option value="">Select...</option> 
<option value="1">Long Course, $240</option> 
<option value="2">Olympic, $110</option>
<option value="3">10K, $50</option>
<option value="4">Half Marathon, $75</option> 
<option value="5">Sprint, $90</option>
<option value="6">Try-a-Tri, $65</option> </select><span class="error">* required </span>
 </label>
    
<label>Shirt Size: <select name="shirt"> <option value="">Select...</option> <option value="1">XS</option> <option value="2">S</option><option value="3">M</option><option value="4">L</option><option value="5">XL</option> </select><span class="error">* required </span></label>
    
<label>Participant or Volunteer?: <select name="type" required> <option value="">Select...</option> <option value="1">Participant</option> <option value="2">Volunteer</option></select><span class="error">* required </span></label>
      
<span class="policy">
         I agree to the terms and conditions: <input type="radio" name="disclaimer" <?php if (isset($disclaimer) && $disclaimer=="yes") echo "checked";?>value="Yes">Yes <br></span>
 
<input type="submit"/>
     </div></div>
</form>
        
<p>Packet Pick Up Info</p>
        
</main>
    
<?php include('includes/footer.php'); ?>