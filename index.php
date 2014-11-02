<?php include "header.php"; ?>

<div role="main" class="main">
   <div id="content" class="content full">
      <div class="custom-bg background">
        <span class="cat-title">AKAKOM DEV CENTER</span>
        <div class="cat-punch-line"><img src="images/slide-title-border.png" alt="border"/><span> Yang Pertama dan Utama </span><img src="images/slide-title-border.png" alt="border"/></div>
      </div>
   </div>
</div>
<hr class="tall" />
<!-- #############################     INTRO 1   ############################# -->
   <div class="home-intro">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <p>
                  <em>Online Education</em>
               </p>
            </div>
         </div>
      </div>
   </div>

   
<!-- #############################     INTRO 2 ############################# -->
   <div class="container">
      <div class="row center">
         <div class="col-md-12">
            <p class="featured lead">
            <a name="tutorials_library"></a>
            Find thousands of online working examples, which you can use in your day to day software development. Pickup any tutorial from the tutorials library,  start from the home of the tutorial and continue till its completion.
            </p>
         </div>
      </div>
   </div>
<!-- ***************************************************************** -->
<div class="container">
   <div class="row center">
        <hr class="tall" />
   </div>
      <div class="row" style="margin-left:10px !important;margin-top: 20px;">
            <div class="col-md-4">
               <h1><p>Articles</p></h1>
               <?php    
                  
                  $sql = 'select * from artikel order by id desc limit 4';
                  if(!$result = $db->query($sql)){
                      die('There was an error running the query [' . $db->error . ']');
                  }

               while($row = $result->fetch_assoc()){
               ?>

             <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#"><?php echo $row['judul'];  ?></a></h4>
                     <h5><?php echo $row['tanggal'];  ?></h5>
                     <h5><?php echo $row['penulis'];  ?></h5>
                     <p class="tall"><?php echo $row['isi'];  ?></p>
                  </div>
               </div>
            <?php } ?>   
            </div>
            <div class="col-md-4">
               <h1><p>Tutorial</p></h1>
               <?php    
                  $sql1 = 'select * from tutorial order by id desc limit 4';
                  if(!$result = $db->query($sql1)){
                      die('There was an error running the query [' . $db->error . ']');
                  }

               while($row = $result->fetch_assoc()){
               ?>

             <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#"><?php echo $row['judul'];  ?></a></h4>
                     <h5><?php echo $row['tanggal'];  ?></h5>
                     <h5><?php echo $row['penulis'];  ?></h5>
                     <p class="tall"><?php echo $row['isi'];  ?></p>
                  </div>
               </div>
            <?php } ?>   
            </div>
            <div class="col-md-4">
               <h1><p>Module</p></h1>
               <?php    
                  $sql2 = 'select * from modul order by id desc limit 4';
                  if(!$result = $db->query($sql2)){
                      die('There was an error running the query [' . $db->error . ']');
                  }

               while($row = $result->fetch_assoc()){
               ?>

             <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#"><?php echo $row['judul'];  ?></a></h4>
                     <h5><?php echo $row['tanggal'];  ?></h5>
                     <h5><?php echo $row['penulis'];  ?></h5>
                     <p class="tall"><?php echo $row['isi'];  ?></p>
                  </div>
               </div>
            <?php } ?>   
            </div>
      </div>
</div>
   <!-- #############################     LATEST ########################### 
<div class="container">
   <div class="row center">
        <hr class="tall" />
   </div>
      <div class="row" style="margin-left:10px !important;margin-top: 20px;">
            <div class="col-md-4">
               <h1><p>Articles</p></h1>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Articles - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Articles - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-code"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Articles - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <h1><p>Tutorials</p></h1>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-edit"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Tutorials - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-edit"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Tutorials - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon  icon-edit"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Tutorials - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <h1><p>Modules</p></h1>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon icon-unlink"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Modules - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon icon-unlink"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Modules - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
               <div class="feature-box">
                  <div class="feature-box-icon">
                     <i class="icon icon-unlink"></i>
                  </div>
                  <div class="feature-box-info">
                     <h4 class="shorter"><a target="_blank" href="#">Lorem Ipsum</a></h4>
                     <p class="tall">Modules - Dolor sit amet bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                  </div>
               </div>
            </div>
      </div>
</div>
-->

<!-- #############################     PRODUCTION ###########################-->
<div class="container">
      <div class="row center">
          <hr class="tall" />
      </div>
      <div class="col-md-12">
           <h1><strong>Platform </strong>Segment</h1>
           <div class="selected-reading-boxes">
               <div class="col-md-3">
                   <div class="course-box">
                      <a href="#" title="Desktop Developer"><img src="images/devcenter-logo.png"  class="big-icon"/></a><br/>
                        DESKTOP
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="course-box">
                       <a href="#" title="Game Developer"><img src="images/devcenter-logo.png"  class="big-icon"/></a><br/>
                        GAME
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="course-box">
                     <a href="#" title="Mobile Developer"><img src="images/devcenter-logo.png"  class="big-icon"/></a><br/>
                        MOBILE
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="course-box">
                       <a href="#" title="Web Developer"><img src="images/devcenter-logo.png"  class="big-icon"/></a><br/>
                        WEB
                   </div>
               </div>
           </div>
       </div>
   </div>


<!-- #############################     TESTIMONI    #########################################-->
<div class="map-section">
   <section class="featured footer map">
   <div class="container">
   <div class="row">
      <h1><strong>What</strong> Expert's Say</h1>
      <div class="row">
         <div>
            <div class="col-md-6">
                  <blockquote class="testimonial">
                     <p>Not everybody knows the art of putting self learning content in simple and easy way specially for technical and professional courses, but tutorialspoint has done a brilliant job in putting complex subjects in their simplest format to make self learning a fun.</p>
                  </blockquote>
               <div class="testimonial-arrow-down"></div>
               <div class="testimonial-author">
                  <div class="img-thumbnail img-thumbnail-small">
                     <img src="images/cuk.jpg" alt="Sumit">
                  </div>
                     <p><strong>Cuk Subiantoro</strong><span>Ketua STMIK AKAKOM, Yogyakarta</span></p>
               </div>
            </div>
         </div>
         <div>
            <div class="col-md-6">
                  <blockquote class="testimonial">
                     <p>Not everybody knows the art of putting self learning content in simple and easy way specially for technical and professional courses, but tutorialspoint has done a brilliant job in putting complex subjects in their simplest format to make self learning a fun.</p>
                  </blockquote>
               <div class="testimonial-arrow-down"></div>
               <div class="testimonial-author">
                  <div class="img-thumbnail img-thumbnail-small">
                     <img src="images/pdp.jpg" alt="Sumit">
                  </div>
                     <p><strong>Bambang Pdp</strong><span>Cloud Computing Lecture</span></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
</div>
</div>

<?php include "footer.php";?>