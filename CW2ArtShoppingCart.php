<!DOCTYPE HTML>
<html>
<header>
<div class="header">
</div>
<link rel="stylesheet" href="StyleSheet.css">
<center><h1> Artistique </h1></center>
</header>
<h2>Time to Check Out</h2>
	
<style>
a:link, a:visited {
  background-color: white;
  border-radius: 2px;
  color: darkslategrey;
  border: 1px solid grey;
  padding:5px 10px;
  text-decoration-line: none;
  text-align: left;
  display: inline-block;
}

a:hover, a:active {
  background-color: grey;
  color: white;
}
</style>
	
<div class = "bottom">
  <div> <div class = "menu"> </div>
	<left-side><nav>
<center><a href="CW2ArtHomePage.HTML">Home</a></center>
<center><a href="CW2ArtRegister.HTML">Register</a></center>
<center><a href="CW2ArtLogIn.HTML">Log In</a></center>
<center><a href="CW2ArtProducts.html">Our Products</a></center>
</nav>
</left-side>
</div> 
<div> 
<p>Hope you enjoyed your experience shopping with us!</p>


<div class="row">
	
	
	
	<div class="container">
	
		<form action="/action_page.php">
		
	<div class="row">
		
	<div class="col-50">
		
	<h2>Time to pay up!</h2>
		

	
	<h3> Your Address</h3>
		
	
		<label for="Forename"><i class = "user"> </i></label> Forename </label> 
		
		<input type ="text" id="Forename" name="Forename" placeholder="Forename">
		
		<label for="Surname"><i class = "user"> </i></label> Surname </label> 
		
		<input type ="text" id="Surname" name="Surname" placeholder="Surname">
		
		<label for="Address 1"><i class = "address"> </i></label> Address 1 </label> 
		
		<input type ="text" id="Address 1" name="Address 1" placeholder="Address 1">
	
	    <label for="Address 2"><i class = "address"> </i></label> Address 2 </label> 
		
		<input type ="text" id="Address 3" name="Address 3" placeholder="Address 3">
	
	    <label for="Address 3"><i class = "address"> </i></label> Address 3 </label> 
		
		<input type ="text" id="Address 3" name="Address 3" placeholder="Address 3">
	    
	    <label for="Town/City"><i class = "town/city"> </i></label> Town/City </label> 
		
		<input type ="text" id="Town/City" name="Town/City" placeholder="Town/City">
	    
	    <label for="Postcode"><i class = "postcode"> </i></label> Postcode </label> 
		
		<input type ="text" id="Postcode" name="Postcode" placeholder="Postcode">

         <label for="E-Mail"><i class = "email"> </i></label> E-Mail </label> 
		
		<input type ="text" id="E-Mail" name="E-Mail" placeholder="E-Mail">
        
        <label for="Phone Number"><i class = "phonenumber"> </i></label> Phone Number </label> 
		
		<input type ="text" id="phonenumber" name="Phone Number" placeholder="Phone Number">
		
		
	</div> 	


</form>

  <div class="col-25">
    <div class="container">
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>My Cart</b>
        </span>
      </h4>
      <p><a href="#">The Beatles</a><span class="price">£100</span></p>
	  <input type="number" min="0" max="15"step="1" value="15"
      <p><a href="#">Queen</a> <span class="price">£100</span></p>
	  <input type="number" min="0" max="15"step="1" value="15"
	  <p><a href="#">Jimi Hendrix</a> <span class="price">£100</span></p>
	  <input type="number" min="0" max="15"step="1" value="15"
      <hr>
      <p>Total <span class="price" style="color:black"><b>£300</b></span></p>
	  
    </div>
  </div>
</div>

<h3> Payment Details</h3>

  <label for="Cards">Cards Accepted by Us</label>
            <div class="icon-container">
              <img src = "visa.jpg" "Image" alt= height"15" width="25">
              <img src = "mastercard.jpg" "Image" alt= height"15" width="25">
			  <img src = "americanexpress.jpg" "Image" alt= height"15" width="25">
            </div>
            <label for="cardholdername">Card Holder Name</label>
            <input type="text" id="cardholdername" name="cardholdername" placeholder="Your Name Here">
            <label for="cardnumber">Card Number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="0000-1111-2222-3333">
            <label for="expirymonth">Expiry Month</label>
            <input type="text" id="expirypmonth" name="expirymonth" placeholder="May">

            <div class="row">
              <div class="col-50">
                <label for="expiryyear">Expiry Year</label>
                <input type="text" id="expyear" name="expiryyear" placeholder="1998">
              </div>
              <div class="col-50">
                <label for="cvvnumber">CVV Number</label>
                <input type="text" id="cvv" name="cvv" placeholder="015">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Delivery address same as billing address?
        </label>
        <input type="submit" value="Lets Pay" class="btn">
      </form>
    </div>
  </div>

<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #white;
  padding: 5px 20px 15px 20px;
  border: 1px white;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #grey;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #grey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>



















</html>


<hr>

</hr>

<center><i>Artistique 2019</i></center>

</footer>