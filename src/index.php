<!DOCTYPE html>
<html id="background-color">
<head>

	<title>SEPEBC - HOME</title>
	<meta charset="utf-8">
	<link href="../css/index-style.css" rel="stylesheet" type="text/css"/>

</head>


	<body>

		<section id="topo">

			<img src="\SEPEBC\img\sepebc-logo.png">
			<span class="texto-titulo">Sindicato das Empresas Prestadoras de Serviços e Especializadas em Bombeiro Civil do Distrito Federal</span>
			
			<!---------------------------------------------------------------BOTAO------------------------------------------------------------------->


			<meta name="viewport" content="width=device-width, initial-scale=1">
          <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
              background-color: #007bff;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
              border-radius: 15px;
            }

            button:hover {
              opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
              position: relative;
            }

            .container {
              padding: 16px;
            }

            span.psw {
              float: right;
              padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
              background-color: #fefefe;
              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
              border: 1px solid #888;
              width: 50%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
              position: absolute;
              right: 25px;
              top: 0;
              color: #000;
              font-size: 35px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: red;
              cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
              -webkit-animation: animatezoom 0.6s;
              animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
              from {-webkit-transform: scale(0)} 
              to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
              from {transform: scale(0)} 
              to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
              span.psw {
               display: block;
               float: none;
             }
             .cancelbtn {
               width: 100%;
             }
           }
         </style>
       </head>
       <body>



        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="prestadora-servico.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
            </div>

            <div class="container">
              <label for="uname"><b>Usuário</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Senha</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span style="margin-left: 300px;">Cadastre-se <a href="cadastro.php">aqui</a>.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="psw">Esqueceu a <a href="#">Senha</a>:</span>
            </div>
          </form>
        </div>

        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!---------------------------------------------------------FINAL BOTAO------------------------------------------------------------------->


		</section>

		<section id="corpo">
			
			<div class="txt1">CADASTRO REGIONAL - DISTRITO FEDERAL</div>
			<br><br>
			<div class="txt2">EMPRESAS FORMADORAS, PRESTADORAS DE SERVIÇO E ESPECIALIZADAS EM BOMBEIRO CIVIL</div>

		</section>

		<section id="rodape">
			
			<div class="txt3">
				SCS Qd. 06 Bl. A, n° 172. Edifício Jessé Freire, 5° andar, Sl.08 <br> CEP 70306-908 - Brasília/DF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://sepebc.com.br/">www.sepebc.com.br</a>
			</div>

			<div><img src="\SEPEBC\img\logofecomercioprocont.png"></div>

		</section>

	</body>
</html>
