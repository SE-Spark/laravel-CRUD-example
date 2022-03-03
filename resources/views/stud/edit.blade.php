<section>
<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 p-4">
    <form  action="{{url('/update/'.$student->id)}}" method="post">
      @csrf
        <div class="form-outline mb-3">
            <label class="form-label" >First Name</label>
            <input value="{{$student->firstName}}" type="text" name="firstName" class="form-control form-control-lg"/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label">Last Name</label>
            <input value="{{$student->lastName}}" type="text"name="lastName"  class="form-control form-control-lg"/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label">Email</label>
            <input value="{{$student->email}}" type="text"name="email"  class="form-control form-control-lg"/>
          </div>
          <div class="form-outline mb-3">
             <label class="form-label" >City</label>
            <input value="{{$student->city}}" type="text"name="city"  class="form-control form-control-lg"/>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label">Country</label>
            <input value="{{$student->Country}}" type="text"name="country"  class="form-control form-control-lg"/>
          </div>
          <input type="submit" class="btn btn-info" value="Save">
          <input type="reset" class="btn btn-warning" value="Reset">
    </form>
</div>
</section>
