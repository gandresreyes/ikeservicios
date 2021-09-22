
        <div class="row">  
            <div class="col-lg-12">
                <div class="wrapper text-center my-5">
                    <div class="main-div main-div1">
                    <h1>Enjoy</h1>
                    </div>
                    <div class="main-div main-div2">
                    <h1>Every</h1>
                    </div>
                    <div class="main-div main-div3">
                    <h1>Moment</h1>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row my-4 ">

            <?php 
         
            foreach($productos as $product){?>
                <div class="col-lg-3 mb-lg-4 ">
                <div class="card  bg-dark circulo border-card neon ">
                    <div class="card-body text-center  ">
                        <div class="pos" width="270px" >
                            <img src="<?php echo  $product->imagen?>" width="100%" height="120px">
                        </div>
                        
                        <h5 class="card-title text-white mt-3 pos"><?php echo  $product->nombre?></h5>
                        <p class="card-text text-white  pos "><?php echo  $product->descripcion?></p>
                        <h3 class="textoNeonRojo pos ">$ <?php echo number_format($product->precio); ?></h3>
                        <div class="">
                            <a href="?controlador=index&accion=carritoadd&id=<?php echo  $product->id?>" type="button"   class="btn btn-outline-secondary text-white pos agregar_carrito">Añadir al
                                carrito</a>
                        </div>

                    </div>
                </div>
            </div>    

           <?php }?> 
            
            

                    
             
        </div>
    

    