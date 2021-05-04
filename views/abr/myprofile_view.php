<div class="page-wrapper">
                <div class="page-title">
                
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">My Profile</span>
                                        <input type="hidden" value="<?php echo $this->token;?>" id="token">
                                    </div>
                                </div>
                                
                            </div>
                          
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    
                                    <table class="table table-bordered table-striped">                                        
                                        <tbody>
                                            
                                                <?php if(count($this->myprofile)>0){ ?>
                                                    <tr><td><strong>RIN</strong></td><td colspan="3"><?php echo $this->myprofile[0]['rin'] ?></td></tr>
                                                    <tr><td><strong>CIN</strong></td><td colspan="3"><?php echo $this->myprofile[0]['cin'] ?></td></tr>
                                                    <tr><td><strong>PIN</strong></td><td colspan="3"><?php echo $this->myprofile[0]['pin'] ?></td></tr>
                                                    <tr><td><strong>Name</strong></td><td colspan="3"><?php echo $this->myprofile[0]['org'] ?></td></tr>
                                                    <tr><td><strong>Address</strong></td><td colspan="3"><?php echo $this->myprofile[0]['address'] ?></td></tr>
                                                    <tr><td><strong>Mobile</strong></td><td colspan="3"><?php echo $this->myprofile[0]['mobile'] ?></td></tr>
                                                    <tr><td><strong>Email</strong></td><td colspan="3"><?php echo $this->myprofile[0]['mail'] ?></td></tr>
                                                    <tr><td><strong>Nominee</strong></td><td colspan="3"><?php echo $this->myprofile[0]['nominee'] ?></td></tr>
                                                    <tr><td><strong>Group</strong></td><td colspan="3"><?php echo $this->myprofile[0]['mygroup'] ?></td></tr>
                                                    <tr><td><strong>Member Type</strong></td><td colspan="3"><?php echo $this->myprofile[0]['membertype'] ?></td></tr>                                            
                                                    <tr><td><strong>Bank Account No</strong></td><td colspan="3"><input type="text" class="form-control form-control-sm" name="bankacc" id="bankacc" value="<?php echo $this->myprofile[0]['acc'] ?>">
                                                    <button class="btn btn-primary btn-sm btn-pill" id="btnbankacc">Update Bank Account</button><span id="changeresult"></span></td></tr>
                                                    <tr><td><strong>Bank Name</strong></td><td colspan="3"><?php echo $this->myprofile[0]['bank'] ?></td></tr>
                                                    
                                                <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    
                                    </form>
                                    <div class="row">
                                    <div class="col">
                                        <div class="bg-primary text-white mb-1 mt-1" id="passchangeresult">Change Password</div>
                                        <form id="frmprofilepass">
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="currentpass" id="currentpass" placeholder="Current Password"></div>
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="newpass" id="newpass" placeholder="New Password"></div>
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="confirmpass" id="confirmpass" placeholder="Confirm Password"></div>
                                            <div class="col"><button class="btn btn-primary btn-sm btn-pill" id="btnchangepass">Change Password</button></div>
                                        </form>
                                    </div>
                                    <div class="col">
                                    <div class="bg-primary text-white mb-1 mt-1" id="pinchangeresult">Change PIN</div>
                                        <form id="frmprofilepin">
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="currentpin" id="currentpin" placeholder="Current PIN"></div>
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="newpin" id="newpin" placeholder="New PIN"></div>
                                            <div class="col"><input type="password" class="form-control form-control-sm" name="confirmpin" id="confirmpin" placeholder="Confirm PIN"></div>
                                            <div class="col"><button class="btn btn-primary btn-sm btn-pill" id="btnchangepin">Change PIN</button></div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>    
</div>