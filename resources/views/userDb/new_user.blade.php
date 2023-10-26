
<html>
    <head>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
    <body>
        
    
        <div class="container">
            <div class="row mt-3">
               <div class="col-md">
                  <div class="card">
                     <div class="card-header">
                         <div style="float: left;">
                             <h2>{{ _('Users bio data') }}</h2>
                         </div>
                         <div style="float: right;">
                             <a class="btn btn-dark" href=""> {{ _('Add user data') }} </a>
         
                         </div>
                     </div>
                     <div class="card-body">
                        
                      <form action="{{route('store_user')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=" ">user Id</label>
                            <input type="number" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user Email</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user Phone number</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for=" ">User Photo</label>
                            <input type="file" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user Combine photo</label>
                            <input type="file" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user birth reg</label>
                            <input type="number" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user nid photo</label>
                            <input type="file" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user marriage certificate</label>
                            <input type="file" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user Permanent address</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user main address</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user date of birth</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for=" ">user profession</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                       

                        <button type="button" class="btn btn-dark">Submit</button>

                         
                      </form>

         
                     </div>
                  </div>
               </div>
         
            </div>
         </div>
         
       
    </body>
    
    </html>
    
    
    