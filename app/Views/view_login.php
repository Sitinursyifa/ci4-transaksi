<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        body {
            background-color: #FA7070;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .form-signin input[type="text"]:focus,
        .form-signin input[type="password"]:focus {
            border-color: #FBF8DD;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }
        .form-signin button {
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }
        .form-signin button:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Login</button>
        </form>
    </main>
</body>
</html>
