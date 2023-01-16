<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>Avalie seu site!</title>		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    
      
  </head>
  <body>
    <div class="container-fluid">					
			<h1 class="mt-4">Avalie o seu site!</h1><br>
			<h6>Avalie nosso produto para nos ajudar a entender como podemos melhorar e atender às suas necessidades. Sua opinião é muito valiosa para nós!</h6><br><br>
			
			<form method="POST" action="rating.php" enctype="multipart/form-data">
				<div class="site">
					<label for="domain"><p>Domínio do seu site ou o nome da sua empresa:</p></label><br>
					<input type="text" id="domain-field" name="domain" class="form-control form-control-sm" placeholder="Exemplo: www.devtorelli.com.br" required><br><hr>
				</div>
				<div class="estrelas mt-4">
          			<p>Como você avalia a atenção e a cordialidade recebida durante o processo de desenvolvimento do seu site?</p><br>
					<input type="radio" id="vazio" name="estrela-at" value="" checked>

					<label for="atendimento_um"><i class="fa"></i></label>
					<input type="radio" id="atendimento_um" name="estrela-at" value="1">

					<label for="atendimento_dois"><i class="fa"></i></label>
					<input type="radio" id="atendimento_dois" name="estrela-at" value="2">

					<label for="atendimento_tres"><i class="fa"></i></label>
					<input type="radio" id="atendimento_tres" name="estrela-at" value="3">

					<label for="atendimento_quatro"><i class="fa"></i></label>
					<input type="radio" id="atendimento_quatro" name="estrela-at" value="4">

					<label for="atendimento_cinco"><i class="fa"></i></label>
					<input type="radio" id="atendimento_cinco" name="estrela-at" value="5">

					<label for="atendimento_seis"><i class="fa"></i></label>
					<input type="radio" id="atendimento_seis" name="estrela-at" value="6">

					<label for="atendimento_sete"><i class="fa"></i></label>
					<input type="radio" id="atendimento_sete" name="estrela-at" value="7">

					<label for="atendimento_oito"><i class="fa"></i></label>
					<input type="radio" id="atendimento_oito" name="estrela-at" value="8">

					<label for="atendimento_nove"><i class="fa"></i></label>
					<input type="radio" id="atendimento_nove" name="estrela-at" value="9">

					<label for="atendimento_dez"><i class="fa"></i></label>
					<input type="radio" id="atendimento_dez" name="estrela-at" value="10">

					<br><br><hr>
        		</div>

        		<div class="estrelas mt-4">
          			<p>Como você avalia o prazo de entrega do seu site?</p><br>
					<input type="radio" id="vazio" name="estrela-pz" value="" checked>

					<label for="prazo_um"><i class="fa"></i></label>
					<input type="radio" id="prazo_um" name="estrela-pz" value="1">

					<label for="prazo_dois"><i class="fa"></i></label>
					<input type="radio" id="prazo_dois" name="estrela-pz" value="2">

					<label for="prazo_tres"><i class="fa"></i></label>
					<input type="radio" id="prazo_tres" name="estrela-pz" value="3">

					<label for="prazo_quatro"><i class="fa"></i></label>
					<input type="radio" id="prazo_quatro" name="estrela-pz" value="4">

					<label for="prazo_cinco"><i class="fa"></i></label>
					<input type="radio" id="prazo_cinco" name="estrela-pz" value="5">

					<label for="prazo_seis"><i class="fa"></i></label>
					<input type="radio" id="prazo_seis" name="estrela-pz" value="6">

					<label for="prazo_sete"><i class="fa"></i></label>
					<input type="radio" id="prazo_sete" name="estrela-pz" value="7">

					<label for="prazo_oito"><i class="fa"></i></label>
					<input type="radio" id="prazo_oito" name="estrela-pz" value="8">

					<label for="prazo_nove"><i class="fa"></i></label>
					<input type="radio" id="prazo_nove" name="estrela-pz" value="9">

					<label for="prazo_dez"><i class="fa"></i></label>
					<input type="radio" id="prazo_dez" name="estrela-pz" value="10">

					<br><br><hr>
        		</div>

        		<div class="estrelas mt-4">
          			<p>Como você avalia a qualidade/capricho do seu site?</p><br>
					<input type="radio" id="vazio" name="estrela-qdd" value="" checked>

					<label for="qualidade_um"><i class="fa"></i></label>
					<input type="radio" id="qualidade_um" name="estrela-qdd" value="1">

					<label for="qualidade_dois"><i class="fa"></i></label>
					<input type="radio" id="qualidade_dois" name="estrela-qdd" value="2">

					<label for="qualidade_tres"><i class="fa"></i></label>
					<input type="radio" id="qualidade_tres" name="estrela-qdd" value="3">

					<label for="qualidade_quatro"><i class="fa"></i></label>
					<input type="radio" id="qualidade_quatro" name="estrela-qdd" value="4">

					<label for="qualidade_cinco"><i class="fa"></i></label>
					<input type="radio" id="qualidade_cinco" name="estrela-qdd" value="5">
					
					<label for="qualidade_seis"><i class="fa"></i></label>
					<input type="radio" id="qualidade_seis" name="estrela-qdd" value="6">

					<label for="qualidade_sete"><i class="fa"></i></label>
					<input type="radio" id="qualidade_sete" name="estrela-qdd" value="7">

					<label for="qualidade_oito"><i class="fa"></i></label>
					<input type="radio" id="qualidade_oito" name="estrela-qdd" value="8">

					<label for="qualidade_nove"><i class="fa"></i></label>
					<input type="radio" id="qualidade_nove" name="estrela-qdd" value="9">

					<label for="qualidade_dez"><i class="fa"></i></label>
					<input type="radio" id="qualidade_dez" name="estrela-qdd" value="10">

					<br><br><hr>
        		</div>

				<div class="comment mt-4">
					<label for="comentario">Fique a vontade para deixar o seu comentário:</label><br><br>
					<textarea id="comentario" name="comentario" class="form-control mt-2" rows="4"></textarea><br>
				</div>


				<input type="submit" class="btn btn-light btn-filled mb-4" value="Enviar">


			</form>			
		</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

<script>

	let query_result = `<?= isset($_GET['success']) ? $_GET['success'] : null ?>`;
	let form_ok = `<?= isset($_GET['form_ok']) ? $_GET['form_ok'] : null ?>`;
	
	if(form_ok == 'false'){
		alert('Favor selecionar pelo menos 1 estrela nas avaliações.');
		window.location.href="index.php";
	}

	if(query_result == 'true'){
		alert('A avaliação foi realizada com sucesso!');
		window.location.href="index.php";
	}else if(query_result == 'false'){
		alert('Erro ao enviar a avaliação. Por favor tente novamente.');
		window.location.href="index.php";
	}
</script>