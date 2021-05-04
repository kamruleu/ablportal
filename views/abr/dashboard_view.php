<div class="page-wrapper">
                <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Hello, <?php echo Session::get('susername')?>!</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text text-primary">নোটিশ : প্রতিদিন রাত ১১:৪৫ ঘটিকায় স্টেটমেন্ট জেনারেট হবে : ধন্যবাদ । <br>
                                        <p class="text-danger">ফ্রি কুরিয়ার ডেলিভারি পেতে সর্বনিম্ন ২০০০টাকার পণ্য অর্ডার করুন</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="alist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="row widget-separator-1">
                                    
                                    <div class="col-md-4">
                                        <div class="widget-1">
                                        <h1 class="title">Today</h1>
                                        <button class="btn btn-primary btn-sm btn-pill" id="btnreload"><i class="ti-reload"></i><span>&nbsp;Reload</button>
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                    
                                                        <h5 class="title"> Total Promotional Expenses</h5>
                                                        
                                                        
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-primary" id="todaypromototal">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="widget-1" id="todaypromolist">
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">Today Activity (A Team) Total BV <span class="text-danger" id="ateambv"></span></div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="alist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">(B Team) Total BV <span class="text-danger" id="bteambv"></span></div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="blist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">My BV <span class="text-danger" id="mybv"></span></div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="alist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">My OSP BV <span class="text-danger" id="myospbv"></span></div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="blist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">My Purchase Account <span class="text-danger" id="mypbal"></span></div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul id="blist">
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="row widget-separator-1">
                                    <div class="col-md-4">
                                        <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title">Total Matching Commission</h5>
                                                        <span class="descr">Income</span>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-primary">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title">Total Tax</h5>
                                                        <span class="descr">Source Tax Paid</span>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-danger">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title">Total Promotional Expenses</h5>
                                                        <span class="descr">Expense</span>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-primary">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row p-3">
                                            <div class="col-12 box-title pb-3 pt-3">Expenses</div>
                                            <div class="col-md-12">
                                                <div class="widget-10 d-inline-block">
                                                    
                                                    <div class="value">Spot</div>
                                                    <div class="value">0</div> 
                                                </div>
                                                <div class="widget-10 d-inline-block">
                                                    <div class="value">Generation</div>
                                                    <div class="value">0</div> 
                                                </div>
                                                <div class="widget-10 d-inline-block">
                                                    <div class="value">ODC Expenses</div>
                                                    <div class="value">0</div> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="row widget-separator-1">
                                    <div class="col-md-4">
                                        <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title"> Generation 2</h5>
                                                        
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-info" id="gen2">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title"> Generation 3</h5>
                                                        
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-success" id="gen3">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title"> Generation 1</h5>
                                                       
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-primary" id="gen1">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title"> Generation 4</h5>
                                                        
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-danger" id="gen4">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title"> Generation 5</h5>
                                                        
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-warning" id="gen5">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">My BIN List</span>
                                    </div>
                                     <div class="panel-action">
                                        <button class="btn btn-primary btn-shadow btn-gradient btn-sm btn-pill">View All</button>
                                    </div> 
                                </div>
                                <div class="panel-wrapper">
                                <table id="bintable"  cellspacing="0" width="100%">
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>