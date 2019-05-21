<body style="background-color:#fafafa;">    

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
                    <div class="card-header bg-primary text-white">  
                        <h4 class="card-title text-uppercase">Employee Form</h4>  
                    </div>  
                    <div class="card-body">  
                        <form id="needs-validation" novalidate>  
             
                        <h4 class="card-title text-uppercase" align="center">Choose amount</h4><br><br> 
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
                            <div class="row">  
                                 <div class="col-sm-4 col-md-4 col-xs-12">  
                                 </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                    <label for="phonenumber">Mobile Number</label>  
                                    <input type="tel" pattern="^\d{10}$" class="form-control" name="phonenumber" id="phonenumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                    <div class="invalid-tooltip">  
                                        <h6>Please enter 10 digit mobile number.</h6>  
                                    </div>   
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-4 col-xs-12">  
                                   
                                </div>  
                            </div>  
      
                            <div class="container" align="center">
                              <!-- Trigger the modal with a button -->
                          
                                <!-- <div class="col-sm-5 col-md-5 col-xs-2">  
                                  <div class="float-right">   -->
                                      <!-- <button class="btn btn-danger rounded-0" type="submit">Cancel</button>   -->
                                      <!-- <button class="btn btn-primary rounded-0" type="submit">Register</button>   -->
                                      <!-- <button type="submit" class="btn btn-info btn-lg" onclick="checkcashcard()">Open Modal</button> -->
                                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"; >Open Modal</button>
                                      <!-- data-toggle="modal" data-target="#myModal"; -->
                                  <!-- </div>  
                                </div>   -->


                              <!-- Modal -->
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <p>แสดงเลข 14 หลัก.</p>
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
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
    </section>

    
  </body>
</html>