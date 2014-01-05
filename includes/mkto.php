<!-- MKTOFORM -->
<script type="text/javascript">
   var profiling = {
   isEnabled: false,
   numberOfProfilingFields: 3,
   alwaysShowFields: [ 'mktDummyEntry']
 };
 </script>
                                            
<script type="text/javascript"> function mktoGetForm() {return document.getElementById('bmg_mainForm'); }</script>

<form id="mktoForm" name="mktoForm" action="http://app-b.marketo.com/index.php/leadCapture/save" enctype="multipart/form-data" method="post">
 
<input type="hidden" name="retURL" id="retURL" value="<?php echo successURL()?>">
<input type="hidden" name="returnURL" id="returnURL" value="<?php echo successURL()?>"/>
 
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
 
</form>

<!-- START MARKETO FORM SUPPORT -->
<script type="text/javascript" src="//app.marketo.com/js/mktFormSupport.js"></script>
<script>var mktVisitorToken = 'VISITOR_MKTTOK_REPLACE'; </script>
<script>mktoMunchkin('131-SYO-861', {customName: 'ContatUS-FlowB', wsInfo: 'j1RR'});</script>

<script type="text/javascript">
	jQuery(function($) {
		var $form = $('#mktoForm');
		$.ajax({
			url: $form.attr('action'),
			type: 'post',
			data: $form.serialize(),
			success: function(data) {
				if(console) {
					console.log(data);
				}
			}
		});
	});
</script>