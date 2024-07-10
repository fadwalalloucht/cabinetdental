<!doctype html>

<html lang="{{ app()->getLocale() }}">

<body>

   @include('header')
   <div class="container">
      <div class="page-inner">
         <div class="row">
            <div class="card">
               <div class="card-header">
                 <div class="card-title">Images</div>
               </div>
               <div class="card-body">
                 <table class="table table-head-bg-primary mt-4">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Image</th>
                       <th scope="col">CreatedAT</th>
                       <th scope="col">UpdatedAt</th>
                       <th scope="col">Action</th>

                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>1</td>
                       <td><img src="assets/img/profile.jpg" class="img-fluid" alt="Image 1" width="50" height="50"></td>
                       <td>Otto</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                     </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
</div>
</div>

   </div>

   @include('footer')



   </div>



</body>



</html>