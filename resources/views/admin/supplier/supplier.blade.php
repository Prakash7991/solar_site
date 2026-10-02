@extends('admin.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
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
            

                    <h5 class="card-title">Recent Contact <span>| Today</span></h5>
                            <!-- Basic Modal -->
                     
                </div>
                  <!-- End Basic Modal-->
                 

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($contact as $use)
                      <tr>
                        <th scope="row"><a href="#">{{$use->id}}</a></th>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->phone}}</td>
                        <td>{{$use->message}}</td>
       
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
 