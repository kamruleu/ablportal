<div class="page-wrapper">
                <div class="page-title">
                
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Get Confirmation Code</span>
                                        
                                    </div>
                                </div>
                                
                            </div>
                          
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div id="resultalert" class="alert alert-dark">
                                            Get Confirmation Code
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <form id="customerform">
                                        <div class="row">
                                        <div class="col-4">
                                                <div>
                                                    <label for="confcodetype">Get Confirmation Code For</label>
                                                    <select class="form-control form-control-sm" id="confcodetype" name="confcodetype">
                                                    <option value="Disbursement Account Update">Disbursement Account Update</option>
                                                    <option value="ODC Apply">ODC Apply</option>
                                                    <!-- <option value="Core Information Update">Core Information Update</option> -->
                                                    <!-- <option value="CIN BV Transfer">CIN BV Transfer</option> -->
                                                    <!-- <option value="EXPRESS Card Payment">EXPRESS Card Payment</option> -->
                                                    <option value="BIN Transfer">BIN Transfer</option>
                                                    <!-- <option value="Photo Upload">Photo Upload</option> -->
                                                        
                                                    </select>
                                                    <p id="emailHelp" class="form-text text-success">Required Amount: <span id="reqamt">25</span></p>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-4" id="idtypediv">
                                                <div>
                                                    <label for="idtype"></label>
                                                    <select class="form-control form-control-sm" id="idtype" name="idtype">
                                                    <option value=""></option>
                                                    <option value="New Retailer">New Retailer</option>
                                                    <option value="Existing Retailer">Existing Retailer</option>
                                                    <option value="Re-issue">Re-issue</option>                                                    
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-4" id="bindiv">
                                                <div>
                                                    <label id="rin">BIN To Transfer</label>
                                                    <input type="text" class="form-control form-control-sm" id="bin" name="bin" placeholder="BIN">
                                                    <p class="form-text text-danger">Name: <span  id="binname"></span></p>
                                                </div>
                                            </div>  

                                            <div class="col-4" id="rindiv">
                                                <div>
                                                    <label id="rin">RIN</label>
                                                    <input type="text" class="form-control form-control-sm" id="mrin" name="mrin" placeholder="RIN">
                                                    <p class="form-text text-danger">Name: <span  id="rinname"></span></p>
                                                </div>
                                            </div>

                                            <div class="col-4" id="cindiv">
                                                <div>
                                                    <label id="rin">CIN</label>
                                                    <input type="text" class="form-control form-control-sm" id="mcin" name="mcin" placeholder="CIN">
                                                    <p class="form-text text-danger">Name: <span  id="cinname"></span></p>
                                                </div>
                                            </div>  

                                                                                    
                                        </div>
                                        
                                    </form>
                                    <div class="panel-footer text-right">
                                    <button class="btn btn-primary mr-2" id="checkout">Get Confirmation Code</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
</div>