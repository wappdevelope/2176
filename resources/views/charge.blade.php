<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.stripe.com/v3/"></script>
    <title>Document</title>
    <style>
        .paymentForm {
            width: 100%;
            max-width: 480px;
            margin: 20px 0;
        }

        .group {
            background: white;
            box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .pay-label {
            position: relative;
            color: #8898AA;
            font-weight: 300;
            height: 40px;
            line-height: 40px;
            display: flex;
            flex-direction: row;
        }

        .pay-group .pay-label:not(:last-child) {
            border-bottom: 1px solid #F0F5FA;
        }

        .pay-label>span {
            width: 120px;
            text-align: right;
            margin-right: 30px;
        }

        .field {
            background: transparent;
            font-weight: 300;
            border: 0;
            color: #31325F;
            outline: none;
            flex: 1;
            padding-right: 10px;
            padding-left: 10px;
            cursor: text;
        }

        .field::-webkit-input-placeholder {
            color: #CFD7E0;
        }

        .field::-moz-placeholder {
            color: #CFD7E0;
        }

        .pay-btn {
            float: left;
            display: block;
            background: #666EE8;
            color: white;
            box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            border: 0;
            margin-top: 20px;
            font-size: 15px;
            font-weight: 400;
            width: 100%;
            height: 40px;
            line-height: 38px;
            outline: none;
        }

        .pay-btn:focus {
            background: #555ABF;
        }

        .pay-btn:active {
            background: #43458B;
        }

        .outcome {
            float: left;
            width: 100%;
            padding-top: 8px;
            min-height: 24px;
            text-align: center;
        }

        .success,
        .error {
            display: none;
            font-size: 13px;
        }

        .success.visible,
        .error.visible {
            display: inline;
        }

        .error {
            color: #E4584C;
        }

        .success {
            color: #666EE8;
        }

        .success .token {
            font-weight: 500;
            font-size: 13px;
        }

    </style>
</head>

<body>
    <div class="site-container">


        <!-- <img src="./img/background-image.jpg" alt="" class="background-image"> -->
        <header class="header">
            <div class="header-number">Hof #345</div>
            <div class="header-logo active">
                <img src="{{ asset('storage/img/main-logo.png') }}" alt="logo">
            </div>
            <div class="header-popup">
                <div class="modalTrigger" data-modal="#modalInfo">
                    Mehr Infos
                </div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="content-box" style="width: 520px;">
                    <form class="paymentForm" id="card-form">
                        @csrf

                        <div class="group pay-group">
                            <label class="pay-label">
                                <span>Card</span>
                                <div id="card-element" class="field"></div>
                            </label>
                        </div>
                        <div class="group pay-group">
                            <label class="pay-label">
                                <span>First name</span>
                                <input id="first-name" name="first-name" class="field" placeholder="Manoj" />
                            </label>
                            <label class="pay-label">
                                <span>Last name</span>
                                <input id="last-name" name="last-name" class="field" placeholder="Halugona" />
                            </label>
                        </div>
                        <div class="group pay-group">
                            <label class="pay-label">
                                <span>Address</span>
                                <input id="address-line1" name="address_line1" class="field"
                                    placeholder="77 Winchester Lane" />
                            </label>
                            <label class="pay-label">
                                <span>ZIP</span>
                                <input id="address-zip" name="address_zip" class="field" placeholder="92236" />
                            </label>
                        </div>
                        <div class="group pay-group">
                            <label class="pay-label">
                                <span>Email</span>
                                <input id="email" type="email" name="email" class="field"
                                    placeholder="example@domain.com" />
                            </label>
                        </div>
                        <button type="submit" class="pay-btn">Pay
                            {{ $amount }} &euro;</button>
                        <div class="outcome">
                            <div class="error"></div>
                            <div class="success">
                                Success! Your Stripe token is <span class="token"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        var stripe = Stripe('pk_test_51K9PFPCIrU9IxPrNEoG13LWkNx3CiLTO0KcqKvdki4ee8qNrXRUi5erDFoN5m3NHAowwuBdlz2AQRoGUwSzLuT9L00zPxgNgUA');
        var elements = stripe.elements();

        var card = elements.create('card', {
            hidePostalCode: true,
            style: {
                base: {
                    iconColor: '#666EE8',
                    color: '#31325F',
                    lineHeight: '40px',
                    fontWeight: 300,
                    fontFamily: 'Helvetica Neue',
                    fontSize: '15px',

                    '::placeholder': {
                        color: '#CFD7E0',
                    },
                },
            }
        });
        card.mount('#card-element');

        function setOutcome(result) {
            var successElement = document.querySelector('.success');
            var errorElement = document.querySelector('.error');
            successElement.classList.remove('visible');
            errorElement.classList.remove('visible');

            if (result.token) {
                // In this example, we're simply displaying the token
                successElement.querySelector('.token').textContent = result.token.id;
                successElement.classList.add('visible');

                // In a real integration, you'd submit the form with the token to your backend server
                var form = document.querySelector('form');
                form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
                form.submit();
            } else if (result.error) {
                errorElement.textContent = result.error.message;
                errorElement.classList.add('visible');
            }
        }

        card.on('change', function(event) {
            setOutcome(event);
        });

        formCard = document.getElementById('card-form');

        formCard.addEventListener('submit', function(event) {
            event.preventDefault();

            var data = {
                'amount': "{{ $amount }}",
            };

            var response = fetch(
                "{{ route('charge') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': "{{ csrf_token() }}",
                    },
                    body: JSON.stringify(data),
                }
            ).then(function(response) {
                return response.json();
            }).then(function(responseJson) {
                var clientSecret = responseJson.client_secret;
                var method = responseJson.method;

                stripe.confirmCardPayment(
                    clientSecret, {
                        payment_method: {
                            card: card,
                            billing_details: {
                                name: $('#first-name').val() + ' ' + $('#last-name').val(),
                            },
                        },

                    }
                ).then(function(result) {
                    console.log(result);
                });
            });
        });
    </script>
</body>

</html>
