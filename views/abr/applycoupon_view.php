<div class="page-wrapper">
                <div class="page-title">
                
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Apply Coupon</span>
                                        
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
                                            Apply Coupon
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <form id="customerform">
                                        <div class="row">
                                            <div class="col-4" id="odcdiv">
                                                <div>
                                                    <label for="odclist">Select ODC</label>
                                                    <select class="form-control form-control-sm" id="odclist" name="odclist">
                                                                                                  
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-4" id="rindiv">
                                                <div>
                                                    <label id="rin">Ref. RIN</label>
                                                    <input type="text" class="form-control form-control-sm" id="mrin" name="mrin" placeholder="Ref. RIN">
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
                                        <div class="row">
                                            

                                            <div class="col-4">
                                                <div>
                                                    <label id="rin">Coupon</label>
                                                    <input type="text" class="form-control form-control-sm" id="coupon" name="coupon" placeholder="Coupon">
                                                    <p class="form-text text-danger">BV: <span  id="couponbv"></span></p>
                                                </div>
                                            </div>  
                                            <div class="col-4" >
                                                <div>
                                                    <label id="rin">SL</label>
                                                    <input type="text" class="form-control form-control-sm" id="couponsl" name="couponsl" placeholder="SL">
                                                    <input type="hidden" id="token" name="token" value="<?php echo $this->token;?>">
                                                </div>
                                            </div>  
                                                                                    
                                        </div>
                                        
                                    </form>
                                    <div class="panel-footer text-right">
                                    <button class="btn btn-primary mr-2" id="apply">Apply Coupon</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
</div>