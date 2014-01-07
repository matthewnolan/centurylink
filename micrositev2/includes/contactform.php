<script type="text/javascript">
   var profiling = {
   isEnabled: false,
   numberOfProfilingFields: 3,
   alwaysShowFields: [ 'mktDummyEntry']
 };
 </script>
                                            
<script type="text/javascript"> function mktoGetForm() {return document.getElementById('formcontact'); }</script>

<div id="contactfooter">
	<div class="line-break sprite" id="set-up-an-apointment"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<h2>Can we set up a meeting?</h2>
				<p class="fs18">Just fill in a form, we'll give you a call back and
					set up a time to meet and talk about Managed Office.</p>
				<div class="space20 hidden-xs"></div>
				<div class="sprite ico-calendar hidden-xs"></div>
			</div>
			<div class="col-sm-6 col-md-6">
				<form role="form" id="formcontact" name="formcontact" action="http://app-b.marketo.com/index.php/leadCapture/save" enctype="multipart/form-data" method="post">
				 
				<input type="hidden" name="retURL" id="retURL" value="http://centurylinkmanagedoffice.com/v6/contact-thanks.php">
				<input type="hidden" name="returnURL" id="returnURL" value="http://centurylinkmanagedoffice.com/v6/contact-thanks.php"/>
				 
				<span style="display:none;">
				   <input type="text" name="_marketo_comments" value="" />
				</span>
				        
				<input type="hidden" name="lpId" value="2998" />
				<input type="hidden" name="subId" value="292" />
				<input type="hidden" name="kw" value="" />
				<input type="hidden" name="cr" value="" />
				<input type="hidden" name="searchstr" value="" />
				<input type="hidden" name="lpurl" value="http://info.centurylinkforbusiness.com/ManagedOfficeLandingPageWebForm-LP_ManagedOfficeLandingPageWebForm.html?cr={creative}&kw={keyword}" />
				<input type="hidden" name="formid" value="278" />
				<input type="hidden" name="_mkt_disp" value="return" />
				<input type="hidden" name="_mkt_trk" value="id:131-SYO-861&token:_mch-centurylinkforbusiness.com-1388772632708-62405" />
				
				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: These fields are optional debugging elements.  Please uncomment   -->
				<!--  these lines if you wish to test in debug mode.                          -->
				<!-- ----------------------------------------------------------------------  -->
				<input type="hidden" name="Debug" value=1>                             
				<input type="hidden" name="DebugEmail" value="kevin@lpnyc.com">     
				<!-- refcode: $!session.getAttribute("REFCODE") -->                         
				<input type="hidden" name="Ref_Code__c" id="Ref_Code__c" value="$!refcode">
				<input type="hidden" name="RecordTypeId" id="RecordTypeId" value="012A0000000OW9x">
				<input type="hidden" name="LeadSource" id="LeadSource" value="CenturyLink.com">
				<input type="hidden" name="DG_Code__c" id="DG_Code__c" value="QWQW00RF">
				<input type="hidden" name="Tealeaf_Session_Id__c" id="Tealeaf_Session_Id__c" value="">
				<input type="hidden" name="SegmentTypeProvided" id="SegmentTypeProvided"  value=" " />
				 
				<input type='hidden' name="NumberOfEmployees" id="NumberOfEmployees" value="" />
				<input type='hidden' name="Industry" id="Industry" value="" />
				<input type='hidden' name="AnnualRevenue" id="AnnualRevenue" value="" />
				<input type='hidden' name="Country" id="Country" value="" />
				<input type='hidden' name="City" id="City" value="" />
				<input type="hidden" name="Lead_Source_Detail__c" id="Lead_Source_Detail__c" value="" >
 


					<span class="required">* All fields required</span>
					<div class="form-group">
						<label for="txtfirstname">First Name</label> <input type="text"
							id="txtfirstname" class="form-control" name="txtfirstname"
							value="" data-rule-required="true"
							data-msg-required="Please enter your first name"
							placeholder="Enter First Name" />
					</div>
					<div class="form-group">
						<label for="txtlastname">Last Name</label> <input type="text"
							id="txtlastname" class="form-control" name="txtlastname" value=""
							data-rule-required="true"
							data-msg-required="Please enter your last name"
							placeholder="Enter Last Name" />
					</div>
					<div class="form-group">
						<label for="txtemail">Work Email</label> <input type="email"
							id="txtemail" class="form-control" name="email" value=""
							data-rule-required="true" data-rule-email="true"
							data-msg-required="Please enter your email address"
							data-msg-email="Please enter a valid email address"
							placeholder="Enter Work Email" />
					</div>
					<div class="form-group">
						<label for="txtphone">Phone Number</label> <input type="text"
							id="txtphone" class="form-control" name="txtphone"
							data-rule-required="true"
							data-msg-required="Please enter your phone number" value=""
							placeholder="Enter Phone Number" />
					</div>
					<div class="form-group">
						<label for="txtcompany">Company/Organization</label> <input
							type="text" id="txtcompany" class="form-control"
							name="txtcompany" data-rule-required="true"
							data-msg-required="Please enter your company or organization"
							value="" placeholder="Enter Company/Organization" />
					</div>
					<div class="form-group">
						<label for="txtzipcode">Zip/Postal Code</label> <input type="text"
							id="txtzipcode" class="form-control" name="txtzipcode"
							data-rule-required="true"
							data-msg-required="Please enter your zip code" value=""
							placeholder="Enter Zip/Postal Code" />
					</div>
					<div class="form-group">
						<label for="txtquestion">Any questions before we meet?</label>
						<textarea id="txtquestion" name="txtquestion" class="form-control"
							placeholder="Any questions before we meet?"></textarea>
					</div>
					<button type="submit" class="btnsubmit">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
	
<div class="line-break sprite height10" style="margin-top:20px"></div>
</div>
