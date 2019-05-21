<body style="background-color:#e6e6fa;">    

    <?php $str = '12365421025635874';
    $shuffled = str_shuffle($str);
    ?> 
    <?php
    
    ?>

    <section class="site-hero overlay page-inside" style="background-image: url(public/img/prop_single_img.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <!-- <div class="col-md-7 text-left mr-auto" data-aos="fade-up">
            <h1 class="heading">$1,650</h1>
            <p class="sub-heading">2724 20th Ave N, Houston TX</p>
          </div> -->
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    <!-- END section -->
    <section class="section" id="next-section" >
    <div class="container py-5">  
        <div class="row">  
            <div class="offset-md-2 col-md-8 offset-md-2">  
                <div class="card">  
                    <div class="card-header  bg-info text-white" >  
                        <h4 class="card-title" align="center" >CashCard</h4>  
                    </div>  
                    <div class="card-body">  

                      <div class="row form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                <li class="active"><a href="#step-1">
                                    <h4 class="list-group-item-heading">Step 1</h4>
                                    <p class="list-group-item-text">Choose network</p>
                                </a></li>
                                <li class="disabled"><a href="#step-2">
                                    <h4 class="list-group-item-heading">Step 2</h4>
                                    <p class="list-group-item-text">Choose amount</p>
                                </a></li>
                                <!-- <li class="disabled"><a href="#step-3">
                                    <h4 class="list-group-item-heading">Step 3</h4>
                                    <p class="list-group-item-text">Third step description</p>
                                </a></li> -->
                            </ul>
                        </div>
                  </div>
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                <h1> Choose network </h1><br>
                                  <div class="container-fluid" align="center">
                                    <div class="col"  align="center" id="activate-step-2">
                                      <div class="col-sm-4">
                                      <button type="button" id="activate-step-2" name="ais" class="btn btn-default btn-lg">AIS </button>
                                      </div>
                                      
                                      <div class="col-sm-4">
                                      <button type="button" id="activate-step-2" name="dtac" class="btn btn-default btn-lg">DTAC </button>
                                      </div>
                                    
                                      <div class="col-sm-4">
                                      <button type="button" id="activate-step-2" name="truemove" class="btn btn-default btn-lg">Truemove H</button>
                                      </div>
                                    </div>
                                  </div><br><br>
                                <!-- <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12 well">

                                <form id="needs-validation" novalidate>            
                                    <h5 class="card-title" align="center">Choose amount</h5><br>
                                      <div class="container-fluid" align="center">
                                        <div class="col" >
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">50</button>
                                          </div>
                                          
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">90</button>
                                          </div>
                                        
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">150</button>
                                          </div>
                                        
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">300</button>
                                          </div>
                                        </div>
                                        <br><br>
                                        <div class="col" > <br><br>
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">500</button>
                                          </div>
                                          
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">700</button>
                                          </div>
                                        
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">900</button>
                                          </div>
                                        
                                          <div class="col-sm-3">
                                          <button type="button" class="btn btn-default btn-lg">1000</button>
                                          </div>
                                        </div>
                                      </div>

                                        <br><br>
                                        
                  
                                        <div class="container-fluid" align="center">
                                                  <button  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"; >Card Number</button>
                                          <br><br>
                                          <!-- Modal -->
                                          <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                  <p>Show 14 Card Number</p>
                                                  <?php echo substr($shuffled ,0,14); ?>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal" onclick='window.location.reload();' >Close</button>
                                                </div>
                                                
                                              </div>
                                  
                                            </div>
                                          </div>
                                        </div>
                                    </form>  

                                <!-- <h1 class="text-center"> STEP 2</h1> -->
                            </div>
                        </div>
                    </div>
                     
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
    </section>

    
  </body>
</html>