<!--        
			<label for="halls">Choose a hall:</label>
			<select name="halls" id="halls">
				<option value="terrace">Terrace</option>
				<option value="main">Main hall</option>
				<option value="lounge">Lounge zone</option>
			</select><br>
			<label for="date" >Date of reservation:</label><br>
			<input type="date" id="date" name="date"><br>
			<input type="radio" id="glutfree" name="food_option" value="Gluten">
			<label for="glutfree">Gluten free meals</label><br>
			<input type="radio" id="halal" name="food_option" value="Halal">
			<label for="halal">Halal products</label><br>
			<input type="radio" id="vegan" name="food_option" value="Vegan/Vegetarian">
			<label for="halal">Vegan/vegetarian meals</label><br>
			<input type="checkbox" id="children" name="children" value="Child">
			<label for="children">With children</label><br>
			<label for="email" >Email:</label><br>
			<input type="email" name="email" id="email" pattern=".+@gmail\.com" size="30" required maxlength="30"><br>
			<label for="phone">Phone number:</label><br>
			<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="9"><br>
			<input type="checkbox" id="agree" name="agree">
			<label for="agree"><em> by signing this I agree to proceed my information</em></label><br>
         -->


<?php
    if(!isset($_POST['submit'])){
        echo "error; you need to submit the form";
    }

    $name = $_POST['fname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['rese'];

    if(empty($name)||empty($visitor_email)){
        echo "name and email are mandatory!";
    }

    $email_from = 'asatillo.akhmedov@gmail.com';
    $email_subject = "New booking!";
    $email_body = "";

    $to = 'asatillo.akhmedov@gmail.com';
    $headers = "From: $email_from \r\n";

    mail($to, $email_subject, $email_body, $headers);
?>