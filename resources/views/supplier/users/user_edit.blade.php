@extends('supplier.layout')

@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Booking</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Edit Booking</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Booking</h5>
         
          <!-- Browser Default Validation -->
          <form action="{{route('supplier_user_update')}}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
            @csrf
              
            <div class="col-md-12">
              <label for="name" class="form-label">Customer name</label>
               <input type="hidden" name="idi" class="form-control"  value="{{$user->id}}" required>
              <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$user->name}}" required>
              <div class="invalid-feedback">Please Enter  Customer Name</div>
            </div>
           
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="email">@</span>
                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}"  />
                 <div class="invalid-feedback">Please Enter  Customer Email</div>
              </div>
            </div>


            <div class="col-md-12">
                        <label for="sname" class="form-label">Supplier name</label>
             
                       
                        <select class="form-control" name="sname" required>
                            @foreach($supplier as $supply)
                                  <option value="{{ $supply->name }}"
                                      {{ $supply->name == $user->supplier_name ? 'selected' : '' }}>
                                      {{ $supply->name }}
                                  </option>
                            @endforeach
                        </select>
                         <div class="invalid-feedback">Please Enter  Supplier Name</div>
            </div>          

            <div class="col-md-12">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{$user->type}}" required placeholder="Enter Your Type" />
               <div class="invalid-feedback">Please Enter Type</div>
            </div>

              <div class="col-md-12">
              <label for="type" class="form-label">Location</label>
              <input type="text" class="form-control" id="location" name="location" value="{{$user->location}}" required placeholder="Enter Your Location" />
               <div class="invalid-feedback">Please Enter Location</div>
            </div>

              <div class="col-md-12">
              <label for="type" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" value="{{$user->price}}" required placeholder="Enter Your Price">
               <div class="invalid-feedback">Please Enter  Price</div>
            </div>

            <div class="col-md-12">
              <label for="type" class="form-label">Slot</label>
                <input type="datetime-local" class="form-control" id="slot" name="slot"  required placeholder="Enter Your Date and Time" value="{{ \Carbon\Carbon::parse($user->slot)->format('Y-m-d\TH:i') }}"/>
               <div class="invalid-feedback">Please Enter  Customer Time Slot</div>
            </div>

            <img src="/images/{{$user->image}}" height="100" width="100"/>
              <input type="hidden" class="form-control" id="oimage" name="oimage" value="{{$user->image}}" required />
              
              <div class="col-md-12">
              <label for="type" class="form-label">Image</label>
              <input type="file" class="form-control" id="file" name="file" value="" />
            </div>     
                      
           <br/>
            <div class="col-12">
              <input class="btn btn-success form-control" type="submit" name="update_user" value="Update User"/>
            </div>
          </form>
          <!-- End Browser Default Validation -->

        </div>
      </div>

    </div>

   
  </div>
</section>

</main>
<!-- End #main -->
@endsection