

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .reg-div {
    margin: 0 auto;
    max-width: 750px;
}
.reg-div .form-group {
    margin-bottom: 16px;
}
.reg-div .form-group label {
    padding-bottom: 5px;
}
.submit-div {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 60px !important;
}
    </style>
</head>
  <body>
    <main class="container reg-div">
        <div class="p-3 text-center my-4 bg-light rounded-3">
             <h1>Registration form</h1>
        </div>
        <section>
         
            <span id="fError" style="color: red"></span>
            
                          <form method="post" enctype="multipart/form-data" action="welcome.html">
            <div class="form-group">
                    <label> Full Name </label>
                    <input id="name" type="text" name="name" class="form-control" onkeyup="Validatename();"/>
                    <span id="nError" style="color: red"></span>
                    </div>
                <div class="form-group">
                    <label> Email </label>
                    <input id="email" type="email" name="email" class="form-control" onkeyup="ValidateEmail();"/>
                    <span id="eError" style="color: red"></span>
                </div>
                <div class="form-group">
                <label> Phone Number </label>
                     <input id="phone" type="text" name="phone" class="form-control" placeholder="" aria-label="Phone" onkeyup="Validatephone();">
               <span id="pError" style="color: red"></span>
               </div>
                <div class="form-group">
                    <label> Password </label>
                   
                   <input type ="password" i ="pswd" class="form-control" onchange="return verifyPassword()" >   
                </div>                
                <div class="form-group">
                    <label> Age </label>
                    <input type="text" name="age" class="form-control"/>
                </div>
                              
                <div class="form-group">
                    <label> Image </label>
                    <input type="file" id="file" onchange="return fileValidation()" class="form-control"/>

                </div>
                <div class="form-group submit-div">
                    <input type="submit" class="btn btn-success" value="Register" name="register"/>
                   
                </div>
            </form>
        </section>
    </main>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!--Client side validation-->
   <script type="text/javascript">
    function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("eError");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
        }
    }

    //Only chaeacters

    function Validatename() {
        var email = document.getElementById("name").value;
        var lblError = document.getElementById("nError");
        lblError.innerHTML = "";
        var expr =/^[a-zA-Z ]+$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Only alphabates allowed.";
        }
    }

    //Phone number

    function Validatephone() {
        var phone = document.getElementById("phone").value;
        var lblError = document.getElementById("pError");
        lblError.innerHTML = "";
        var expr =/^\d{10}$/;
        if (!expr.test(phone)) {
            lblError.innerHTML = "Please enter 10 digit number";
        }
    }


//
function fileValidation(){
    var fileInput = document.getElementById('file').value;
    var lblError = document.getElementById("fError");
    var filePath = fileInput.value;
    lblError.innerHTML = "";
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        lblError.innerHTML = 'Please upload file having extensions .jpeg/.jpg/.png/.gif only.';
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
  


</script>

  </body>
</html>