<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Footer Styling */
        footer {
            background-color: #6C6C6C24;
            margin-top: 64px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        footer h4 {
            color: #000;
            font-size: 16px;
            font-family: 'Inria Serif', serif;
            margin-top: 10px;
            text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.336);
        }

        footer li {
            font-size: 12px !important;
        }

        footer h3 {
            font-family: 'Inria Serif', serif;
            font-size: 20px;
        }

        .footer-logo img {
            max-width: 100%;
            height: auto;
        }

        .social-icons a {
            margin-right: 0.5em;
            color: #000;
            text-decoration: none;
            font-size: 24px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        
    </style>
</head>

<body>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo and Serviços side by side -->
                <div class="col-md-6 mb-4 d-flex flex-column align-items-center align-items-md-start">
                    <div class="footer-logo">
                        <img src="multimidia/mobile/logosalaofootermobile.png" alt="Logo">
                        <h3>Salão Novo Estilo</h3>
                        <div class="social-icons mt-3">
                            <a href="#" target="_blank" class="fab fa-whatsapp"></a>
                            <a href="#" target="_blank" class="fab fa-instagram"></a>
                            <a href="#" target="_blank" class="fab fa-facebook-f"></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4 d-flex flex-column align-items-center align-items-md-start">
                    <h4>Serviços</h4>
                    <hr>
                    <div id="texto-p">
                        <p>Limpeza de pele</p>
                        <p>Luzes/masculino</p>
                        <p>Cortes cabelo masculino</p>
                        <p>Cortes cabelo feminino</p>
                        <p>Progressiva masculino</p>
                        <p>Progressiva feminino</p>
                        <p>Relaxamento capilar masculino</p>
                        <p>Barba</p>
                        <p>Sombrancelha masculino</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Localização -->
                <div class="col-md-6 mb-4">
                    <h4>Localização</h4>
                    <hr>
                    <li>Rua Pedro Baston 176 Itapira - SP</li>
                </div>

                <!-- Contato -->
                <div class="col-md-6 mb-4">
                    <h4>Contato</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li>joseeucledes@hotmail.com</li>
                        <li>Telefone: (19) 99367-8114</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7J9dD7nE4aR8ae5TW5PH4mF2N5H9Rp/zF3Y3wU5xj5eIz+5mM9oKNhA70Z7PfFNOe" crossorigin="anonymous"></script>
</body>

</html>
