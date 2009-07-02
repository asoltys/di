<? require("ssi/header.php"); ?>
<link rel="stylesheet" type="text/css" href="css/assignment_form.css" />


<script language="javascript" type="text/javascript">

Element.observe(window, 'load', function() {
	$$('input[type=radio],input[type=checkbox]').collect(function(e) { 
		e.style.background = '#ddd' });
});

var num_vehicles = 0;

function addVehicle()
{
	num_vehicles++;
	var num_vehicles_field = document.getElementById('num_vehicles');
	
	var add_vehicle_link = document.getElementById('add_vehicle');
	
	num_vehicles_field.value = num_vehicles;
	
	
	var new_vehicle = document.getElementById('vehicle').cloneNode(true);
	new_vehicle.id = new_vehicle.id + '_' + num_vehicles;
	new_vehicle.style.display = "block";
	new_vehicle.childNodes[1].firstChild.nodeValue = 'Vehicle ' + num_vehicles;
	var vehicle_inputs = new_vehicle.getElementsByTagName('input');
	
	var i = 0;
	for (i = 0; i < vehicle_inputs.length; i++)
	{
		vehicle_inputs[i].name = vehicle_inputs[i].name + '_' + num_vehicles;
	}
	
	vehicle_inputs = new_vehicle.getElementsByTagName('textarea');
	
	for (i = 0; i < vehicle_inputs.length; i++)
	{
		vehicle_inputs[i].name = vehicle_inputs[i].name + '_' + num_vehicles;
	}
	
	var vehicles_fieldset = document.getElementById('vehicles');
	vehicles_fieldset.insertBefore(new_vehicle, add_vehicle_link);
}
</script>	

