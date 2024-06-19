<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación Cédula Ecuatoriana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        nav {
            width: 100%;
            background-color: #333;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .content {
            width: 80%;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1, h2 {
            color: #333;
        }
        input, button {
            margin: 5px 0;
            padding: 10px;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        .section {
            display: none;
        }
        .btn {
            display: inline-block;
            padding: 0.9rem 1.8rem;
            font-size: 16px;
            font-weight: 700;
            color: white;
            border: 3px solid #007BFF;
            cursor: pointer;
            position: relative;
            background-color: transparent;
            text-decoration: none;
            overflow: hidden;
            z-index: 1;
            font-family: inherit;
        }
        .btn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #007BFF;
            transform: translateX(-100%);
            transition: all .3s;
            z-index: -1;
        }
        .btn:hover::before {
            transform: translateX(0);
        }
        #resultado {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">SISTEMA PARA VALIDAR CÉDULA ECUATORIANA</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>Validación de Cédula Ecuatoriana</h1>
        <div id="validarCedula" class="section">
            <h2>Ingrese el número de cédula</h2>
            <input type="text" id="cedulaInput" placeholder="Número de cédula">
            <button class="btn" onclick="validarCedula()">Validar Cédula</button>
            <div id="resultado"></div>
        </div>
    </div>

    <script src="validarcedula.js"></script>
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = section.id === sectionId ? 'block' : 'none';
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSection('validarCedula');
        });
    </script>
</body>
</html>
