<?php $title = 'Ace in the Hole Multisport Events | Contact Us'; ?>
<?php $currentPage = 'contact'; ?>
<?php include('includes/head.php'); ?>

<body>
    
<?php include('includes/navbar.php'); ?>


    <main>
        <div class="relative">
    <img src="images/track.jpg" alt="track numbers background" class="hero">
    <h2 class="textover">Heading Goes Here</h2>
    <p class="text-over">Webtwo ipsum ebay wikia plugg zoodles, ning odeo. boxbe etsy. Ngmoco akismet kazaa meevee . </p>
    </div>
        <div class="form-style">
        <h3>Contact Us</h3>
<form method="post" action="connections/insertcon.php">
    <div class="inner-wrap">  
<label>Name: <input type="text" name="name" required/><span class="error">* required</span></label><br><br>
<label>Phone Number: <input type="text" name="phone" /></label><br><br>
<label>E-Mail: <input type="text" name="email" required/><span class="error">* required</span></label><br><br>
<label>Comments: <textarea name="comments" rows="5" cols="40" required/></textarea><span class="error">* required</span></label><br><br>
 
<input type="submit"/>
</form>
    </div></div>
             
</main>


<?php include('includes/footer.php'); ?>
