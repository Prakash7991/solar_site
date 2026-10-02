@extends('supplier.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Booking</li>
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
            

                    <h5 class="card-title">Add Booking <span>| Today</span></h5>
                     <!-- Basic Modal -->
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
               Add Booking
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Booking</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <!-- Browser Default Validation -->
                    <form  action="{{route('admin_users_insert')}}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                      @csrf
                      <div class="col-md-12">
                        <label for="sname" class="form-label">Supplier name</label>

                        <select name="sname" class="form-control">
                     
                          @foreach($suppliers as $supplier)
                          <option value="{{$supplier->name}}">{{$supplier->name}}</option>
                          @endforeach
                        </select>
                         <div class="invalid-feedback">Please Enter Your Supplier Name</div>
                      </div>

                      <div class="col-md-12">
                        <label for="name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="" required placeholder="Enter Your Supplier Name" />
                          <div class="invalid-feedback">Please Enter Your Customer Name</div>
                      </div>

                      <div class="col-md-12">
                        <label for="name" class="form-label">Customer Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="" required placeholder="Enter Your Customer Email" />
                        <div class="invalid-feedback">Please Enter Your Customer Email</div>
                      </div>

                      <div class="col-md-12">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="" required placeholder="Enter Your Type" />
                        <div class="invalid-feedback">Please Enter Your Type</div>
                      </div>

                       <div class="col-md-12">
                        <label for="type" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="" required placeholder="Enter Your Location" />
                        <div class="invalid-feedback">Please Enter Your Location</div>
                      </div>

                       <div class="col-md-12">
                        <label for="type" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="" required placeholder="Enter Your Price">
                        <div class="invalid-feedback">Please Enter Your Price</div>
                      </div>

                       <div class="col-md-12">
                        <label for="type" class="form-label">Slot</label>
                        <input type="datetime-local" class="form-control" id="slot" name="slot" value="" required >
                        <div class="invalid-feedback">Please Enter Your Slot</div>
                      </div>

                       <div class="col-md-12">
                        <label for="type" class="form-label">Image</label>
                        <input type="file" class="form-control" id="file" name="file" value="" required/>
                        <div class="invalid-feedback">Please Enter Your Image</div>
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
                        <th scope="col">Type</th>
                        <th scope="col">Location</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $use)
                      <tr>
                        <th scope="row"><a href="#">{{$use->id}}</a></th>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->type}}</td>
                        <td>{{$use->location}}</td>
                        <td>{{$use->price}}</td>

                        <td><img src="/images/{{$use->image}}" height="50" width="50"/></td>
                        <td><a href="{{route('booking_users_edit',$use->id)}}" class="badge bg-success"><i class="bi bi-pencil" style="font-size:24px !important;"></i></td>
                        <td><a href="{{route('admin_users_delete',$use->id)}}" class="badge bg-success"><i class="bi bi-trash" style="font-size:24px !important;"></i></td>
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
  <script>
    function setMinDateTime() {
    const now = new Date().toLocaleString("en-IN", { timeZone: "Asia/Kolkata" });
    const indiaDate = new Date(now);

    let year = indiaDate.getFullYear();
    let month = ("0" + (indiaDate.getMonth() + 1)).slice(-2);
    let day = ("0" + indiaDate.getDate()).slice(-2);
    let hours = ("0" + indiaDate.getHours()).slice(-2);
    let minutes = ("0" + indiaDate.getMinutes()).slice(-2);

    const minDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
    document.getElementById("slot").min = minDateTime;
}

setMinDateTime();
</script>

 @endsection
 