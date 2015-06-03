
  <nav class="navbar navbar-default navbartop nospace">
        	<div class="container-fluid">
    	    	 <div class="row">
                  <div class="col-xs-12 col-lg-12">


                          <ul class="nav navbar-nav navbar-right"  >
                             <li class><a href="catalago"><i class="fa fa-users"></i> Catálago</a></li>
                             <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><span class="fa fa-user fa-fw" ></span>{{Auth::user()->nombre}}<span class="caret"></span></a>

                              <ul class="dropdown-menu" >
                                  <div class="list-group" style="margin-bottom:-20px;">
                                    <a href="logout" class="list-group-item "><i class="fa fa-sign-out"></i> Logout</a>
                                  </div>
                              
                                
                              </ul>

                            </li>
                          </ul>
                     
                          <center class="hidden-xs text-black"><h4></h4> </center>
                 
                  
          		
                  
                  

                  </div>   

                      
                 </div>
           
     		</div>

				
</nav>
    