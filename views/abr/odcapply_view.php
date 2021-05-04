<div class="page-wrapper">
                <div class="page-title">
                
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Get ODC</span>
                                    </div>
                                </div>
                                
                            </div>
                          
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                               
                                <div class="tab-content">
                                        <div class="tab-pane active" id="retailerreg">    
                                            <div class="panel panel-default">
                                                <div class="panel-head">
                                                    <div class="panel-title">
                                                        <div  id="resultalert" class="alert alert-dark">
                                                            ODC Application
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    
                                                    <form id="retailerform" enctype="multipart/form-data">
                                                        
                                                        <div class="row">
                                                        <div class="col-4">
                                                                <div>
                                                                <label for="district">District</label>
                                                                    <select class="form-control form-control-sm" id="district" name="district">
                                                                        
                                                                    </select>
                                                                    <span  class="form-text">District is mandetory</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div>
                                                                <label for="thana">Upazilla/Thana</label>
                                                                    <select class="form-control form-control-sm" id="thana" name="thana">                                                        
                                                                    </select>
                                                                    <span  class="form-text">Upazilla/Thana is mandetory</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div>
                                                                    <label for="postal">Postal</label>
                                                                    <input type="text" class="form-control form-control-sm" id="postal" name="postal" placeholder="Postal Code">
                                                                    <span id="postallHelp" class="form-text">Postal is important for generation commission.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="row">
                                                            
                                                            <div class="col-4">
                                                                <div>
                                                                    <label for="refrin">Txn. No</label>
                                                                    <input type="text" class="form-control form-control-sm" id="txnno" name="txnno" placeholder="Txn. No">
                                                                    <span  class="form-text">Txn. No from confirmation code sms.</span>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-4">
                                                                <div>
                                                                    <label for="refrin">Confirmation No</label>
                                                                    <input type="text" class="form-control form-control-sm" id="otpno" name="otpno" placeholder="OTP. No">
                                                                    <span  class="form-text">Confirmation No from confirmation code sms.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div>
                                                                <label for="thana">Group</label>
                                                                    <select class="form-control form-control-sm" id="group" name="group">                                                        
                                                                    <option value="ABL United Associates">ABL United Associates</option>
                                                                    <option value="ABL Best Associates">ABL Best Associates</option>
                                                                    <option value="ABL Pioneer Associates">ABL Pioneer Associates</option>
                                                                    </select>
                                                                    <span  class="form-text">Group Name</span>
                                                                </div>
                                                            </div>    
                                                            
                                                        </div>
                                                        <div class="row">
                                                            
                                                            <div class="col-4">
                                                                <div>
                                                                <label for="thana">ARC Code</label>
                                                                    <select class="form-control form-control-sm" id="arccode" name="arccode">                                                        
                                                                    </select>
                                                                    <span  class="form-text">ARC Code</span>
                                                                </div>
                                                            </div>    
                                                            
                                                        </div>
                                                    
                                                    <div class="panel-footer text-right">
                                                        <button type="submit" id="registerretailer" class="btn btn-success mr-2">Register</button>
                                                        <button type="reset" id="btnclear" class="btn btn-outline btn-secondary btn-outline-1x">Clear</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>    
</div>