<h1>Assignment Request Form</h1>
<div class="form">
	<? require("assignment_form_action.php") ?>

	<form name="Assignment Form" action="assignment_form.php" method="post">
		<fieldset title="Adjuster Information">
		<legend title="Adjuster Information">Adjuster Information</legend>
			<div class="left_column">
				<div class="required">
					<label for="first_name">First Name:</label>
					<input id="first_name" name="first_name" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="last_name">Last Name:</label>
					<input id="last_name" name="last_name" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="city">City:</label>
					<input id="city" name="city" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="province">Province:</label>
						<select id="province" name="province" class="selectfield" style="width: 140px;">
							<option value="ab">Alberta</option>
							<option value="bc" selected="selected">British Columbia</option>
							<option value="mb">Manitoba</option>
							<option value="nb">New Brunswick</option>
							<option value="nf">Newfoundland & Labrador</option>
							<option value="nt">Northwest Territories</option>
							<option value="ns">Nova Scotia</option>
							<option value="nu">Nunavut</option>
							<option value="on">Ontario</option>
							<option value="pe">Prince Edward Island</option>
							<option value="pq">Quebec</option>
							<option value="sa">Saskatchewan</option>
							<option value="yt">Yukon</option>
						</select>
				</div>
				
				<div class="required">
					<label for="country">Country:</label>
						<input id="country" name="country" class="inputText" value="Canada" />
				</div>
				
				<div class="required">
					<label for="company">Company:</label>
						<input id="company" name="company" type="text" class="inputText" />
				</div>
			</div>
			
			
			<div class="right_column">
				
				<div class="required">
					<label for="address">Address:</label>
						<input id="address" name="address" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="address2">Address 2:</label>
						<input id="address2" name="address2" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="home_phone">Home Phone:</label>
						<input id="home_phone" name="home_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="work_phone">Work Phone:</label>
						<input id="work_phone" name="work_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="mobile_phone">Mobile Phone:</label>
						<input id="mobile_phone" name="mobile_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="email">Email:</label>
					<input id="email" name="email" type="text" class="inputText" />
				</div>
			</div>
			<br />
			<div class="required">
				<label for="comments">Comments:</label>
				<textarea id="comments" name="comments" type="text" class="inputTextarea"></textarea>
			</div>
		</fieldset>
		
		<fieldset title="Claim Information">
			<legend title="Claim Information">Claim Information</legend>
			
			<div class="required">
				<label for="claim_type">Claim Type:</label>
				<select id="claim_type" name="claim_type" class="selectfield">
					<option value="8">[Not Selected]</option>
	
					<option value="Auto BI">Auto BI</option>
					<option value="Auto Fire">Auto Fire</option>
					<option value="Auto Liability">Auto Liability</option>
					<option value="Auto Liability-Casualty">Auto Liability-Casualty</option>
					<option value="Auto Other">Auto Other</option>
					<option value="Auto PIP">Auto PIP</option>
				
					<option value="Auto Property Damage">Auto Property Damage</option>
					<option value="Auto Theft">Auto Theft</option>
					<option value="Auto Theft-Fire">Auto Theft-Fire</option>
					<option value="Boat BI">Boat BI</option>
					<option value="Boat PD">Boat PD</option>
					<option value="Cargo">Cargo</option>
				
					<option value="Commercial Liability">Commercial Liability</option>
					<option value="Commercial Other">Commercial Other</option>
					<option value="Commercial Property Damage">Commercial Property Damage</option>
					<option value="Commercial Theft-Fire">Commercial Theft-Fire</option>
					<option value="Construction Defect">Construction Defect</option>
					<option value="Disability">Disability</option>
				
					<option value="Disability Waiver of Premium">Disability Waiver of Premium</option>
					<option value="Discontinued Ops GL">Discontinued Ops GL</option>
					<option value="Discontinued Ops WC">Discontinued Ops WC</option>
					<option value="Errors &amp; Omission">Errors &amp; Omission</option>
					<option value="Excess">Excess</option>
				
					<option value="Excess &amp; Surplus">Excess &amp; Surplus</option>
					<option value="Fast Path Auto">Fast Path Auto</option>
					<option value="Fast Path Property">Fast Path Property</option>
					<option value="FMLA/LOA">FMLA/LOA</option>
					<option value="General Liability">General Liability</option>
				
					<option value="Health">Health</option>
					<option value="Homeowner Fire">Homeowner Fire</option>
					<option value="Homeowner Liability">Homeowner Liability</option>
					<option value="Homeowner Other">Homeowner Other</option>
					<option value="Homeowner Property Damage">Homeowner Property Damage</option>
					<option value="Homeowner Theft">Homeowner Theft</option>
				
					<option value="23">Homeowner Theft-Fire</option>
					<option value="Inland Marine">Inland Marine</option>
					<option value="Liability">Liability</option>
					<option value="Life">Life</option>
					<option value="Life Contestable Death">Life Contestable Death</option>
					<option value="Ocean Marine">Ocean Marine</option>
				
					<option value="Other">Other</option>
					<option value="Other BI">Other BI</option>
					<option value="Other PD">Other PD</option>
					<option value="Personal Liability">Personal Liability</option>
					<option value="Product Liability">Product Liability</option>
					<option value="Professional  Liability">Professional  Liability</option>
				
					<option value="property">property</option>
					<option value="Property Loss">Property Loss</option>
					<option value="Subrogation">Subrogation</option>
					<option value="Surplus">Surplus</option>
					<option value="Workers Compensation">Workers Compensation</option>
					<option value="Yacht">Yacht</option>
				</select>
			</div>
			
			<div class="required">
				<label for="claim_number">Claim Number:</label>
				<input id="claim_number" name="claim_number" type="text" class="inputText" />
			</div>
			
			<div class="required">
				<label for="date_of_loss">Date of Loss:</label>
				<input id="date_of_loss" name="date_of_loss" type="text" class="inputText" />
			</div>
			
			<div class="required">
				<label for="siu_number">SIU Number:</label>
				<input id="siu_number" name="siu_number" type="text" class="inputText" />
			</div>
			
			<div class="required">
				<label for="description_of_loss">Description of Loss:</label>
				<textarea id="description_of_loss" name="description_of_loss" type="text" class="inputTextarea"></textarea>
			</div>
			
			<div class="required">
				<label for="client_objectives">Client Objectives:</label>
				<textarea id="client_objectives" name="client_objectives" type="text" class="inputTextarea"></textarea>
			</div>
		</fieldset>
		
		<fieldset id="assignment">
			<legend>Assignment</legend>
			<label for="assignment_extended_surveillance" class="labelCheckbox">
			<input type="checkbox" name="assignment" id="assignment_extended_surveillance" class="inputCheckbox" value="Extended Surveillance"/>
			Extended Surveillance</label>
			<label for="assignment_standard_surveillance" class="labelCheckbox">
			<input type="checkbox" name="assignment" id="assignment_standard_surveillance" class="inputCheckbox" value="Standard Surveillance"/>
			Standard Surveillance</label>					
			<label for="assignment_background_check" class="labelCheckbox">
			<input type="checkbox" name="assignment" id="assignment_background_check" class="inputCheckbox" value="Background Check"/>
			Background Check</label>
			
			<br style="clear: both;" />
			
			<label for="assignment_activity_check" class="labelCheckbox">
			<input type="checkbox" name="assignment" id="assignment_activity_check" class="inputCheckbox" value="Activity Check"/>
			Activity Check</label>
			<label for="assignment_other" class="labelCheckbox">
			<input type="checkbox" name="assignment" id="assignment_other" class="inputCheckbox" value="Other"/>
			Other</label>
		</fieldset>

		<fieldset>
			<legend>Budget</legend>
			<div class="required">
				<label for="budget_type_hours">
					<input type="radio" name="budget_type" id="budget_type_hours" class="inputRadio" value="hours" checked="checked" onchange="javascript: updateBudgetUnits(this)"/>
					Number of Hours
				</label>
				<input type="text" name="budget_hours" id="budget_hours" class="inputText" />
			</div>
			<br class="clear"/>
			<div class="required">
				<label for="budget_type_fixed">
					<input type="radio" name="budget_type" id="budget_type_fixed" class="inputRadio" value="fixed" checked="checked" onchange="javascript: updateBudgetUnits(this)"/>
					Fixed Price
				</label>
				<input type="text" name="budget_fixed" id="budget_fixed" class="inputText" />
			</div>
		</fieldset>
		
		<fieldset title="Claimant Information">
			<legend title="Claimant Information">Claimant Information</legend>
			<div class="left_column">
				<div class="required">
					<label for="claimant_first_name">First Name:</label>
						<input id="claimant_first_name" name="claimant_first_name" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_last_name">Last Name:</label>
						<input id="claimant_last_name" name="claimant_last_name" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_city">City:</label>
						<input id="claimant_city" name="claimant_city" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_province">Province:</label>
						<select id="claimant_province" name="claimant_province" class="selectfield" style="width: 140px;">
							<option value="ab">Alberta</option>
							<option value="bc" selected="selected">British Columbia</option>
							<option value="mb">Manitoba</option>
							<option value="nb">New Brunswick</option>
							<option value="nf">Newfoundland & Labrador</option>
							<option value="nt">Northwest Territories</option>
							<option value="ns">Nova Scotia</option>
							<option value="nu">Nunavut</option>
							<option value="on">Ontario</option>
							<option value="pe">Prince Edward Island</option>
							<option value="pq">Quebec</option>
							<option value="sa">Saskatchewan</option>
							<option value="yt">Yukon</option>
						</select>
				</div>
				
				<div class="required">
					<label for="claimant_country">Country:</label>
						<input id="country" name="claimant_country" class="inputText" value="Canada" />
				</div>
				
				<div class="required">
					<label for="claimant_company">Company:</label>
						<input id="claimant_company" name="claimant_company" type="text" class="inputText" />
				</div>
			</div>
			<div class="right_column">
				<div class="required">
					<label for="claimant_address">Address:</label>
					<input id="claimant_address" name="claimant_address" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_address2">Address 2:</label>
					<input id="claimant_address2" name="claimant_address2" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_home_phone">Home Phone:</label>
					<input id="claimant_home_phone" name="claimant_home_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_work_phone">Work Phone:</label>
					<input id="claimant_work_phone" name="claimant_work_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_mobile_phone">Mobile Phone:</label>
					<input id="claimant_mobile_phone" name="claimant_mobile_phone" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="claimant_email">Email:</label>
					<input id="claimant_email" name="claimant_email" type="text" class="inputText" />
				</div>
			</div>
			<br class="clear" />
			<br class="clear" />
			<div class="left_column">
				<div class="required">
					<label for="date_of_birth">Date of Birth:</label>
					<input id="date_of_birth" name="date_of_birth" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="drivers_license">Drivers License #:</label>
					<input id="drivers_license" name="drivers_license" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="occupation">Occupation:</label>
					<input id="occupation" name="occupation" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="hair_colour">Hair Colour:</label>
					<input id="hair_colour" name="hair_colour" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="low_height">Height:</label>
					<input id="low_height" name="low_height" type="text" class="inputText" size="4" /> - 
					<input id="high_height" name="high_height" type="text" class="inputText" size="4" />
					<select id="height_units" name="height_units">
						<option value="ft">ft</option>
						<option value="m">m</option>
					</select>
				</div>
				
				<div class="required">
					<label for="low_weight">Weight:</label>
					<input id="low_weight" name="low_weight" type="text" class="inputText" size="4" /> - 
					<input id="high_weight" name="high_weight" type="text" class="inputText" size="4" />
					<select id="weight_units" name="weight_units">
						<option value="lb">lb</option>
						<option value="kg">kg</option>
					</select>
				</div>
			</div>
			<div class="right_column">
				<div class="required">
					<label for="marital_status">Marital Status:</label>
					<input id="marital_status" name="marital_status" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="sin">Social Insurance Number:</label>
					<input id="sin" name="sin" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="race">Race/Complexion:</label>
					<input id="race" name="race" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="sex">Sex:</label>
					<select id="sex" name="sex" class="inputSelect">
						<option value="[Not Selected]">[Not Selected]</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				
				<div class="required">
					<label for="spouses_name">Spouse's Name:</label>
					<input id="spouses_name" name="spouses_name" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="photo_available_yes">Photo Available?</label>
					Yes<input id="photo_available_yes" name="photo_available" type="radio" class="inputText" value="yes" />
					No<input id="photo_available_no" name="photo_available" type="radio" class="inputText" value="no" />
				</div>
			</div>
			
			<br class="clear" />
			<br class="clear" />
			
			<div class="required">
				<label for="alleged_injury">Alleged Injury:</label>
				<textarea id="alleged_injury" name="alleged_injury" type="text" class="inputTextarea"></textarea>
			</div>
			
			<div class="required">
				<label for="characteristics">Special Physical<br/> Characteristics:</label>
				<textarea id="characteristics" name="characteristics" type="text" class="inputTextarea"></textarea>
			</div>
			
			<div class="required">
				<label for="hobbies">Hobbies:</label>
				<textarea id="hobbies" name="hobbies" type="text" class="inputTextarea"></textarea>
			</div>
			
			<div class="required">
				<label for="children">Children/Ages:</label>
				<textarea id="children" name="children" type="text" class="inputTextarea"></textarea>
			</div>
			
			<div class="required">
				<label for="restrictions">Restrictions:</label>
				<textarea id="restrictions" name="restrictions" type="text" class="inputTextarea"></textarea>
			</div>
		</fieldset>
		
		<fieldset title="Claimant Vehicles" id="vehicles">
			<legend title="Claimant Vehicles">Claimant Vehicles</legend>
			<input id="num_vehicles" name="num_vehicles" type="hidden" value="0" />
					
			<fieldset title="Vehicle" id="vehicle" style="display:none;">
				<legend title="Vehicle">Vehicle</legend>
				
				<div class="required">
					<label for="vehicle_make">Make:</label>
					<input name="vehicle_make" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="vehicle_model">Model:</label>
					<input name="vehicle_model" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="vehicle_year">Year:</label>
					<input name="vehicle_year" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="vehicle_colour">Colour:</label>
					<input name="vehicle_colour" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="vehicle_plate">License Plate:</label>
					<input name="vehicle_plate" type="text" class="inputText" />
				</div>
				
				<div class="required">
					<label for="vehicle_owner">Registered Owner:</label>
					<textarea name="vehicle_owner" type="text" class="inputTextarea"></textarea>
				</div>
				
				<div class="required">
					<label for="notes">Additional Notes:</label>
					<textarea name="vehicle_notes" type="text" class="inputTextarea"></textarea>
				</div>
			</fieldset>
			
			<br id="add_vehicle" />
			<a href="#" onclick="javascript: addVehicle(); return false;">Add Vehicle</a>
			<br /><br />
		</fieldset>
		
		<fieldset>
			<legend title="final_details">Final Details</legend>
			
			<div class="required">
				<label for="video_format_vcr">What format would you like the video in?</label>
				<br />
				VCD<input id="video_format_vcd" name="video_format" type="radio" value="vcd" />
				VHS<input id="video_format_vcr" name="video_format" type="radio" value="vhs" />
				DVD<input id="video_format_vcr" name="video_format" type="radio" value="dvd" />
			</div>
				
			<input type="submit" name="submit" value="Submit Form" class="inputSubmit"/>
		<br />
	</form>
</div>

<? require("ssi/footer.php") ?>
