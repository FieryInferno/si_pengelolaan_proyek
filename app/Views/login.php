<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Pengelolaan Proyek - WIKA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shorcut icon" type="text/css" href="/images/logo_wika.jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid" style="background-image: url('/images/bg_login.png');background-size:cover;height: 41rem;">
    <div class="position-absolute top-50 end-0 translate-middle-y">
      <div class="card" style="width: 20rem;margin-right: 5rem;border-radius: 2rem;background-color: #d2d7d7;">
        <div class="card-body">
          <h6 class="card-title text-center">Login to your account</h6>
          <form action="/login" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
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
              <button type="#" class="btn btn-secondary">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-image: linear-gradient(to right, rgb(20 16 16), rgb(245 246 252 / 0%)), url('/images/skyfive.jpg');background-size:cover;height: 41rem;">
    <div class="position-relative top-50 start-0 translate-middle-y">
      <div class="card" style="width: 25rem;background: transparent;">
        <div class="card-body">
          <h3 class="card-title text-center text-white">Taman Sari Sky Hive</h3>
          <h6 class="card-title text-center text-white">Jakarta, Indonesia</h6>
          <p class="text-justify text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus eros nec ipsum egestas, id mattis mauris facilisis. Morbi et laoreet metus, in finibus risus. Nunc non venenatis tortor. In ex libero, dignissim luctus lorem ac, vestibulum finibus est. Proin malesuada ultrices felis, in bibendum tortor venenatis eu. Fusce vel est ac urna varius ultricies vitae a quam. Suspendisse potenti. Proin risus magna, bibendum sit amet justo eget, posuere porttitor sem. Ut sed congue neque. Aliquam erat volutpat. Pellentesque
          </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: black;height: 41rem;">
    <h1 class="text-center text-white">WIKA Great Leader Class</h1>
    <h4 class="text-center">Learn, Follow and Become Great Leader</h4>
    <table width="100%" class="mt-5">
      <tr>
        <td width="20%">
          <img src="/images/foto3.png" alt="" width="100%">
          <h6 class="text-center text-white mt-2">Hananto Aji</h6>
          <p class="text-center">Director of Operations</p>
        </td>
        <td width="20%">
          <img src="/images/foto5.png" alt="" width="100%">
          <h6 class="text-center text-white mt-2">Achmadi Tri Cahyono</h6>
          <p class="text-center">Senior Vice President of Engineering</p>
        </td>
        <td width="20%">
          <img src="/images/foto4.png" alt="" width="100%">
          <h6 class="text-center text-white mt-2">Agung Budi Waskito, S.T, M.Tech</h6>
          <p class="text-center">President Director</p>
        </td>
        <td width="20%">
          <img src="/images/foto2.png" alt="" width="100%">
          <h6 class="text-center text-white mt-2">Mursyid</h6>
          <p class="text-center">Director of Human Control and Development</p>
        </td>
        <td width="20%">
          <img src="/images/foto1.png" alt="" width="100%">
          <h6 class="text-center text-white mt-2">Ade Wahyu</h6>
          <p class="text-center">Director of Finance</p>
        </td>
      </tr>
    </table>
    <div class="text-center">
      <button class="btn text-white" style="background-color: #fb07ff; border-color: #fb07ff;">Lihat Selengkapnya ></button>
    </div>
  </div>
</body>
</html>