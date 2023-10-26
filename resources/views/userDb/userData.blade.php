
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
                         <a class="btn btn-dark" href="{{route('new_user')}}"> {{ _('Add user data') }} </a>
     
                     </div>
                 </div>
                 <div class="card-body">
                     <table class="table table_bordered">
                         <thead>
                             <tr>
                                 <th> {{_('id')}} </th>
                                 <th> {{_('name')}} </th> 
                                 <th> {{_('email')}} </th> 
                                 <th> {{_('phone_number')}} </th> 
                                 <th> {{_('photo')}} </th> 
                                 <th> {{_('combine_photo')}} </th> 
                                 <th> {{_('birth_reg')}} </th>
                                 <th> {{_('nid')}} </th>
                                 <th> {{_('marriage_certificate')}} </th>
                                 <th> {{_('p_address')}} </th>
                                 <th> {{_('m_address')}} </th>
                                 <th> {{_('dob')}} </th>
                                 <th> {{_('profession')}} </th>                          
                                 <th> {{_('action')}} </th>
                             </tr>
                         </thead>

                         <tbody>
                             <tr>
                                 <td></td>
                                 
                             </tr>
                         </tbody>
     
                     </table>
     
                 </div>
              </div>
           </div>
     
        </div>
     </div>
     
   
</body>

</html>


