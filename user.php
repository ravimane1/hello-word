<?php

?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
//$(document).ready(function(){
// $('.box').hide();
//  $('#selected_data').change(function() {
//    $('.box').hide();
//    $('#div' + $(this).val()).show();
// });
//});
</script>
  
  <div class="container">
      <a href="<?php  echo base_url(); ?>" class="btn btn-info btn-small" style="float: right; margin-top: 1%;">
          <span class="glyphicon glyphicon-log-out"></span> Log Out
        </a>
      
 <div class="col-md-12">
     <div class="col-md-6">
 <h2>Add Patient Details</h2>
 <form action="<?php echo base_url();?>index.php/login/makepdf" method="post" name="myform" id="myform">
  <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="firstname" class="form-control" id="firstname" name="firstname">
  </div>
     <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="lastname" class="form-control" id="lastname" name="lastname">
  </div>
     
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="text" class="form-control" id="age" name="age">
  </div>
     <div class="input-group">
    <label for="age">Height:</label>
    <input type="text" class="form-control" id="height" name="height_ft" placeholder="feet">
    <input type="text" class="form-control" id="height" name="height_inch" placeholder="inches">
    
  </div>
  <div class="form-group">
    <label for="pwd">Weight:</label>
    <input type="weight" class="form-control" id="weight" name="weight" placeholder="pound">
  </div>
     
     <div class="form-group">
  <label for="sel1">DME:</label>
  <select  class="form-control" id="selected_data"  name="myoption" onchange="showSelectedDiv()" multiple="">
      <option>Select</option>
      <option value="front_wheeled_walker">FRONT WHEELED WALKER </option>
      <option value="walker_with_4_wheels">WALKER WITH 4 WHEELS </option>
      <option value="beside_commode">BEDSIDE COMMODE </option>
      <option value="standard_wheelchair_or_transport_wheelchair">STANDARD WHEELCHAIR OR TRANSPORT WHEELCHAIR</option>
      <option value="lightweight_wheelchair">LIGHTWEIGHT WHEELCHAIR</option>
      <option value="hemi_wheelchair">HEMI-WHEELCHAIR</option>
      <option value="recliner_wheelchair">RECLINER WHEELCHAIR</option>
      <option value="heavy_duty_wheelchair">HEAVY DUTY WHEELCHAIR</option>
      <option value="extra_heavy_duty_wheelchair">EXTRA HEAVY DUTY WHEELCHAIR</option>
      <option value="semi_electric_hospital_bed">SEMI-ELECTRIC HOSPITAL BED  </option>
      <option value="duty_extra_wide_semi_electric_hospital_bed">DUTY EXTRA WIDE SEMI ELECTRIC HOSPITAL BED</option>
      <option value="trapeze">TRAPEZE</option>
      <option value="suction_machine_qulifying_diagnoses">SUCTION MACHINE QUALIFYING DIAGNOSES</option>
      <option value="hoyer_lift">HOYER LIFT </option>
      <option value="nebulizer_qulifying_diagnoses">NEBULIZER QUALIFYING DIAGNOSES</option>
      <option value="cpap">CPAP </option>
      <option value="bipap_therapy">BIPAP THERAPY </option>
      <option value="bipap_therapy_copd">BIPAP THERAPY COPD</option>
      <option value="support_surfaces">SUPPORT SURFACES</option>
  </select>
</div> 
  
  <button type="submit" class="btn btn-success">Save And Generate PDF</button>
</form>
 <?php if(isset($suceess)){?>
 <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful email send.
</div>
 <?php }?>
  </div>
 </div>
  </div>  
  
<div id="divfront_wheeled_walker" class="box">front_wheeled_walker</div>
<div id="divwalker_with_4_wheels" class="box">walker_with_4_wheels</div>
<div id="divbeside_commode" class="box">beside_commode</div>
<div id="divstandard_wheelchair_or_transport_wheelchair" class="box">standard_wheelchair_or_transport_wheelchair</div>
<div id="divlightweight_wheelchair" class="box">lightweight_wheelchair</div>
<div id="divhemi_wheelchair" class="box">hemi_wheelchair</div>
<div id="divrecliner_wheelchair" class="box">recliner_wheelchair</div>
<div id="divheavy_duty_wheelchair" class="box">heavy_duty_wheelchair</div>
<div id="divextra_heavy_duty_wheelchair" class="box">extra_heavy_duty_wheelchair</div>
<div id="divsemi_electric_hospital_bed" class="box">semi_electric_hospital_bed</div>
<div id="divduty_extra_wide_semi_electric_hospital_bed" class="box">duty_extra_wide_semi_electric_hospital_bed</div>
<div id="divtrapeze" class="box">trapeze</div>
<div id="divsuction_machine_qulifying_diagnoses" class="box">suction_machine_qulifying_diagnoses</div>
<div id="divhoyer_lift" class="box">hoyer_lift</div>
<div id="divnebulizer_qulifying_diagnoses" class="box">nebulizer_qulifying_diagnoses</div>
<div id="divcpap" class="box">cpap</div>
<div id="divbipap_therapy" class="box">bipap_therapy</div>
<div id="divbipap_therapy_copd" class="box">bipap_therapy_copd</div>
<div id="divsupport_surfaces" class="box">support_surfaces</div>

  
  <script type="text/javascript">
//  function selectMultiple(){
//  var str="",i;
//
//for (i=0;i<myform.myoption.options.length;i++) {
//    if (myform.myoption.options[i].selected) {
//        str = str + i + " ";
//    }
//}
//
//
//  }
$('.box').hide();
function showSelectedDiv()
{
    
 //   for (i=0;i<myform.myoption.options.length;i++) {
//        console.log(myform.myoption.options[i].selected.val());
//    if (myform.myoption.options[i].selected) {
//         $('#div' + $(this).val()).show();
//    }


 var selectedItems=$('#selected_data').val();
 console.log(selectedItems);
 for(i=0;i<selectedItems.length;i++)
 {
     $('#div' + selectedItems[i]).show();
 }
}
    

</script>