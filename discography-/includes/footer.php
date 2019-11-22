<form method="post">
                
    <div class="container">
      <h2 class="subscribe">Subscribe Now!</h2>
      <p class="subscribe">Ace of Base</p>
   </div>
<br>
  <div class="container">
  	<label for="name"> Name 
    	<?php if (in_array('name', $missing)) { ?> 
    		<span class="warning">Please enter your name</span>
    	<?php } ?>
    	<input  type="text" placeholder="Name" name="name" required
    	<?php if ($missing || $errors) {
					echo 'value="' . htmlentities($name) . '"';
				} ?>>
    </label>

     <label for="Email"> Email 
    	<?php if (in_array('email', $missing)) { ?> 
    		<span class="warning">Please enter your Email</span>
    	<?php } ?>
    <input  type="text" placeholder="Email address" name="email" required
    <?php if ($missing || $errors) {
					echo 'value="' . htmlentities($email) . '"';
				} ?>>
    </label>

    <label>
      <input class="subscribe" type="checkbox" checked="checked" name="subscribe"> Newsletter
    </label>
  </div>
<br>
  <div class="container btn">
    <input type="submit" value="Subscribe" name="submit">
  </div>
    
</form>
                  <!--<fieldset>
                     <legend>Address</legend>
                     
                     <div>
                         <label for="street">Number and Street</label>
                         <input id="street" name="street" type="text">
                     </div>
                     
                     <div>
                         <label for="city">City</label>
                         <input id="city" name="city" type="text">
                     </div>
                     
                      <div>
                         <label for="state">State</label>
                         <select id="state" name="state">
                             <option value="AL">Alabama</option>
                             <option value="AK">Alaska</option>
                             <option value="AZ">Arizona</option>
                             <option value="AR">Arkansas</option>
                             <option value="CA">California</option>
                             <option value="CO">Colorado</option>
                             <option value="CT">Connecticut</option>
                             <option value="DE">Delaware</option>
                             <option value="DC">District Of Columbia</option>
                             <option value="FL">Florida</option>
                             <option value="GA">Georgia</option>
                             <option value="HI">Hawaii</option>
                             <option value="ID">Idaho</option>
                             <option value="IL">Illinois</option>
                             <option value="IN">Indiana</option>
                             <option value="IA">Iowa</option>
                             <option value="KS">Kansas</option>
                             <option value="KY">Kentucky</option>
                             <option value="LA">Louisiana</option>
                             <option value="ME">Maine</option>
                             <option value="MD">Maryland</option>
                             <option value="MA">Massachusetts</option>
                             <option value="MI">Michigan</option>
                             <option value="MN">Minnesota</option>
                             <option value="MS">Mississippi</option>
                             <option value="MO">Missouri</option>
                             <option value="MT">Montana</option>
                             <option value="NE">Nebraska</option>
                             <option value="NV">Nevada</option>
                             <option value="NH">New Hampshire</option>
                             <option value="NJ">New Jersey</option>
                             <option value="NM">New Mexico</option>
                             <option value="NY">New York</option>
                             <option value="NC">North Carolina</option>
                             <option value="ND">North Dakota</option>
                             <option value="OH">Ohio</option>
                             <option value="OK">Oklahoma</option>
                             <option value="OR">Oregon</option>
                             <option value="PA">Pennsylvania</option>
                             <option value="RI">Rhode Island</option>
                             <option value="SC">South Carolina</option>
                             <option value="SD">South Dakota</option>
                             <option value="TN">Tennessee</option>
                             <option value="TX">Texas</option>
                             <option value="UT">Utah</option>
                             <option value="VT">Vermont</option>
                             <option value="VA">Virginia</option>
                             <option value="WA">Washington</option>
                             <option value="WV">West Virginia</option>
                             <option value="WI">Wisconsin</option>
                             <option value="WY">Wyoming</option>
                         </select>
                     </div
                     
                     <div>
                         <label for="zip">Zip</label>
                         <input id="zip" pattern="[0-9]{5}" type="text">
                     </div>
                     </fieldset>-->
               </div>
            </div>
         </section>
      </main>


<!-- Footer -->
      <footer id="main-footer" class="grid">
         <div>&copy;
         <?php
				 // echo date('Y');
			$startYear = 2018;
			$thisYear = date('Y');
			if ($startYear == $thisYear) {
				echo $startYear;
			} else {
				echo "{$startYear}&ndash;{$thisYear}"; 
			}
			 ?>
			 ACE OF BASE</div>
         <!---end footer-->
      </footer>
   </body>
</html>