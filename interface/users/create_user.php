<?php
include '../layout/header.php';



?>
<form action="http://localhost/Class_ex/buesnis/create_user.php" method="post" enctype="multipart/form-data" class="form-horizontal">
 <div class="control-group">
 		 <div class="controls">
            <label class="control-label">Name</label>
            <input type="text" class="span6 " name="name" /><br />
            <span class="help-inline"><?php if(isset($_GET['name'])) echo"please enter your name correctly"?></span>
            </div><div class="controls">
            <label class="control-label">Last Name</label>
            <input type="text" class="span6 " name="lname" /><br />
            <span class="help-inline"></span>
            </div><div class="controls">
            <label class="control-label">Data of Birt</label>
            <input type="date" class="span6 " name="db" /><br />
            <span class="help-inline"></span>
            </div><div class="controls">
            <label class="control-label">User Name</label>
            <input type="text" class="span6 " name="uname" /><br />
            <span class="help-inline"></span>
            </div><div class="controls">
            <label class="control-label">Password</label>
            <input type="password" class="span6 " name="pass" />
            <span class="help-inline"></span><br /><br />
            </div><div class="controls">
            <label class="control-label">Email Address </label>
                              
            <div class="input-prepend">
              <span class="add-on">@</span><input  type="text" placeholder="Email Address" name="email" /><br /> <br />
            </div></div>
            <div class="controls">
             <label class="control-label">Telephone</label>                 
             <input type="tel" class="span6 " name="tel" /><br />
            </div><div class="controls">
               <input type="file" class="span6 " name="pic" />   <br />   
               </div>
               <div class="controls">
               	<input type="submit" name="reg" value="Register" />
               </div>
   </div>

<div class="control-group">
                              <label class="control-label">Email Address Input</label>
                              <div class="controls">
                                 <div class="input-prepend">
                                    <span class="add-on">@</span><input class=" " type="text" placeholder="Email Address" />
                                 </div>
                              </div>



</form>

<?php include'../layout/footer.php';?>