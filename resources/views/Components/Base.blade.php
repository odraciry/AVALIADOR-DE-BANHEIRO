<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
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
.card{
    border: 1px solid #cecece;
    width: 30%;
    margin: 0 auto;
}
    </style>
</head>

<body>
    <header>

        <nav>
            <a href="/">Início</a>
            <a href="/banheiro">Banheiros</a>
            <a href="/avaliacao">Avaliações</a>
        </nav>
    </header>
    {{$slot}}
</body>

</html>