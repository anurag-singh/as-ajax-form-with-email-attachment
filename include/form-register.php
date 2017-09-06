<form class="nobottommargin" id="as_contact_form" name="as_contact_form" action="#" method="POST" enctype="multipart/form-data">
	<!-- <div class="form-process"></div> -->
	<?php  $applictionNo = date('d-m') . '-' . mt_rand(10, 1000); ?>
	<div class="col_half">
		
		<p>Personal Details of Recipient <br>
		Application Id - <?php echo $applictionNo; ?></p>
	</div>
	
	<div class="col_half col_last">
		<div class=" alignright" style="font-size:12px;">
			<a href="pdf/seniorassist-form-care-recipient.pdf">DOWNLOAD PDF <img src="images/pdf.jpg"></a> </div>
		</div>
		
		<div class="clear"></div>
		
		<div class="col_half">
			
			<div class="col_two_third">
				<label for="name">Name <small>*</small></label>
				<input type="text" id="name" name="name" value="" class="sm-form-control requiredd" />
			</div>
			<div class="clear"></div>
			<div class="col_half">
				<label for="dob">DoB <small>*</small></label>
				<input type="text" id="dob" name="dob" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_half col_last">
				<label for="age">Age </label>
				<input type="text" id="age" name="age" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full col_last">
				<label for="gender">Gender <small>*</small></label>
				<input type="text" id="gender" name="gender" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			<div class="col_full  col_last">
				<label for="address">Address <small>*</small></label>
				<input type="text" id="address" name="address" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_half">
				<label for="city">City <small>*</small></label>
				<input type="text" id="city" name="city" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_half col_last">
				<label for="pincode">PIN Code </label>
				<input type="text" id="pincode" name="pincode" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
		</div>
		
		<div class="col_one_third  col_last">
			
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col_full">
			<div class="col_one_third">
				<label for="mobile1">Mobile 1 <small>*</small></label>
				<input type="text" id="mobile1" name="mobile1" value="" class="sm-form-control requiredd" />
			</div>
			 <div class="col_one_third">
				<label for="mobile2">Mobile 2 </label>
				<input type="text" id="mobile2" name="mobile2" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_one_third col_last">
				<label for="landline">Landline</label>
				<input type="text" id="landline" name="landline" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full col_last">
				<label for="email">Email <small>*</small></label>
				<input type="text" id="email" name="email" value="" class="sm-form-control" />
			</div>
			 
			<div class="clear"></div>
			
			<div class="col_half">
				<label for="as_contact_form">Photo ID No. (Aadhaar / Passport Number etc.) <small>*</small></label>
				<input type="text" id="photo_id" name="photo_id" value="" class="requiredd sm-form-control" />
				<input type="file" name="file_photo_id" id="file_photo_id">
			</div>
			<div class="col_half col_last">
				<label for="as_contact_form">Pan No. <small>*</small></label>
				<input type="text" id="pan_no" name="pan_no" value="" class="sm-form-control" />
				<input type="file" name="file_pan" id="file_pan">
			</div>
			
			<div class="clear"></div>
			
			<div class="col_half">
				<label for=edu_qualification">Educational Qualifications </label>
				<input type="text" id=edu_qualification" name=edu_qualification" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_half col_last">
				<label for="pro_before_retir">Profession before retirement</label>
				<input type="text" id="pro_before_retir" name="pro_before_retir" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full nobottommargin topmargin-sm">
				Languages Known
			</div>
			<div class="col_one_third">
				<label for="spoken_lan">Spoken <small>*</small></label>
				<input type="text" id="spoken_lan" name="spoken_lan" value="" class="requiredd sm-form-control" />
				
			</div>
			<div class="col_one_third col_last">
				<label for="reading_writing_lag">Reading / Writing <small>*</small>
				</label>
				<input type="text" id="reading_writing_lag" name="reading_writing_lag" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="pref_lang">Language of prefrence </label>
				<input type="text" id="pref_lang" name="pref_lang" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full nobottommargin topmargin-sm">
				Next of Kin
			</div>
			
			<div class="col_half">
				<label for="as_contact_form">Name <small>*</small></label>
				<input type="text" id="nxt_name" name="nxt_name" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_half col_last">
				<label for="as_contact_form">Relationship <small>*</small></label>
				<input type="text" id="nxt_relationship" name="nxt_relationship" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="address">Address <small>*</small></label>
				<input type="text" id="nxt_address" name="nxt_address" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_one_third">
				<label for="nxt_mobile">Mobile <small>*</small></label>
				<input type="text" id="nxt_mobile" name="nxt_mobile" value="" class="sm-form-control requiredd" />
			</div>
			<div class="col_one_third">
				<label for="nxt_landline">Landline</label>
				<input type="text" id="nxt_landline" name="nxt_landline" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_one_third col_last">
				<label for="nxt_email">Email <small>*</small></label>
				<input type="text" id="nxt_email" name="nxt_email" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full nobottommargin topmargin-sm">
				Local person to contact in case of emergency
			</div>
			
			<div class="col_half">
				<label for="emrgency_name">Name <small>*</small></label>
				<input type="text" id="emrgency_name" name="emrgency_name" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_half col_last">
				<label for="emrgency_relationship">Relationship <small>*</small></label>
				<input type="text" id="emrgency_relationship" name="emrgency_relationship" value="" class="sm-form-control" />
			</div>
			
			<div class="col_one_third">
				<label for="emrgency_mobile">Mobile <small>*</small></label>
				<input type="text" id="emrgency_mobile" name="emrgency_mobile" value="" class="sm-form-control requiredd" />
			</div>
			<div class="col_one_third">
				<label for="emrgency_landline">Landline</label>
				<input type="text" id="emrgency_landline" name="emrgency_landline" value="" class="requiredd sm-form-control" />
			</div>
			<div class="col_one_third col_last">
				<label for="emrgency_email">Email <small>*</small></label>
				<input type="text" id="emrgency_email" name="emrgency_email" value="" class="sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full nobottommargin topmargin-sm">
				
				<p>Other Details</p>
				
			</div>
			
			<div class="col_full  col_last">
				<label for="additional_no_medical_service">Which additional non-medical services would you like to receive?
				</label>
				<input type="text" id="additional_no_medical_service" name="additional_no_medical_service" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="prefer_comanion">Would you prefer a male or female companion?
				</label>
				<input type="text" id="prefer_comanion" name="prefer_comanion" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="family_members">What other family members do you have?
				</label>
				<input type="text" id="family_members" name="family_members" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="any_family_member_residing">Any family members residing with you?
				</label>
				<input type="text" id="any_family_member_residing" name="any_family_member_residing" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="what_kind_of_support_have">What kind of a support system do you have at present?
				</label>
				<input type="text" id="what_kind_of_support_have" name="what_kind_of_support_have" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="present_medical_condition">What is your medical condition at present?
				</label>
				<input type="text" id="present_medical_condition" name="present_medical_condition" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="any_physical_disabilty">Do you suffer from any physical disability?
				</label>
				<input type="text" id="any_physical_disabilty" name="any_physical_disabilty" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="thing_interest_you">What are the things that interest you?
				</label>
				<input type="text" id="thing_interest_you" name="thing_interest_you" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
			
			<div class="col_full  col_last">
				<label for="registered_as_senior_citizen">Are you registered with the local Police station as a Senior Citizen?
				</label>
				<input type="text" id="registered_as_senior_citizen" name="registered_as_senior_citizen" value="" class="requiredd sm-form-control" />
			</div>
			
			<div class="clear"></div>
<!-- 			<div id="processing">Sending</div>
			<div id="success">Send Successfully</div>
 -->
			


			
		</div>
		
		<div class="clear"></div>
		
		<div style=" font-size:14px; line-height:1.5;" >
			
			A copy of the following documents can be emailed to <a href="mailto:info@seniorassist.in"><span style="text-decoration:underline;">info@seniorassist.in</span></a> or handed over to a company representative:<br>
			- Copy of Photo ID (Aadhaar / Passport etc.)<br>
			- Copy of PAN Card<br>
			- Copy of Address Proof<br>
			
		</div>
		
		<div class="clear"></div>
		<div class="col_full center bottommargin">
			<!-- <button name="submit" type="submit" onclick="form_submit()" class="button button-3d nomargin">Register</button> -->
			<input type="hidden" id="application_id" value="<?php echo $applictionNo; ?>">
			<button name="submit" type="submit"class="button button-3d nomargin">Register</button>
			
		</div>
	</form>