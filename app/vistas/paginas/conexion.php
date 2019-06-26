<?php 
  $instruccion=htmlentities(addslashes($_POST["instruccion"]));
  #----------------------------

  	try {
	    $conexion=new PDO("mysql:host=178.32.158.243; dbname=repositoriobd", "root","ganzoanonimo");
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    //LOGIN

	    if ($instruccion=="entrar") {

	    	$user=htmlentities(addslashes($_POST["user"]));
  			$clave=htmlentities(addslashes($_POST["clave"]));

  			//select login
			$consulta="SELECT * FROM usuarios INNER JOIN personas ON usuarios.personas_id = personas.id WHERE usuario='$user' and clave='$clave' and estado='activo'";
			$resultado=$conexion->prepare($consulta);
			$resultado->execute();
			$numero_registro=$resultado->rowCount();
				
			//select para recuperar id de proyecto
			$consulta2="SELECT id FROM proyectos ORDER by ID DESC LIMIT 1";
			$resultado2=$conexion->prepare($consulta2);
			$resultado2->execute(array());
			$registro2=$resultado2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT) ;
			$id_proy=$registro2[0];

			if ($numero_registro!=0) {
				#vuelvo  a ejercutar la sentencia para obtener que tipo de usuario es
				$resultado->execute(array());
				$registro=$resultado->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT) ;
				
				///////////
				

				switch ($registro[3]) {
					case '1':
						header('Location: dashboard.php');
						session_start();
						$user=htmlentities(addslashes($_POST["user"]));
						$_SESSION["nombre"] = $registro[7]." ".$registro[8];

						break;
					case '2':
						echo "soy director ... pantalla en desarrollo";
						break;
					
					default:
						# code...
						break;
				}

			}else{
				header("location: login.php?fallo=true");
			}
		
		}

		//REGISTRAR USUARIO

		if ($instruccion=="registrarper") {
			$consulta="INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `fecha_nac`, `correo`, `telefono`) VALUES (NULL, '$nombres', '$apellidos', '$fechanaci', '$correo', '$telefono');INSERT INTO `usuarios`(`id`, `usuario`, `clave`, `tipo_usuario_id`, `personas_id`, `estado`) VALUES (NULL,'$usuario','$clave',1,5,'$estado');";

			$resultado=$conexion->prepare($consulta);

			$resultado->execute();
			header('Location: RegPer.php');
		}

		//REGISTRAR PROYECTO

	    if ($instruccion == "agregar") {

	   	//1. Obteniendo datos del formulario
		  $id_inst = htmlentities(addslashes($_POST["id_inst"]));
		  $codigo = htmlentities(addslashes($_POST["codigo"]));
		  $fecha_reg = htmlentities(addslashes($_POST["fecha_reg"]));
		  $vigencia = htmlentities(addslashes($_POST["vigencia"]));
		  $tipo_proy = htmlentities(addslashes($_POST["tipo_proy"]));
		  $tipo_doc = htmlentities(addslashes($_POST["tipo_doc"]));
		  //Datos del proyecto
		  
		  $num_reg = htmlentities(addslashes($_POST["num_reg"]));
		  $nom_proy = htmlentities(addslashes($_POST["nom_proy"]));
		  $linea_gen = htmlentities(addslashes($_POST["linea_gen"]));
		  $linea_esp = htmlentities(addslashes($_POST["linea_esp"]));
		  //Fechas de Proyecto
		  $fecha_ini = htmlentities(addslashes($_POST["fecha_ini"]));
		  $fecha_fin = htmlentities(addslashes($_POST["fecha_fin"]));
		  //Objetivos del Proyecto
		  $obj_g = htmlentities(addslashes($_POST["obj_g"]));
		  $avance_g = htmlentities(addslashes($_POST["avance_g"]));


	     	$consulta = "INSERT INTO proyectos(`id`,`id_inst`,`codigo`,`fecha_reg`,`vigencia`,`tipo_proy`,`tipo_doc`,`num_reg`,`nom_proy`,`linea_gen`,`linea_esp`,`fecha_ini`,`fecha_fin`,`objetivo_gen`,`avance_og`) VALUES  (null,$id_inst,'$codigo','$fecha_reg','$vigencia','$tipo_proy','$tipo_doc','$num_reg','$nom_proy','$linea_gen','$linea_esp','$fecha_ini','$fecha_fin','$obj_g',$avance_g);
	      	";


		    $resultado=$conexion->prepare($consulta);
		    $resultado->execute();

		    //Obtiene el id del ultimo registro insertado
		    $id_proy = $conexion->lastInsertId();


		    //1 -> INSERT BLOQUE DE ACTIVIDADES
		    $query = "INSERT INTO actividades (`id`,`item`,`avance`,`observaciones`,`proyectos_id`) VALUES (null,:item_a,:avance,:observaciones,$id_proy);";

			for($count = 0; $count<count($_POST['hidden_item_a']); $count++){
				$data = array(
					':item_a' => $_POST['hidden_item_a'][$count],
					':avance' => $_POST['hidden_avance'][$count],
					':observaciones' => $_POST['hidden_obs'][$count]
				);

				$statement = $conexion->prepare($query);
				$statement->execute($data);
			}

			//2 -> INSERT BLOQUE DE OBJ. ESPECIFICOS

			$query2 = "INSERT INTO objetivos_esp (`id`,`descripcion`,`avance`,`proyectos_id`) VALUES (null,:obj_e,:avance_e,$id_proy);";

			for($count = 0; $count<count($_POST['hidden_obj_e']); $count++){
		        $data = array(
		          ':obj_e' => $_POST['hidden_obj_e'][$count],
		          ':avance_e' => $_POST['hidden_avance_e'][$count]
	        	);

	        	$statement2 = $conexion->prepare($query2);
				$statement2->execute($data);
			}
			//3 -> INSERT BLOQUE DEL INF. FINANCIERO
	      	
	      	$query3 = "INSERT INTO `gastos`(`id`, `item`, `monto_asignado`, `monto_ejecutado`, `diferencia`, `proyectos_id`) VALUES (null,:item_if,:m_asi,:m_eje,:diferencia,$id_proy);";

	      	for($count = 0; $count<count($_POST['hidden_item_if']); $count++){
		        $data = array(
		          ':item_if' => $_POST['hidden_item_if'][$count],
		          ':m_asi' => $_POST['hidden_m_asi'][$count],
		          ':m_eje' => $_POST['hidden_m_eje'][$count],
		          ':diferencia' => $_POST['hidden_diferencia'][$count]
	        	);

	        	$statement3 = $conexion->prepare($query3);
				$statement3->execute($data);
			}

			//4 -> INSERT BLOQUE DE COLABORADORES
			$query4 = "INSERT INTO `colaboradores`(`id`, `nombre`, `proyectos_id`) VALUES (null, :nombre, $id_proy);";
			for($count = 0; $count<count($_POST['hidden_nombre']); $count++){
		        $data = array(
		          ':nombre' => $_POST['hidden_nombre'][$count],
	        	);

	        	$statement4 = $conexion->prepare($query4);
				$statement4->execute($data);
			}

			//5 -> INSERT TABLA CREA
			
		
			$consulta3="SELECT id FROM usuarios ORDER by ID DESC LIMIT 1";
			$resultado3=$conexion->prepare($consulta3);
			$resultado3->execute(array());
			$registro3=$resultado3->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT) ;
			$id_res=$registro3[0];

			$query5 = "INSERT INTO `crea`(`usuarios_id`, `proyectos_id`) VALUES ($id_res,$id_proy);";

	        	$statement5 = $conexion->prepare($query5);
				$statement5->execute($data);
			

			/*----------------------------------*/
	    	header('Location: agregar.php');
	    }

  	} catch (Exception $e) {
    	die("Error: ".$e->GetMessage());
  	}finally{
    	$conexion=null;
    }
?>