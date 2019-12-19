$('#btnenvia').click(function(e){
		e.preventDefault();
		var user = $('#user_login');
		var senha = $('#senha_login');
		$('#alert').html('');
		if(user.val()=='' || senha.val()==''){
			swal({
			  title: "Campos Vazios!",
			  text: "Preencha todos por favor.",
			  icon: "warning",
			  dangerMode: true
			})
			return false;
		}
		$.ajax({
			url:'../controle/login.php',
			method:'POST',
			datatype:"html",
			data:{
				user: user.val(),
				senha: senha.val()
			}
		}).done(function(data){	
			if(data == false){
				swal("Usuario ou Senha Incorretos!", "", "error");
				user.val('');
				senha.val('');
			}else{
				
				user.val('');
				senha.val('');
				window.location.href = "../visual/home.php";
			}
			
		});

	});


$('#btnchecar').click(function(e){
		e.preventDefault();
		var user_checar = $('#user_checar');
		var senha_checar= $('#senha_checar');
		$('#alert').html('');
		if(user_checar.val()=='' || senha_checar.val()==''){
			swal({
			  title: "Campos Vazios!",
			  text: "Preencha todos por favor.",
			  icon: "warning",
			  dangerMode: true,
			})
			return false;
		}
		$.ajax({
			url:'../controle/checar.php',
			method:'POST',
			datatype:"html",
			data:{
				user_checar: user_checar.val(),
				senha_checar: senha_checar.val()
			}
		}).done(function(data){	
			if(data == false){
				swal("Usuario ou Senha Incorretos!", "", "error");
				user_checar.val('');
				senha_checar.val('');
			}else{
				swal({
				  title: data,
				  text: " ",
				  icon: "success",
				  buttons: false
				});
				user_checar.val('');
				senha_checar.val('');
				setTimeout(
                  function() 
                  {
                     location.reload();
                  }, 1000);
			}
			
		});
	});
	
$('#btnmod').click(function(e){
		e.preventDefault();
		var nome_cad = $('#nome_cad');
		var senha_cad= $('#senha_cad');
		$('#alert').html('');
		if(nome_cad.val()=='' || senha_cad.val()==''){
			swal({
			  title: "Campos Vazios!",
			  text: "Preencha todos por favor.",
			  icon: "warning",
			  dangerMode: true,
			})
			return false;
		}
		$.ajax({
			url:'../controle/modificar.php',
			method:'POST',
			datatype:"html",
			data:{
				nome_cad: nome_cad.val(),
				senha_cad: senha_cad.val()
			}
		}).done(function(data){	
				swal({
				  title: data,
				  text: " ",
				  icon: "success"
				});
				nome_cad.val('');
				senha_cad.val('');
				setTimeout(
                  function() 
                  {
                     window.location.href = "../visual/bone.php#paralogin";
                  }, 1000);

		});

	});


