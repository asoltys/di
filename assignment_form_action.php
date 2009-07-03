<?
	$mailto = "ron@dynamicinvestigations.com";
	
	if (isset($_POST['submit']))
	{
		$msg = '';
		
		$msg .= "Adjuster Information\n";
		$msg .= "======================\n";
		$msg .= "First Name: " . $_POST['first_name'] . "\n";
		$msg .= "Last Name: " . $_POST['last_name'] . "\n";
		$msg .= "City: " . $_POST['city'] . "\n";
		$msg .= "Province: " . $_POST['province'] . "\n";
		$msg .= "Country: " . $_POST['country'] . "\n";
		$msg .= "Company: " . $_POST['company'] . "\n";
		$msg .= "Address: " . $_POST['address'] . "\n";
		$msg .= "Address 2: " . $_POST['address2'] . "\n";
		$msg .= "Home Phone: " . $_POST['home_phone'] . "\n";
		$msg .= "Work Phone: " . $_POST['work_phone'] . "\n";
		$msg .= "Mobile Phone: " . $_POST['mobile_phone'] . "\n";
		$msg .= "Email: " . $_POST['email'] . "\n";
		$msg .= "Comments: " . $_POST['comments'] . "\n";
		
		$msg .= "\nClaim Information\n";
		$msg .= "======================\n";
		$msg .= "Claim Type: " . $_POST['claim_type'] . "\n";
		$msg .= "Claim Number: " . $_POST['claim_number'] . "\n";
		$msg .= "Date of Loss: " . $_POST['date_of_loss'] . "\n";
		$msg .= "SIU Number: " . $_POST['siu_number'] . "\n";
		$msg .= "Description of Loss: " . $_POST['description_of_loss'] . "\n";
		$msg .= "Client Objectives: " . $_POST['client_objectives'] . "\n";
		
		if(!isset($_POST['assignment'])) 
		{
			$_POST['assignment'] = "not specified";
		}
		
		$msg .= "Assignment: " . $_POST['assignment'] . "\n";
		
		if ($_POST['budget_type'] == 'hours')
		{
			$msg .= "Budget: " . $_POST['budget_hours'] . " hours\n";
		}
		else
		{
			$msg .= "Budget: " . $_POST['budget_fixed'] . " dollars\n";
		}
		
		$msg .= "\nClaimant Information\n";
		$msg .= "======================\n";
		$msg .= "First Name: " . $_POST['claimant_first_name'] . "\n";
		$msg .= "Last Name: " . $_POST['claimant_last_name'] . "\n";
		$msg .= "City: " . $_POST['claimant_city'] . "\n";
		$msg .= "Province: " . $_POST['claimant_province'] . "\n";
		$msg .= "Country: " . $_POST['claimant_country'] . "\n";
		$msg .= "Company: " . $_POST['claimant_company'] . "\n";
		$msg .= "Address: " . $_POST['claimant_address'] . "\n";
		$msg .= "Address 2: " . $_POST['claimant_address2'] . "\n";
		$msg .= "Home Phone: " . $_POST['claimant_home_phone'] . "\n";
		$msg .= "Work Phone: " . $_POST['claimant_work_phone'] . "\n";
		$msg .= "Mobile Phone: " . $_POST['claimant_mobile_phone'] . "\n";
		$msg .= "Email: " . $_POST['claimant_email'] . "\n";
		$msg .= "Date of Birth: " . $_POST['date_of_birth'] . "\n";
		$msg .= "Drivers License #: " . $_POST['drivers_license'] . "\n";
		$msg .= "Occupation: " . $_POST['occupation'] . "\n";
		$msg .= "Hair Colour: " . $_POST['hair_colour'] . "\n";
		$msg .= "Height: " . $_POST['low_height'] . " - " . $_POST['high_height'] . "\n";
		$msg .= "Weight: " . $_POST['low_weight'] . " - " . $_POST['high_weight'] . "\n";
		$msg .= "Marital Status: " . $_POST['marital_status'] . "\n";
		$msg .= "SIN: " . $_POST['sin'] . "\n";
		$msg .= "Race/Complexion: " . $_POST['race'] . "\n";
		$msg .= "Sex: " . $_POST['sex'] . "\n";
		$msg .= "Spouse: " . $_POST['spouses_name'] . "\n";
		$msg .= "Photo Available: " . $_POST['photo_available'] . "\n";
		$msg .= "Alleged Injury: " . $_POST['alleged_injury'] . "\n";
		$msg .= "Special Physical Characteristics: " . $_POST['characteristics'] . "\n";
		$msg .= "Hobbies: " . $_POST['hobbies'] . "\n";
		$msg .= "Children/Ages: " . $_POST['children'] . "\n";
		$msg .= "Restrictions: " . $_POST['restrictions'] . "\n";
		
		if ($_POST['num_vehicles'] > 0)
		{
			$msg .= "\nClaimant Vehicles\n";
			$msg .= "======================\n";
			
			for ($i = 1; $i <= $_POST['num_vehicles']; $i++)
			{
				$msg .= "\nVehicle $i\n";
				$msg .= "Year: " . $_POST['vehicle_year_' . $i] . "\n";
				$msg .= "Make: " . $_POST['vehicle_make_' . $i] . "\n";
				$msg .= "Model: " . $_POST['vehicle_model_' . $i] . "\n";
				$msg .= "Colour: " . $_POST['vehicle_colour_' . $i] . "\n";
				$msg .= "Plate: " . $_POST['vehicle_plate_' . $i] . "\n";
				$msg .= "Owner: " . $_POST['vehicle_owner_' . $i] . "\n";
				$msg .= "Notes: " . $_POST['vehicle_notes_' . $i] . "\n";
			}
		}
		else
		{
			$msg .= "Vehicles: None" . $_POST['num_vehicles'] . "\n";
		}
		
		if (!isset($_POST['video_format']))
		{
			$_POST['video_format'] = "not specified";
		}
		
		$msg .= "\nFinal Details\n";
		$msg .= "======================\n";
		$msg .= "Video Format: " . $_POST['video_format'] . "\n";
			
		mail($mailto, "Dynamic Investigations Form", $msg);
		
		header("Location: assignment_form_thanks.php");
	}
?>
