<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobba Hotel - Crie sua conta!</title>
    <style>
        
        body {
          
            background: url("{{ asset('assets/images/bg3.png') }}");
            background-attachment: fixed;
            font-family: 'Segoe UI', Verdana, Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
            display: flex;
            justify-content: center;
        }

        /* Container Branco Principal */
        .container {
            width: 900px;
            background-color: #fff;
            margin-top: 40px;
            margin-bottom: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            overflow: hidden;
        }

      
        .header-banner {
    background: url("{{ asset('assets/images/bottom_background.png') }}");
    background-position: center 30%; 
    background-size: cover;
    height: 100px;
    display: flex;
    align-items: center;
    padding-left: 9px;
   
}

        .header-banner h2 {
            color: #fff;
            font-size: 24px;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
            font-weight: 700;
        }
        
        .header-banner span {
            color: #ffcc00;
        }

        /* --- LAYOUT INTERNO --- */
        .register-content {
            padding: 30px;
        }

        .register-grid {
            display: flex;
            gap: 30px;
        }

        .form-column {
            flex: 2;
        }

        .image-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 148px;
        }

        /* --- INPUTS COM ÍCONES --- */
        .reg-group {
            margin-bottom: 20px;
        }

        .reg-label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            color: #444;
        }

        /* Wrapper para segurar o input e o ícone juntos */
        .input-wrapper {
            position: relative;
            width: 100%;
        }

        /* O ícone dentro do input */
        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%); /* Centraliza verticalmente exato */
            width: 18px; /* Tamanho do ícone */
            height: auto;
            opacity: 0.8;
            pointer-events: none; /* Clica através do ícone */
        }

        /* O Input (com espaço na esquerda para o ícone não ficar em cima do texto) */
        .reg-input {
            width: 100%;
            padding: 12px 12px 12px 40px; /* 40px na esquerda para caber o ícone */
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            background-color: #f9f9f9;
            transition: border 0.3s;
            box-sizing: border-box; /* Garante que o padding não estoure a largura */
        }

        .reg-input:focus {
            background-color: #fff;
            border-color: #3498db;
            outline: none;
        }

        .help-text {
            font-size: 11px;
            color: #888;
            margin-top: 5px;
        }

        .warning-text {
            font-size: 11px;
            color: #d63031;
            font-weight: bold;
            margin-top: 5px;
            display: block;
        }

        /* --- GÊNERO --- */
        .gender-options {
            display: flex;
            gap: 15px;
            width: 100%;
        }

        .gender-input { display: none; }

        .gender-button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 20px;
            border: 2px solid #eee;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
            flex: 1;
            transition: all 0.3s ease;
            font-weight: bold;
            color: #777;
            font-size: 14px;
        }

        .gender-button img { width: 24px; height: 24px; }
        .gender-button:hover { border-color: #ccc; }

        #gender-masc:checked + .gender-button {
            border-color: #3498db;
            background-color: #ebf5fb;
            color: #3498db;
        }

        #gender-fem:checked + .gender-button {
            border-color: #e84393;
            background-color: #fce4ec;
            color: #e84393;
        }

        /* --- BOTÃO DE REGISTRO --- */
        .btn-submit {
            background: linear-gradient(to bottom, #d32f2f, #b71c1c);
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            box-shadow: 0 4px 0 #8b0000;
            transition: transform 0.1s;
        }

        .btn-submit:active {
            transform: translateY(4px);
            box-shadow: 0 0 0 #8b0000;
        }

        /* --- CAIXA DE SEGURANÇA --- */
        .safety-box {
            background-color: #fff0f0;
            border: 1px solid #ffcccc;
            border-radius: 6px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .safety-text h3 {
            margin: 0 0 5px 0;
            color: #d63031;
            font-size: 12px;
            font-weight: bold;
        }

        .safety-text p {
            margin: 0;
            font-size: 10px;
            color: #555;
            line-height: 1.3;
        }

        .safety-icon img { width: 40px; }
        
        .side-img {
            width: 100%;
            border-radius: 6px;
            
            
        }

    </style>
</head>
<body>

<div class="container">
    
    <div class="header-banner">
        <h2>Registre-se no <span>Hobba</span></h2>
    </div>

    <div class="register-content">
        <div class="register-grid">
            
            <div class="form-column">
                <form action="" method="POST">
                    @csrf

                    <div class="reg-group">
                        <label class="reg-label">Usuário</label>
                        <div class="input-wrapper">
                            <img src="{{ asset('assets/images/icons/register/user.png') }}" class="input-icon" alt="icon">
                            <input type="text" name="username" class="reg-input" required placeholder="Crie um nome único...">
                        </div>
                        <div class="help-text">
                            Seu nome aparecerá para os outros no hotel. Seja criativo!
                        </div>
                    </div>

                    <div class="reg-group">
                        <label class="reg-label">Email</label>
                        <div class="input-wrapper">
                            <img src="{{ asset('assets/images/icons/register/email.png') }}" class="input-icon" alt="icon">
                            <input type="email" name="email" class="reg-input" required placeholder="seu@email.com">
                        </div>
                    </div>

                    <div class="reg-group">
                        <label class="reg-label">Data de Nascimento</label>
                        <input type="date" name="birthdate" class="reg-input" style="padding-left: 12px;" required>
                    </div>

                    <div class="reg-group">
                        <div style="display: flex; gap: 20px;">
                            <div style="flex: 1;">
                                <label class="reg-label">Senha</label>
                                <div class="input-wrapper">
                                    <img src="{{ asset('assets/images/icons/register/Cadeado.png') }}" class="input-icon" alt="icon">
                                    <input type="password" name="password" class="reg-input" required placeholder="Sua senha secreta">
                                </div>
                            </div>
                            <div style="flex: 1;">
                                <label class="reg-label">Confirmar Senha</label>
                                <div class="input-wrapper">
                                    <img src="{{ asset('assets/images/icons/register/Cadeado.png') }}" class="input-icon" alt="icon">
                                    <input type="password" name="password_confirmation" class="reg-input" required placeholder="Repita a senha">
                                </div>
                            </div>
                        </div>
                        <span class="warning-text"> Nunca compartilhe sua senha com ninguém!</span>
                    </div>

                    <div class="reg-group">
                        <label class="reg-label">Gênero</label>
                        <div class="gender-options">
                            
                            <input type="radio" id="gender-masc" name="gender" value="M" class="gender-input" checked>
                            <label for="gender-masc" class="gender-button">
                                <span>Masculino</span>
                                <img src="{{ asset('assets/images/icons/register/masc.png') }}" alt="M">
                            </label>

                            <input type="radio" id="gender-fem" name="gender" value="F" class="gender-input">
                            <label for="gender-fem" class="gender-button">
                                <span>Feminino</span>
                                <img src="{{ asset('assets/images/icons/register/fem.png') }}" alt="F">
                            </label>

                        </div>
                    </div>

                    <button type="submit" class="btn-submit"> Registrar Agora</button>
                    
                    <div style="text-align: center; margin-top: 15px;">
                        <a href="/" style="color: #666; font-size: 12px; text-decoration: none;">Já tem conta? Voltar ao Login</a>
                    </div>

                </form>
            </div>

            <div class="image-column">
                
                <img src="{{ asset('assets/images/hotelview_cropped.png') }}" class="side-img" alt="Hotel View">
                
                <div class="safety-box">
                    <div class="safety-text">
                        <h3>Segurança!</h3>
                        <p>
                            Você nunca sabe quem está do outro lado da tela. <strong>NUNCA</strong> compartilhe dados reais como endereço ou telefone.
                        </p>
                    </div>
                    <div class="safety-icon">
                        <img src="{{ asset('assets/images/frank-not-found.gif') }}" alt="Frank">
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>