<?php include('config/config.php');?>
<?php include('config/db.php');?>
<?php 
/* 
id
full_name
institution_name
institutional_address
city
email
Telephone
job_title
description
network
configure	
experience	
attended	
sponsor	
created_at


*/









?>
<?php include('inc/header.php');?>
<div class="container">
    <form class="needs-validation" novalidate action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><br>
      <div class="container"><h3>Implementing Network Infrastructure Workshop Application Form </h3><br>
      <p>Please fill in all items completely. Application forms with missing information will not be considered for this workshop</p>
      <div class="formcenter">
      <div class="form-row">
          <label for="validationCustom01">Full Name</label>
          <input type="text" class="form-control is-valid" id="validationCustom01" name="fullname" placeholder="As Appears on the Certificate" value="" required>
          <!--<div class="valid-feedback">
            Looks good!
          </div> -->
        </div>
        <div class="form-row">
          <label for="validationCustom02">Institution Name</label>
          <input type="text" class="form-control is-valid" id="validationCustom02" placeholder="Institution Name" value="" required>
        </div>
        <div class="form-row">
          <label for="validationCustom03">Institutional Address</label>
            <input type="text" class="form-control is-valid" id="validationCustom03" placeholder="Institutional Address" aria-describedby="inputGroupPrepend3" required>
            <!--<div class="valid-feedback">
              Looks good!
            </div>-->
          </div>
       <!-- New Row -->
      <div class="form-row">
          <label for="validationCustom04">City</label>
          <input type="text" class="form-control is-valid" id="validationCustom04" placeholder="City" required>
        </div>
        <div class="form-row">
          <label for="validationCustom05">Email</label>
          <input type="email" class="form-control is-valid" id="validationCustom05" placeholder="State" required>
        </div>
        <div class="form-row">
          <label for="validationCustom06">Telephone</label>
          <input type="text" class="form-control is-valid" id="validationCustom06" placeholder="Telephone" required>
        </div>
      <!-- New Row-->
        <div class="form-row">
          <label for="validationCustom07">Job title</label>
          <input type="text" class="form-control is-valid" id="validationCustom07" placeholder="City" required>
        </div>
        <div class="form-row">
          <label for="validationCustom08">Description of duties and responsibilities</label>
          <textarea id="validationCustom08" rows="3" class="form-control is-valid"  placeholder="Description of duties and responsibilities" required></textarea>
        </div>
         <!-- New Row-->
         <div class="form-row">
          <label for="validationCustom09">Have you used/administered TCP/IP networks?  If yes</label>
          <input type="text" class="form-control is-valid" id="validationCustom09" placeholder="Have you used/administered TCP/IP networks?" required>
        </div>
        <div class="form-row">
          <label for="validationCustom10">Describe your experience (length of time versions etc)</label>
          <textarea id="validationCustom10" rows="3" class="form-control is-valid"  placeholder="Describe your experience (length of time versions etc)" required></textarea>
        </div>
        <!-- New Row-->
        <div class="form-row">
          <label for="validationCustom11">Have you configured or otherwise managed any of the following:<br>
          Routers<br>
          Switches<br>
          Network Monitoring Systems<br>
          Network Operation Center</label>
          <textarea id="validationCustom11" rows="3" class="form-control is-valid"   placeholder ="Have you configured or otherwise managed any Routers, Switches,
          Network Monitoring Systems, or
          Network Operation Center" required></textarea>
        </div>
         <!-- New Row-->
         <div class="form-row">
          <label for="validationCustom12">List any routing/switches courses you attended? And name the training Organization</label>
          <textarea id="validationCustom12" rows="3" class="form-control is-valid"  placeholder="List any routing/switches courses you attended? And name the training Organization" required></textarea>
        </div><br>
        <label style="color:blue">Please ensure that you submit your application in time and fully completed. Selections will be on a competitive basis. Only shortlisted applicants will be contacted.</label>
      
      <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
      </div><br>
     
    </div>
    </form>
</div>

<?php include('./inc/footer.php');?>