<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #1a1818;
            color: #cecece;
        }

        form {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        header {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        nav {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            /* border-bottom: 1px solid #cecece; */
        }

        nav a {
            color: #0083b0;
            text-transform: uppercase;
            text-decoration: none;
            border-bottom: 1px solid blue;
        }

        div {
            text-align: center;
        }

        form div {
            display: flex;
            flex-direction: column;
        }

        label {
            text-transform: capitalize;
            color: #00b4db;
            text-shadow: 1px 1px 1px black;
            text-align: left;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        input,
        textarea,
        select {
            height: 25px;
        }

        button {
            margin-top: 10px;
            padding: 15px 10px;
            font-size: 10px;
            font-family: 'Arial', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #00b4db, #0083b0);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 180, 219, 0.3);
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg,
                    transparent,
                    rgba(255, 255, 255, 0.3),
                    transparent);
            transition: 0.5s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 180, 219, 0.5);
        }

        button:hover::before {
            left: 100%;
        }

        button:active {
            transform: scale(0.95);
        }

        .link-futuristic {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            font-family: 'Arial', sans-serif;
            font-size: 15px;
            text-decoration: none;
            color: #00f7ff;
            background: rgba(0, 247, 255, 0.1);
            border: 1px solid rgba(0, 247, 255, 0.3);
            border-radius: 4px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .link-futuristic::before {
            content: "+";
            margin-right: 8px;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .link-futuristic::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 247, 255, 0.1) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .link-futuristic:hover {
            background: rgba(0, 247, 255, 0.2);
            box-shadow: 0 0 20px rgba(0, 247, 255, 0.3);
            transform: translateY(-2px);
        }

        .link-futuristic:hover::before {
            transform: rotate(90deg);
        }

        .link-futuristic:hover::after {
            opacity: 1;
        }

        .link-futuristic:active {
            transform: translateY(0);
        }

        .card {
            border: 1px solid #cecece;
            width: 30%;
            margin: 0 auto;
        }

        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 80vw;

        }

        .futuristic-card {
            width: 30%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .futuristic-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.1),
                    transparent);
            transition: 0.5s;
        }

        .futuristic-card:hover::before {
            left: 100%;
        }

        .futuristic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.45);
        }

        .futuristic-card h2 {
            color: #fff;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
            background: linear-gradient(45deg, #00f7ff, #00ff88);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .futuristic-card p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .futuristic-card button {
            background: linear-gradient(45deg, #00f7ff, #00ff88);
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            color: #1a1a1a;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .futuristic-card button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 247, 255, 0.5);
        }

        .futuristic-card hr {
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            margin: 1.5rem 0;
        }

        /* Para melhor efeito, adicione isso ao body ou container pai */
        body {
            background: linear-gradient(45deg, #1a1a1a, #091e24);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .search-input-container {
            position: relative;
            width: 100%;
            max-width: 400px;
            margin: 1rem 0;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            outline: none;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1),
                0 4px 16px rgba(31, 38, 135, 0.07);
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        /* Efeito de foco */
        .search-input:focus {
            border-color: #00f7ff;
            box-shadow: 0 0 20px rgba(0, 247, 255, 0.2),
                inset 0 2px 4px rgba(0, 0, 0, 0.2);
            transform: translateY(-1px);
        }

        /* Efeito de borda brilhante */
        .search-input-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00f7ff, #00ff88);
            border-radius: 32px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .search-input-container:hover::before {
            opacity: 0.3;
        }

        /* Efeito de digitação */
        .search-input:not(:placeholder-shown) {
            border-color: rgba(0, 247, 255, 0.5);
            background: rgba(255, 255, 255, 0.08);
        }

        /* Animação ao carregar */
        @keyframes searchPulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }

            100% {
                transform: scale(1);
            }
        }

        .search-input-container {
            animation: searchPulse 2s ease-in-out infinite;
        }

        /* Desativa a animação quando o input está em foco */
        .search-input:focus+.search-input-container {
            animation: none;
        }

        /* Estilo para auto-complete */
        .search-input:-webkit-autofill,
        .search-input:-webkit-autofill:hover,
        .search-input:-webkit-autofill:focus {
            -webkit-text-fill-color: #fff;
            -webkit-box-shadow: 0 0 0px 1000px rgba(0, 0, 0, 0.7) inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Responsividade */
        @media (max-width: 640px) {
            .search-input {
                padding: 0.8rem 1.2rem;
                font-size: 0.9rem;
            }
        }
        .pagination{
            display: flex;
            width: 100%;
            height: 100px;
        }
        .pagination nav div:last-child{
            display: flex;
            flex-direction: column-reverse
        }
    </style>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>

        <nav>
            <a href="/">Início</a>
            <a href="/banheiro">Banheiros</a>
            <a href="/avaliacao">Avaliações</a>
        </nav>
    </header>
    {{ $slot }}
</body>

</html>
