<!DOCTYPE html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zeynab Immob | Page Login</title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assetss/images/favicon.png">
    <link href="../assetss/css/style.css" rel="stylesheet">
</head> 

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-6">
      <div class="authincation-content">
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="auth-form">
                      <h4 class="text-center mb-4">Connectez-vous</h4>
                      <form action="connexion" method="POST">
                        @csrf
                          <div class="form-group">
                              <label class="mb-1"><strong>Email</strong></label>
                              <input type="email" class="form-control" name="ema" value="hello@example.com">
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Mot de passe</strong></label>
                              <input type="password" class="form-control" name="mdp" value="Password">
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-success btn-block">Se connecter</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
            </div>
        </div>
    </div>
<script src="../assetss/vendor/global/global.min.js" type="text/javascript"></script>
				<script src="../assetss/vendor/bootstrap-datetimepicker/js/moment.js" type="text/javascript"></script>
				<script src="../assetss/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					<script src="../assetss/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
				<script src="../assetss/js/custom.min.js" type="text/javascript"></script>
				<script src="../assetss/js/deznav-init.js" type="text/javascript"></script>
		<!--		<script src="https://tixia.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
			<script src="https://tixia.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
<!--	
 	--></body>


<!-- Mirrored from tixia.dexignzone.com/laravel/demo/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Dec 2021 18:27:23 GMT -->
</html>