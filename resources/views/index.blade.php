<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobba Hotel - Faça Amigos, Divirta-se, Seja Famoso!</title>
    <style>
        body {
            background: url("{{ asset('assets/images/bg3.png') }}");
            background-position: center -150px;
            background-attachment: fixed;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 11px;
            
            /* MUDANÇA IMPORTANTE: Isso faz um ficar embaixo do outro */
            display: flex;
            flex-direction: column; /* Empilha verticalmente */
            align-items: center;    /* Centraliza horizontalmente */
            justify-content: flex-start;
            min-height: 100vh;
            padding-bottom: 50px; /* Espaço extra no final da página */
        }

        .container {
            width: 960px;
            background-color: #fff;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .header-stats {
            color: #f66200;
            font-weight: bold;
            font-size: 12px;
            background-image: url("{{ asset('assets/images/online.gif') }}");
            background-repeat: no-repeat;
            background-position: right center;
            padding-right: 60px;
            padding-left: 0;
            display: flex;
            align-items: center;
            height: 30px;
        }

        .content-grid {
            display: flex;
            gap: 10px;
        }

        .left-col {
            flex: 2;
            background: url("{{ asset('assets/images/BR_hotel_view.png') }}") no-repeat left 40%;
            background-size: cover;
            height: 430px;
            position: relative;
            border-radius: 4px;
            border: 1px solid #000;
        }

        .right-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* --- CAIXA DE LOGIN --- */
        .login-box {
            background-image: url("{{ asset('assets/images/habbos_group.png') }}");
            background-repeat: no-repeat;
            background-position: center 40px;
            background-size: cover;
            background-color: #000;
            border: 1px solid #000;
            border-radius: 4px;
            padding: 0;
            color: #fff;
            overflow: hidden;
            position: relative;
        }

        .login-header {
            background: rgba(0, 0, 0, 0.8) !important;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .login-form {
            padding: 15px;
            background: rgba(0, 0, 0, 0.6) !important;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 3px;
            font-weight: bold;
            text-shadow: 0 1px 2px #000;
        }

        .form-input {
            width: 95%;
            padding: 5px;
            border: 1px solid #000;
            border-radius: 3px;
        }

        .btn-green {
            background: linear-gradient(to bottom, #5cb811, #4da40a);
            border: 1px solid #3b8205;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            font-size: 16px;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        .btn-yellow {
            background: #ffcc00;
            border: 1px solid #dba600;
            font-weight: bold;
            padding: 5px 10px;
            cursor: pointer;
            color: #000;
        }

        .register-link {
            display: block;
            text-align: center;
            color: #ffcc00;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
            font-size: 14px;
            text-shadow: 0 1px 2px #000;
        }

        .sidebar-image img {
            width: 100%;
            height: 175px;
            object-fit: cover;
            object-position: center;
            border-radius: 4px;
            border: 1px solid #000;
            display: block;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 10px;
        }

        .footer a {
            color: #666;
            text-decoration: none;
        }

        
        .users-container {
            width: 979px; 
            margin-top: 20px; 
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .section-header h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .section-header span {
            display: block;
            font-size: 12px;
            color: #777;
            font-weight: normal;
            margin-top: 2px;
        }

      
        .users-grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr); 
            gap: 15px;
        }

        
        .users-grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr); 
            gap: 10px;
        }

        
        .user-card {
            background-color: #fff;
            border-radius: 8px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
            cursor: pointer;
            overflow: hidden;
            position: relative; 
        }

        .user-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        /* Imagem do Avatar */
        .user-card img {
            margin-top: 5px;
            transform: scale(1.1); /* Zoom na cabeça */
            transition: transform 0.2s;
        }
        
        /* Efeito: Avatar sobe um pouco quando passa o mouse para dar espaço ao nome */
        .user-card:hover img {
            transform: scale(1.1) translateY(-5px);
        }

        /* --- O NOME (ESCONDIDO POR PADRÃO) --- */
        .user-tooltip {
            position: absolute; /* Flutua por cima da imagem */
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7); /* Fundo preto transparente */
            color: #fff;
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            padding: 4px 0;
            
            /* O SEGREDO DO "SÓ APARECE AO PASSAR MOUSE": */
            opacity: 0; /* Invisível */
            transform: translateY(100%); /* Escondido pra baixo */
            transition: all 0.2s ease;
        }

        /* Quando passar o mouse no cartão, o texto aparece */
        .user-card:hover .user-tooltip {
            opacity: 1; /* Visível */
            transform: translateY(0); /* Volta para o lugar */
        }

        /* Imagem do Avatar - Ajuste de escala */
        .user-card img {
            margin-top: 5px; 
            transform: scale(1.1); /* Um leve zoom na cabeça */
            filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.1));
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/images/hobba.gif') }}" alt="Hobba Hotel" height="50">
            <div class="header-stats">
                1247 Hobba's
            </div>
        </div>

        <div class="content-grid">
            <div class="left-col">
                <div style="position: absolute; top: 40px; right: 60px; text-align: center; width: 280px;">
                    <a href="/registro" class="btn-green">Jogue Agora, é Grátis!</a>
                    <div style="margin-top: 10px; color: #fff; font-size: 13px; text-shadow: 0 1px 2px #000; font-weight: bold;">
                        Um mundo virtual onde você pode fazer amigos!
                    </div>
                </div>
            </div>

            <div class="right-col">
                <div class="login-box">
                    <div class="login-header">Entrar</div>
                    <form action="" method="POST" class="login-form">
                        @csrf
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" name="username" class="form-input">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-input">
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <label style="font-weight: normal; font-size: 10px;">
                                <input type="checkbox"> Lembrar
                            </label>
                            <button type="submit" class="btn-yellow">Entrar</button>
                        </div>
                        <a href="/registro" class="register-link">Registre-se Grátis!</a>
                        <div style="text-align: center; margin-top: 5px;">
                            <a href="#" style="color: #fff; font-size: 10px;">Esqueceu a senha?</a>
                        </div>
                    </form>
                </div>

                <div class="sidebar-image">
                    <img src="{{ asset('assets/images/infobus_abrinq_sem_logo.gif') }}" alt="Comunidade">
                </div>
            </div>
        </div>

        <div class="footer">
            <a href="#">Homepage</a> | <a href="#">Termos de Serviço</a> | <a href="#">Política de Privacidade</a>
            <br>
            Powered by <b>Hobba</b> &copy; {{ date('Y') }}
        </div>
    </div> <div class="users-container">
        
        <div class="section-header">
            <img src="{{ asset('assets/images/icons/register/user.png') }}" alt="Icon" width="40">
            <div>
                <h3>Últimos Usuários</h3>
                <span>Os usuários mais recentes a entrar no Hotel!</span>
            </div>
        </div>

        <div class="users-container">

        <div class="users-grid">
            <div class="user-card"><div class="user-tooltip">User01</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-893-45.hd-180-1.ch-210-66.lg-270-82.sh-290-91&action=std&headonly=1&size=m" alt="Avatar">
            </div>
            
            <div class="user-card"><div class="user-tooltip">User02</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-828-61.hd-180-1.ch-210-66.lg-270-82.sh-290-91&action=std&headonly=1&size=m" alt="Avatar">
            </div>
            
            <div class="user-card"><div class="user-tooltip">User03</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-100-61.hd-180-1.ch-210-66.lg-270-82.sh-290-91&action=std&headonly=1&size=m" alt="Avatar">
            </div>
            
            <div class="user-card"><div class="user-tooltip">User04</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-831-45.hd-180-1.ch-210-66.lg-270-82.sh-290-91&action=std&headonly=1&size=m" alt="Avatar">
            </div>
            
            <div class="user-card"><div class="user-tooltip">User05</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=ch-210-66.lg-270-82.sh-290-91.hr-100-&action=std&headonly=1&size=m" alt="Avatar">
            </div>
            
            <div class="user-card"><div class="user-tooltip">User06</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=lg-270-82.sh-290-91.hr-100-&action=std&headonly=1&size=m" alt="Avatar">
            </div>

            <div class="user-card"><div class="user-tooltip">User07</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-893-45.hd-180-1&action=std&headonly=1&size=m" alt="Avatar">
            </div>

            <div class="user-card"><div class="user-tooltip">User08</div>
                <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?figure=hr-828-61.hd-180-1&action=std&headonly=1&size=m" alt="Avatar">
            </div>
        </div>

    </div>
        </div>

    </div> </body>
</html>