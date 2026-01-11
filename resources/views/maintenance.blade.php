<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobba Hotel - Manutenção</title>
    <style>
       
        body {
          background: url("{{ asset('assets/images/bg_rain.gif') }}");
            background-attachment: fixed;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 11px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 760px; 
            background-color: #fff;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .header-logo {
            margin-bottom: 10px;
        }

        
        .content-grid {
            display: flex;
            gap: 10px;
            height: 350px;
        }

       
        .maintenance-box {
            flex: 2;
            background-color: #f46d00; 
            color: #fff;
            padding: 20px;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .maintenance-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: "Trebuchet MS", Arial, sans-serif;
            text-shadow: 0 1px 0 rgba(0,0,0,0.2);
        }

        .maintenance-text {
            font-size: 12px;
            line-height: 1.4;
            max-width: 250px; /* Para o texto não ficar em cima do Frank */
        }

        .frank-image {
            position: absolute;
            bottom: 10px;
            top: 50px;
            right: 40px;
            /* Usando o Frank que você tem na pasta */
        }

        /* --- COLUNA DIREITA (INFO) --- */
        .info-sidebar {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }

        .info-header {
            background-color: #888;
            color: #fff;
            padding: 5px 10px;
            font-weight: bold;
            font-size: 12px;
            border-bottom: 1px solid #666;
            border-radius: 3px 3px 0 0;
        }

        .info-content {
            padding: 10px;
            font-size: 11px;
            color: #333;
            line-height: 1.5;
        }

        .info-content a {
            color: #f46d00;
            text-decoration: none;
            font-weight: bold;
        }

        .info-content a:hover {
            text-decoration: underline;
        }

        /* Rodapé simples */
        .footer {
            text-align: center;
            font-size: 10px;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-logo">
            <img src="{{ asset('assets/images/hobba.gif') }}" alt="Hobba Hotel">
        </div>

        <div class="content-grid">
            
            <div class="maintenance-box">
                <div class="maintenance-title">Pausa para Manutenção!</div>
                
                <div class="maintenance-text">
                    <p>Desculpe! O Hobba Hotel está passando por melhorias neste exato momento.</p>
                    <p>Estamos varrendo os pixels e polindo os mobis.</p>
                    <p><strong>Voltaremos em breve, prometemos!</strong></p>
                </div>

                <div class="frank-image">
                    <img src="{{ asset('assets/images/maintenance_break.png') }}" alt="Frank">
                </div>
            </div>

            <div class="info-sidebar">
                <div class="info-header">O que está acontecendo?</div>
                <div class="info-content">
                    <p>Estamos preparando novidades incríveis para você.</p>
                    <hr style="border: 0; border-top: 1px dashed #ccc; margin: 10px 0;">
                    
                    <strong>Últimas Notícias:</strong><br>
                    <span style="color: #666; font-size: 9px;">Há 10 minutos</span><br>
                    Os servidores estão sendo reiniciados para melhor performance.
                    
                    <br><br>
                    Acompanhe nosso <a href="#">Twitter</a> ou <a href="#">Discord</a> para atualizações em tempo real.
                </div>
            </div>

        </div>

        <div class="footer">
            &copy; 2026 Hobba Hotel. Todos os direitos reservados.
        </div>
    </div>

</body>
</html>