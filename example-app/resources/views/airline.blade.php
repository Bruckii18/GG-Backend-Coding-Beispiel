<form method="POST" action="{{ route('airlines.create') }}" enctype="multipart/form-data">
@CSRF
  <div class="form-group ">
    <label class="text-light" for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="name">Country</label>
    <input type="text" class="form-control" id="country" aria-describedby="country" name="country" placeholder="Enter Country" required>
  </div>
  <div class="form-group">
    <label for="name">Logo</label>
    <input type="file" class="form-control" id="logo" aria-describedby="logo" name="logo" placeholder="Enter Logo">
  </div>
  <div class="form-group">
    <label for="name">Slogan</label>
    <input type="text" class="form-control" id="slogan" aria-describedby="slogan" name="slogan" placeholder="Enter Slogan">
  </div>
  <div class="form-group">
    <label for="name">Headquaters</label>
    <input type="text" class="form-control" id="head_quaters" aria-describedby="head_quaters" name="head_quaters" placeholder="Enter Headquaters">
  </div>
  <div class="form-group">
    <label for="name">Website</label>
    <input type="text" class="form-control" id="website" aria-describedby="website" name="website" placeholder="Enter Websitelink">
  </div>
  <div class="form-group">
    <label for="name">Established in year:</label>
    <input type="text" class="form-control" id="established" aria-describedby="established" name="established" placeholder="Enter Year" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Neue Airline erstellen</button>
</form>

@if($errors->any())
 {{ $errors }}
@endif