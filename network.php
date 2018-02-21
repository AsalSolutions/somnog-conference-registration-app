<?php include('config/config.php');?>
<?php include('inc/header.php');?>
<div class="container">
    <form class="needs-validation" novalidate action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><br>
      <div class="container"><h3>Implementing Network Infrastructure Workshop Application Form </h3><br>
      <p>Please fill in all items completely. Application forms with missing information will not be considered for this workshop</p>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Full Name</label>
          <input type="text" class="form-control is-valid" id="validationCustom01" name="fullname" placeholder="As Appears on the Certificate" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Institution Name</label>
          <input type="text" class="form-control is-valid" id="validationCustom02" placeholder="Institution Name" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Institutional Address</label>
          <div class="input-group">
            <!--<div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
            </div> -->
            <input type="text" class="form-control is-valid" id="validationCustom03" placeholder="Institutional Address" aria-describedby="inputGroupPrepend3" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationServer03">City</label>
          <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer04">State</label>
          <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer05">Zip</label>
          <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
    </div>
    </form>
</div>

<?php include('./inc/footer.php');?>