<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6" style="background-color:  #DCDCDC;  border-radius: 5px; margin-bottom:30px;">
            <form action="<?= base_url();?>login/signUpUser" method="POST" style="margin:15px;">
                <div class="form-group row ">
                    <label><strong>Name &ensp; </strong></label>
                    <div class="col-12 row" style="padding:0px; margin:0px;">
                    <input type="text" id="fname" class="form-control" style="width:50%;" placeholder="First Name" name="fName"  required>
                    <input type="text" id="lname" class="form-control" style="width:50%;" placeholder="Last Name" name="lName">
                    </div>
                </div>
                <div class="form-group row">
                    <label><strong>Email &ensp;</strong></label>
                    <!-- <div class="row"> -->
                    <input placeholder="someone@mail.com" id="rEmail" class="form-control" type="email" style="width: 100%" name="email" required>
                 <!-- </div> -->
                </div>
                <div class="form-group row">
                    <label><strong>Address&ensp;</strong></label>
                    <textarea class="form-control" name="address">
                        
                    </textarea>
                </div>
                <div class="form-group row">
                    <label><strong>Phone Number &ensp; </strong></label>
                    <input type="text" name="phonenumber" class="form-control">
                    
                </div>
                <div class="form-group row">
                    <label><strong>Password &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</strong></label>
                    <input type="password" id="rpass" class="form-control" style="width: 100%;" name="pass" required>
                </div>
                <div class="form-group row">
                    <label><strong>Confirm Password &ensp;</strong></label>
                    <input type="password" class="form-control" style="width: 100%;" id="crpass" name="rePass" required>
                </div>
                <div>
                 <center>
                    <button type="submit" class="btn bungkus-button" id="registerbtn" style="background-color:#32CD32;border-radius: 7px; color: #fff; font-size: 15px;height:40px; line-height: 1.2;">Sign Up</button>
                    </center>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            
        </div>
    </div>
</div>
<?php
    //kasih tau kalo signupnya kgk bener
    var_dump($_COOKIE);
    var_dump($_COOKIE['signUpFail']);
    var_dump($_COOKIE['signUpFailed']);
    // if(isset($_COOKIE['signUpFail'])){
    //     if(isset($_COOKIE['signUpFail']) == "Insert Fail"){
    //         echo "<script> alert('Insert Failed'); </script>";
    //     }
    //     else{
    //         echo "<script> alert('Password and Re-type Password Mismatch'); </script>";
    //     }
    //     unset($_COOKIE['signUpFail']);
    // }
?>