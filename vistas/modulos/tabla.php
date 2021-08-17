<table>
	        
	          <thead>
	            
	            <tr>
	              
	              <th style="width:10px">#</th>
	              <th>Nombre</th>
                <th>categoria</th>
	              <th>descripcion</th>
	              <th>stock</th>
                <th>Precio</th>

	            </tr>

	          </thead> 


	             <tbody>
            
            <?php


      		  $productos = ControladorProductos::ctrlMostrarProductos();

              foreach ($productos as $key => $valueProductos){


                echo ' <tr>
                          <td>'.($key+1).'</td>
                          <td>'.$valueProductos["nombre"].'</td>
                          <td>'.$valueProductos["id_categoria"].'</td>
                          <td>'.$valueProductos["descripcion"].'</td>
                          <td>'.$valueProductos["stock"].'</td>
                          <td>'.$valueProductos["precio"].'</td>

                      </tr>';            
             }


            ?>
      

          </tbody> 
     


	        </table>
