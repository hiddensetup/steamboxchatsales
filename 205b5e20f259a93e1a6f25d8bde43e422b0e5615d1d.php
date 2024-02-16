<?php
session_start();

function getCurrentDateTime()
{
    $dateTime = new DateTime("now", new DateTimeZone("UTC"));
    return $dateTime->format('M d Y H:i:s') . ' GMT';
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso | steamboxchat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Meta tags for nofollow and no-cache -->
    <meta name="robots" content="noindex, nofollow"> <!-- Prevent indexing and following by search engines -->
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0"> <!-- No caching -->

</head>

<style>
    :root {
        --bs-primary: #4108e0;
        --bs-setup: url(bkg.png);

    }


    .setup {
        background: var(--bs-setup);
        backdrop-filter: blur(5px);
        background-size: cover;
    }

    .btn-primary,
    .open .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #4108e0;
        border-color: #4108e0
    }

    .btn-primary.active,
    .btn-primary:active,
    .btn-primary:focus,
    .btn-primary:hover {
        color: #fff;
        background-color: #000;
        border-color: #000
    }

    #loadingSpinner {
        color: #4108e0 !important;
    }

    a {
        text-decoration: none;
    }
</style>

<body class="bg-light d-flex align-items-center min-vh-100 setup">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card rounded-4 px-4">
                    <div class="card-body mt-4 mb-0">
                        <h2 class="text-center display-5">Loading demo account...</h2>
                        <div class="d-flex justify-content-center">
                            <div id="timer" style=" line-height: 30px;" class="my-3"></div>
                            <div id="loadingSpinner" class="spinner-border text-primary m-3" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        <div id="tokenContent" class="text-center" style="display: none;">
                            <p id="tokenDisplay" class="alert alert-dark small mt-3 rounded-4"></p>
                            <button id="copyButton" class="btn btn-outline-dark rounded-4">Copiar Token</button>
                        </div>

                        <div class="my-3"><small>Your login information is being sent to your <strong>WhatsApp number</strong>. Expect it shortly.</small></div>
                        <div class="mt-4 text-center">
                            <a href="https://steamboxchat.com" target="_blank" class="small text-dark">Ver funcionalidades</a>
                            <button class="mt-3 btn btn-outline-dark btn-sm rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#serviceStatus" aria-expanded="false" aria-controls="serviceStatus">Service Status</button>
                        </div>

                        <hr class="my-4">

                        <div class="collapse mt-3" id="serviceStatus">
                            <div class="text-center my-3 ">
                                <small id="currentDateTime"><?php echo getCurrentDateTime(); ?></small>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="alert alert-light" id="usaStatus">
                                        <p>USA Server</p>
                                        <small><strong>Loading...</strong></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="alert alert-light" id="brasilStatus">
                                        <p>Brazil Server</p>
                                        <small><strong>Loading...</strong></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="alert alert-light" id="generalStatus">
                                        <p>Steambox chat App</p>
                                        <small><strong>Loading...</strong></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="https://steamboxchat.com/ayuda" class="mx-3 mb-5 small text-center"><small>Experiencing issues? <br> Reach out to us</small></a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/205b5e20f259a93e1a6f25d8bde43e422b0e5615d1d.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>