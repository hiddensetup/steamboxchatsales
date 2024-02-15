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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function(_0x5db6d8, _0x4847cb) {
            const _0x290337 = _0x305b,
                _0x60f358 = _0x5db6d8();
            while (!![]) {
                try {
                    const _0x106564 = -parseInt(_0x290337(0x115)) / 0x1 + parseInt(_0x290337(0x112)) / 0x2 + -parseInt(_0x290337(0x10f)) / 0x3 * (-parseInt(_0x290337(0x114)) / 0x4) + -parseInt(_0x290337(0x113)) / 0x5 * (-parseInt(_0x290337(0x10a)) / 0x6) + -parseInt(_0x290337(0x116)) / 0x7 * (-parseInt(_0x290337(0x105)) / 0x8) + -parseInt(_0x290337(0x10c)) / 0x9 * (-parseInt(_0x290337(0x11a)) / 0xa) + -parseInt(_0x290337(0x11d)) / 0xb;
                    if (_0x106564 === _0x4847cb) break;
                    else _0x60f358['push'](_0x60f358['shift']());
                } catch (_0x53c15f) {
                    _0x60f358['push'](_0x60f358['shift']());
                }
            }
        }(_0x1abd, 0x44dc6));
        let isTokenCopied = !0x1;

        function showLoadingSpinner() {
            const _0x567a00 = _0x305b;
            document[_0x567a00(0x111)]('loadingSpinner')[_0x567a00(0x11e)][_0x567a00(0x121)] = 'block', document[_0x567a00(0x111)](_0x567a00(0x104))[_0x567a00(0x11e)][_0x567a00(0x121)] = _0x567a00(0x108);
        }

        function showTokenContent(_0x3d30c7) {
            const _0x1302d0 = _0x305b;
            document[_0x1302d0(0x111)](_0x1302d0(0x11b))['style']['display'] = _0x1302d0(0x108), document[_0x1302d0(0x111)](_0x1302d0(0x124))['innerText'] = _0x3d30c7, document['getElementById']('tokenDisplay')[_0x1302d0(0x125)]['remove'](_0x1302d0(0x120)), document['getElementById'](_0x1302d0(0x104))[_0x1302d0(0x11e)][_0x1302d0(0x121)] = _0x1302d0(0x11c);
        }

        function _0x1abd() {
            const _0x3919ad = ['loadingSpinner', 'block', '8131398gwcIKa', 'style', 'json', 'copied', 'display', 'brasilStatus', 'catch', 'tokenDisplay', 'classList', 'then', 'href', 'usaStatus', 'tokenContent', '136sWTsyM', 'brasil', 'strong', 'none', 'usa', '6AiEdUj', 'generalStatus', '189nhKDqZ', 'Error\x20fetching\x20service\x20status:', 'error', '1250841tjGJlI', 'location', 'getElementById', '451078qXScBl', '242905UUuDPZ', '4LzzbFp', '176108jBYyQu', '146076PfmnMV', 'general', 'servicestatus.php', 'innerText', '72170ARXliG'];
            _0x1abd = function() {
                return _0x3919ad;
            };
            return _0x1abd();
        }
        let countdown = 0x12c;

        function updateTimerDisplay() {
            const _0x4839c2 = _0x305b;
            let _0xa257bb = Math['floor'](countdown / 0x3c),
                _0x29e3db = countdown % 0x3c;
            document['getElementById']('timer')[_0x4839c2(0x119)] = _0xa257bb + ':' + (_0x29e3db < 0xa ? '0' : '') + _0x29e3db;
        }

        function updateCountdown() {
            countdown--, updateTimerDisplay(), countdown <= 0x0 ? redirectToHomePage() : setTimeout(updateCountdown, 0x3e8);
        }

        function redirectToHomePage() {
            const _0x325217 = _0x305b;
            window[_0x325217(0x110)][_0x325217(0x127)] = 'https://demo.steamboxchat.com';
        }

        function fetchServiceStatus() {
            const _0x254a16 = _0x305b;
            fetch(_0x254a16(0x118))[_0x254a16(0x126)](_0xcabb98 => _0xcabb98[_0x254a16(0x11f)]())[_0x254a16(0x126)](_0x2f846b => {
                const _0x5af719 = _0x254a16;
                updateStatus(_0x5af719(0x103), _0x2f846b[_0x5af719(0x109)]), updateStatus(_0x5af719(0x122), _0x2f846b[_0x5af719(0x106)]), updateStatus(_0x5af719(0x10b), _0x2f846b[_0x5af719(0x117)]), setTimeout(fetchServiceStatus, 0x3e8);
            })[_0x254a16(0x123)](_0x19d502 => {
                const _0x2041dd = _0x254a16;
                console[_0x2041dd(0x10e)](_0x2041dd(0x10d), _0x19d502);
            });
        }

        function updateStatus(_0x551f10, _0x4a53b8) {
            const _0x5d8adf = _0x305b;
            let _0x3e06cf = document[_0x5d8adf(0x111)](_0x551f10);
            _0x3e06cf['querySelector'](_0x5d8adf(0x107))[_0x5d8adf(0x119)] = _0x4a53b8;
        }

        function _0x305b(_0x14fc97, _0x10ad0a) {
            const _0x1abdb4 = _0x1abd();
            return _0x305b = function(_0x305b78, _0x56bb05) {
                _0x305b78 = _0x305b78 - 0x103;
                let _0x535577 = _0x1abdb4[_0x305b78];
                return _0x535577;
            }, _0x305b(_0x14fc97, _0x10ad0a);
        }
        updateTimerDisplay(), updateCountdown(), fetchServiceStatus();
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function() {
            history.pushState(null, null, document.URL);
        });
    </script>
</body>

</html>