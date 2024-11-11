<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background: #0a0a0a;
      color: #fff;
      min-height: 100vh;
    }

    .nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      padding: 20px 40px;
      background: rgba(10, 10, 10, 0.8);
      backdrop-filter: blur(10px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      background: linear-gradient(45deg, #00f7ff, #00a8ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: 2px;
    }

    .nav-links {
      display: flex;
      gap: 30px;
    }

    .nav-links a {
      color: #fff;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: 1px;
      position: relative;
      padding: 5px 0;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: #00f7ff;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
      background: radial-gradient(circle at center, #1a1a1a 0%, #0a0a0a 100%);
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      width: 200%;
      height: 200%;
      background: repeating-linear-gradient(
        transparent 0%,
        rgba(0, 247, 255, 0.05) 0.5%,
        transparent 1%
      );
      animation: scan 10s linear infinite;
    }

    @keyframes scan {
      0% {
        transform: translateY(-50%);
      }
      100% {
        transform: translateY(0);
      }
    }

    .hero-content {
      max-width: 800px;
      z-index: 1;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
      background: linear-gradient(45deg, #fff, #00f7ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-transform: uppercase;
      letter-spacing: 4px;
    }

    .hero p {
      font-size: 18px;
      color: #aaa;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .cta-button {
      display: inline-block;
      padding: 15px 40px;
      background: transparent;
      border: 2px solid #00f7ff;
      color: #00f7ff;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: bold;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .cta-button:hover {
      background: #00f7ff;
      color: #0a0a0a;
      box-shadow: 0 0 30px rgba(0, 247, 255, 0.5);
    }

    .features {
      padding: 100px 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-10px);
    }

    .feature-card h3 {
      color: #00f7ff;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .feature-card p {
      color: #aaa;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <nav class="nav">
    <div class="logo">FUTURETECH</div>
    <div class="nav-links">
      <a href="banheiro">banheiros</a>
      <a href="avaliacao">Avaliações</a>
    </div>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <h1>Banheiro Ideal</h1>
      <p>Cagar confortavel e discretamente</p>
      <a href="banheiro" class="cta-button">Saiba Mais</a>
    </div>
  </section>

</body>
</html>