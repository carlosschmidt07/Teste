<!Doctype html>
<html>
  <head>
     <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">  
    <title> Programa Botão (teste) </title>   
  </head>
 <body>
   
    <div class="container">
    <div class="row">      
        
       
      <div class="col-2"></div>
      <div class="col-8">
        <h3> Clique no Botão Abaixo </h3>
        <button type="button" class="btn btn-primary" id="contador"> Clique Aqui! <span class="badge badge-light" id="mostrador"></span> </button>
      </div>
      <div class="col-2"></div>
     
    
   </div>
   </div>
  
  <script>
      var botao = document.getElementById("contador"),
      count = 0;
      botao.onclick = function() {
      var mostrador = document.getElementById("mostrador")
      count += 1;
      mostrador.innerHTML =  count;
      };
    </script>
 </body>
  
</html>