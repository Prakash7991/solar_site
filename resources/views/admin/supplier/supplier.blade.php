@extends('admin.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Suplier</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Supplier</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                    

                <div class="card-body">
            

                    <h5 class="card-title">Recent Supplier <span>| Today</span></h5>
                     <!-- Basic Modal -->
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
               Add Supplier
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Supplier</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <!-- Browser Default Validation -->
              <form  action="{{route('admin_supplier_insert')}}" method="post" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-12">
                  <label for="name" class="form-label">First name</label>
                  <input type="text" class="form-control" id="name" name="name" value=""  placeholder="Enter Your Name" required/>
                  <div class="invalid-feedback">Please Enter Your First Name.</div>
                </div>
                
                <div class="col-md-12">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" required />
                    <div class="invalid-feedback">Please Enter Your Email Address.</div>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="password" class="form-label"> Password</label>
                  <input type="text" class="form-control" id="password" name="password" value="" placeholder="Enter Your Password" required />
                  <div class="invalid-feedback">Please Enter Your Password.</div>
                </div>
              
                <div class="col-12">
                  <input type="submit" class="btn btn-success form-control" value="Submit form">
                </div>
              </form>
                    
                     </div>
                   
                  </div>
                </div>
              </div>
              <!-- End Basic Modal-->
                 

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($supplier as $use)
                      <tr>
                        <th scope="row"><a href="#">{{$use->id}}</a></th>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->pass}}</td>
                        <td><a href="{{route('admin_supplier_edit',$use->id)}}" class="badge bg-success"><i class="bi bi-pencil" style="font-size:24px !important;"></i></td>
                        <td><a href="{{route('admin_supplier_delete',$use->id)}}" class="badge bg-success"><i class="bi bi-trash" style="font-size:24px !important;"></i></td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
            <!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main>
  <!-- End #main -->

 @endsection
 