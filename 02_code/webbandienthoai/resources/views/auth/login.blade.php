@include('admin.layouts.css')
<br>
<h1 class="row justify-content-center">Đăng nhập</h1>
<div class="row justify-content-center">

  <form class="col-5" action="{{ route('p.login') }}" method="post">
    @csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="name">Email address</label>
      <input type="email" id="name" class="form-control" name="email" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="pass">Password</label>
      <input type="password" id="pass" class="form-control" name="password" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
      <p>or sign up with:</p>
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