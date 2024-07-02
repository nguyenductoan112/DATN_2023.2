@include('admin.layouts.css')
<br><h1 class="row justify-content-center">Đăng ký</h1>
<div class="row justify-content-center" >

    <form class="col-5"action ="{{ route('p.register') }}"method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="name">Name </label>
            <input type="text" id="name" class="form-control" name="name"/>
          </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="email">Email address</label>
          <input type="email" id="email" class="form-control" name="email"/>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="avatar">Avatar</label>
            <input type="file" id="avatar" class="form-control" name="avatar"/>
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="pass">Password</label>
          <input type="password" id="pass" class="form-control" name="password"/>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng ký</button>

        <!-- Register buttons -->
        <div class="text-center">
          <p>Do a member? <a href="{{route('login')}}">Login</a></p>
          <p>or sign in with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
</div>
@include('admin.layouts.js')
