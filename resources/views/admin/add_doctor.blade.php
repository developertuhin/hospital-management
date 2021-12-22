
<!DOCTYPE html>
<html lang="en">
  
  @include('admin.css') 

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
     @include('admin.navbar')

<div class="container-fluid page-body-wrapper mt-5 ">






     <div class="container">

        @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
        </div>

        @endif
        
      <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
      @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Doctor Name </label>
            <div class="col-sm-8">
              <input type="text" name="name" style="color:black;" class="form-control" id="inputEmail3" placeholder="Doctor Name">
            </div>
          </div>

         <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Phone </label>
            <div class="col-sm-8">
              <input type="number" name="phone" style="color:black;" class="form-control" id="inputEmail3" placeholder="Doctor Phone">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Speciality </label>
            <div class="col-sm-8 ">

              <select name="speciality" id="" class="form-control bg-white" id="inputEmail3">
                
                <option value="Skin" style="color:black;">Skin</option>
                <option value="Medicine" style="color:black;">Medicine</option>
                <option value="Cardology" style="color:black;">Cardology</option>
              </select>

              <!-- <input type="text" style="color:black;" class="form-control" id="inputEmail3" placeholder="Doctor Name"> -->
            </div>
          </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Room </label>
            <div class="col-sm-8">
              <input type="number" name="room" style="color:black;" class="form-control" id="inputEmail3" placeholder="Doctor Room">
            </div>
          </div>

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Picture </label>
            <div class="col-sm-8">
              <input type="file" name="image" style="color:black;" class="form-control" id="inputEmail3" placeholder="Doctor Picture">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-4"></div>


            <div class="col-sm-8">
              <input type="submit" class="btn btn-success px-4 py-2" value="Submit">
             
            </div>
          </div>
    </form>
       
     </div>
</div>

    @include('admin.script')
  </body>
</html>