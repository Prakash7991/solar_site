@extends('admin.layout')

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
                  <div class="" style="height:50px !important"></div>
            
     
              
                 

                  <table class="table table-bordered datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                         <th scope="col">Current Bill</th>
                      
                       
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($appointment as $use)
                      <tr>
                        <th scope="row"><a href="#">{{$use->id}}</a></th>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->mobile_number}}</td>
                        <td>{{$use->current_bill}}</td>               

            
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

</script>

 @endsection
 