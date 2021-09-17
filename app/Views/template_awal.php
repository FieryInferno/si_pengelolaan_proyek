<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Pengelolaan Proyek - WIKA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shorcut icon" type="text/css" href="<?= base_url(); ?>/images/logo_wika.jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid" style="background-image: url('/images/bg_login.png');background-size:cover;height: 41rem;">
    <div class="position-absolute top-50 end-0 translate-middle-y">
      <div class="card" style="width: 20rem;margin-right: 5rem;border-radius: 2rem;background-color: #d2d7d7;">
        <div class="card-body">
          <h6 class="card-title text-center">Login to your account</h6>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            <a href="#" class="float-right">forgot password</a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-info text-white mb-1">Sign In</button>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-secondary">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>