@extends('layouts.master')

@section('title')
Contact
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Tous Les Contacts</h4>
                     <!-- Export Button -->
                     <a href="/contacts/export" class="btn btn-export">
                        <i class="fa fa-download"></i> Export
                      </a>
                      <style>
                        .btn-export {
                          border-radius: 0;
                          /* No border radius */
                          background-color: transparent;
                          /* Transparent background */
                          color: #28a745;
                          /* Button text color */
                          border: 1px solid #28a745;
                          /* Border color */
                          transition: background-color 0.3s, color 0.3s;
                          /* Smooth transition for hover effect */
                          padding: 5px 15px;
                          /* Adjust padding as needed */
                          text-decoration: none;
                          /* Remove underline */
                          margin: 1em 0em 0em 60em;
                          /* Positioning */
                        }
      
                        .btn-export:hover,
                        .btn-export:focus {
                          background-color: #28a745;
                          /* Background color on hover */
                          color: white;
                          /* Text color on hover */
                          text-decoration: none;
                          /* Remove underline on hover */
                        }
      
                        .btn-export i {
                          margin-right: 5px;
                          /* Space between icon and text */
                        }
      
                        /* Media Query for tablets and smaller screens */
                        @media (max-width: 768px) {
                          .btn-export {
                            margin: -2em 0em 0em 1em;
                            /* Adjust margin for smaller screens */
                            padding: 4px 10px;
                            /* Adjust padding */
                          }
                        }
      
                        /* Media Query for mobile devices */
                        @media (max-width: 576px) {
                          .btn-export {
                            margin: -1em 0em 0em 0em;
                            /* Adjust margin for mobile screens */
                            padding: 3px 8px;
                            /* Adjust padding */
                            font-size: 0.8em;
                            /* Adjust font size */
                          }
                        }
                      </style>

                  </div>
               </div>

               <div class="card-body">
                  <div class="table-responsive">
                     <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Message</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($contacts as $contact)
                           <tr>
                              <td>#{{ $contact->id }}</td>
                              <td>{{ $contact->name }}</td>
                              <td>{{ $contact->phone }}</td>
                              <td>{{ $contact->email }}</td>
                              <td>{{ $contact->message }}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
@endsection