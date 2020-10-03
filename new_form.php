<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    .required1 input:after { content:"*"; }
  </style>
  <title>Make your own website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #6b8cb4 ;">

<div class="container">
  <br>
  <h2><br>Enter all of your details to get your own website </h2>
  <br>


<!-- Form Starting -->
  <form action="output_info.php"  method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>


    <div class="form-group ">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="required1" placeholder="Enter your name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group ">
      <label for="prof">Profession:</label>
      <input type="text" class="form-control" id="required1" placeholder="Enter your profession" name="prof" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group ">
      <label for="biohead">Bio- Header:</label>
      <input type="text" class="form-control" id="biohead" placeholder="Enter the head of your bio (Name, pursuing, designations, etc)" name="biohead" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="bio">Bio: </label>
      <textarea class="form-control" id="bio"  name="bio" required></textarea>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="skill1">Skill 1: </label>
      <textarea class="form-control" id="skill"  name="skill1" required></textarea>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="skimg1">Skill Image 1:</label>
      <input type="file" id="myFile" name="skimg1">
    </div>
    <div class="form-group">
      <label for="skill1">Skill 2: </label>
      <textarea class="form-control" id="skill"  name="skill2" required></textarea>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="skimg2">Skill Image 2:</label>
      <input type="file" id="myFile" name="skimg2">
    </div>
    <div class="form-group">
      <label for="skill1">Skill 3 </label>
      <textarea class="form-control" id="skill"  name="skill3" required></textarea>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="skimg3">Skill Image 3:</label>
      <input type="file" id="myFile" name="skimg3">
    </div>
    <div class="form-group">
      <label for="skill1">Skill 4 </label>
      <textarea class="form-control" id="skill"  name="skill4" required></textarea>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="skimg4">Skill Image 4:</label>
      <input type="file" id="myFile" name="skimg4">
    </div>

    <h3> Choose your gallery images: </h3>

    <div class="form-group">
      <label for="img01">Image 1:</label>
      <input type="file" id="myFile" name="img1" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please select an image.</div>
    </div>



    <div class="form-group">
      <label for="img02">Image 2:</label>
      <input type="file" id="myFile" name="img2">
    </div>

    <div class="form-group">
      <label for="img03">Image 3:</label>
      <input type="file" id="myFile" name="img3">
    </div>
    <div class="form-group">
      <label for="img04">Image 4:</label>
      <input type="file" id="myFile" name="img4">
    </div>

    <div class="form-group">
      <label for="img05">Image 5:</label>
      <input type="file" id="myFile" name="img5">
    </div>

    <div class="form-group">
      <label for="img06">Image 6:</label>
      <input type="file" id="myFile" name="img6">
    </div>


    <div class="form-group">
      <label for="insta">Instagram link:</label>
      <input type="text" class="form-control" id="insta" placeholder="Enter Facebook link" name="insta" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <label for="fb">Facebook Link:</label>
      <input type="text" class="form-control" id="fb" placeholder="Enter Facebook link" name="fb" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <label for="ldin">Linkdn Link:</label>
      <input type="text" class="form-control" id="ldin" placeholder="Enter Linkdn Link" name="ldin" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="git">GitHub Link:</label>
      <input type="text" class="form-control" id="git" placeholder="Enter Github Link" name="git" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <label for="cont">Enter your contact details:</label>
      <input type="text" class="form-control" id="cont" placeholder="Enter contact details" name="cont" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Please check all the inputs once again before submitting.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>


    <button type="submit" name = "submit" class="btn btn-primary"> Submit</button>

  </form>
  <br>
  <br>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



</body>
</html>
