<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <style type="text/css">
      :root {
        --primary: #ddd;
        --dark: #333;
        --light: #fff;
        --shadow: 0 1px 5px rgba(104, 104, 104, 0.8);}

      html {
        box-sizing: border-box;
      }

      .batas {
        display: grid;
        grid-gap: 20px;
        margin: 50px 10px;
        grid-template-columns: repeat(2, 1fr);
      }
      .form {
        display: grid;
        grid-gap: 20px;
        background: red;
        padding: 1rem;
        
      }
      .form2 {
        display: grid;
        background: yellow;
        padding: 1rem;
      }
      
      @media(max-width: 700px){
        .batas {
          grid-template-columns: 1fr;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded sticky-top" style="background: gray;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Cangkruk</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left: 85%;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Daftar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Masuk</a>
      </li>
    </ul>
  </div>
</nav>

<div class="batas">
<div class="form">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  
</div>

<div class="form2">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </div>
</div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  </body>
</html>