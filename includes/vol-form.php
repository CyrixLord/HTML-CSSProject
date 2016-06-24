		  <form action="formhandler.php"  method="post">
		  <fieldset>
		  <legend>Become a Volunteer</legend>
		  <p><label for="name">Name:</label>
		  <input type="text" name="name" id="name" /></p>
	  
		  <p><label for="email">Email: <em class="highlight">(required)</em></label>
		  <input type="email" name="email" id="email" required/></p>
		  
		  <p><label><input type="checkbox" name="over-18" id="over-18" value="yes" />I am over the age of 18 years.</label></p>
		  
		  
		  <p>What types of volunteer work would you like to do?
		  <label>
		  <input type="checkbox" name="tasks[]" id="office" value="office" />
		  Office/admin work</label>
		  
		  <label>
		  <input type="checkbox" name="tasks[]" id="client-services" value="client-services" />
		  Client services</label>

		  <label>
		  <input type="checkbox" name="tasks[]" id="events" value="events" />
		  Special events</label>		  		  
		  </p>
		  
		  
		  <p>What size T-shirt would you like?
		  
		  <label>
			<input type="radio" name="shirt-size" id="size-s" value="small" />
		  Small
		  </label>
		  
		  <label>
			<input type="radio" name="shirt-size" id="size-m" value="medium" />
		  Medium
		  </label>		  

		  <label>
			<input type="radio" name="shirt-size" id="size-l" value="large" />
		  Large
		  </label>
		  
		  <label>
			<input type="radio" name="shirt-size" id="size-xl" value="extra-large" />
		  Extra Large
		  </label>		  
	</p>	  
<p>
	<label>What is your snack preference?</label>		  
		<select name="snack" id="snack" size="1">
			<option value="#">Choose one</option>
			<option value="vegan">Vegan</option>
			<option value="vegetarian">Vegetarian</option>			
			<option value="carnivore">Meat</option>
			</select>
</p>

<p>Comments:
	<textarea name="comments" rows="5" cols="25"></textarea>

</p>	

<input type="submit" value="Send"/>		
		  
		  </fieldset>  
		  </form>