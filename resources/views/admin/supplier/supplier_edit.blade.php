@extends('admin.layout')

@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Edit Supplier</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Supplier</li>
      <li class="breadcrumb-item active">Edit Supplier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Supplier</h5>
         
          <!-- Browser Default Validation -->
          <form action="{{route('admin_supplier_update')}}" method="post" class="row g-3 needs-validation" novalidate>
            @csrf
            <input type="hidden" name="idi" value="{{$user->id}}"/>
            <div class="col-md-12">
              <label for="name" class="form-label">First name</label>
              <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$user->name}}" required>
              <div class="invalid-feedback">Please Enter Your Name.</div>
            </div>
            <div class="col-md-12">
              <label for="password" class="form-label">Password</label>
              <input type="text" name="password" class="form-control" id="password" value="{{$user->pass}}" required>
              <div class="invalid-feedback">Please Enter Your Password.</div>
            </div>
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="email">@</span>
                <input type="text" class="form-control" id="email"value="{{$user->email}}"  required/>
                <div class="invalid-feedback">Please Enter Your Email Address.</div>
              </div>
            </div>
          
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