<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot -- simples</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">ChatBot</div>
        <div class="form" id="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <div class="i fas fa-user"></div>
                </div>
                <div class="msg-header">
                    <p>Olá, em que posso ajuda-lo?</p>
                </div>
            </div>
            
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Digite uma mensagem..." required>
                <button id="btn" ><i class="fab fa-telegram-plane"></i></button>
            </div>
        </div>
    </div>
    

    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>