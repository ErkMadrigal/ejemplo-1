<?php include "../ruta.php"; ?>
     <?php $titulo  = "Bienvenido "; $mostrarMenu = true; include '../componentes/header.php';?>
        <div class="container-fluid" style="padding-right: 0;">
          <div class="row" style="margin-top:4rem;padding-right: 0; margin-right:0;">
               <?php $mostrarBusqueda = true; include '../componentes/busqueda.php';?>               
               <div class="container">
                <div class="row">
                    <div class="col">
                         <div id="carouselExampleControls" style="width: 30rem; height: 18rem;margin-left: 7rem;" class="carousel slide carousel-fade rounded mt-2" data-ride="carousel">
                              <div class="carousel-inner">
                                   <div class="carousel-item active">
                                        <img class="d-block w-100" style="height: 400px !important;"
                                             src="<?php echo $raizP;?>img/lemon.jpg" alt="First slide">
                                   </div>
                                   <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 400px !important;"
                                             src="<?php echo $raizP;?>img/logo.png" alt="Second slide">
                                   </div>
                                   <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 400px !important;" src="<?php echo $raizP;?>img/descarga.png"
                                             alt="Third slide">
                                   </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>
                              </a>
                              <div style="margin-top: 2rem;">
                    <button type="button" class="btn btn-outline-info">Agergar</button>
                    <button type="button" class="btn btn-outline-danger">Comprar</button>
                    </div>
                              </div>

                    </div>
                    <div class="col">
                         <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#com" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ejem" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                         </ul>
                         <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque provident dolorem maxime, enim nulla incidunt, expedita mollitia repellat, quisquam fugit repellendus inventore velit voluptatibus tempora atque? Blanditiis officiis quasi quis.</div>
                         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo officia pariatur, illum minus nihil at dolor voluptas dignissimos laborum atque repellat earum corrupti obcaecati? Eos illum quae excepturi omnis?Reprehenderit sit sed repudiandae, consectetur, non quas quaerat hic quae tempora illum ipsum unde obcaecati esse voluptatum fugiat delectus earum repellendus tempore voluptas, culpa commodi minima rerum minus quis? Qui?</div>
                         <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo harum optio vitae blanditiis asperiores commodi cupiditate quae doloremque error laboriosam officiis, deleniti, dolores, ducimus culpa! Odio ipsam quos possimus tenetur!
                         At laboriosam facilis harum aut doloribus id, fuga reprehenderit, similique quasi natus temporibus cupiditate, in sequi illum asperiores cumque exercitationem labore totam enim atque? Molestias eligendi cupiditate voluptate consequuntur hic!
                         Reiciendis mollitia iste doloremque animi accusamus cupiditate repellendus, autem necessitatibus tempore, eos nisi iusto doloribus distinctio molestiae magni tenetur dolores! Minus voluptatibus nesciunt quod! Dolores at officia fugiat repudiandae incidunt?</div>
                         <div class="tab-pane fade" id="com" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore illo asperiores placeat adipisci consequatur soluta aperiam, repudiandae reprehenderit facilis id ipsa qui, quos expedita in sunt voluptates incidunt voluptatibus dolor.Reiciendis ut adipisci, magni error ad vitae cum molestias amet, corrupti odio numquam minus rem? Voluptatem ex vitae maiores soluta alias sunt cupiditate ducimus omnis veritatis facilis! Distinctio, dignissimos accusantium.</div>
                         <div class="tab-pane fade" id="ejem" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium in incidunt voluptatem. Ipsam aliquid praesentium temporibus similique vel ipsum quod deserunt nihil ducimus, dolorum laborum quis corrupti quisquam est.</div>
                         </div>
                    </div>
               </div>
               
               
                    </div>
               </div>
          </div>


<?php include '../componentes/footer.php'; ?>