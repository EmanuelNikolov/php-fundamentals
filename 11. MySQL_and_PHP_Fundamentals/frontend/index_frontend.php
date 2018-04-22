<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="frontend/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" style="">
    <div class="container">
        <a class="navbar-brand" href="index.php">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false"
                aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2"
                       placeholder="Search not available" type="text" disabled>
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"
                        disabled>Search
                </button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Most recently registered users</h2>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="table-primary">
                        <th scope="col">Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($usersData as $datum): ?>
                        <tr>
                            <td scope="row"><?= htmlspecialchars($datum); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>