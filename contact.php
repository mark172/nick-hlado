
<?php $page = 'contact' ?>
<?php include 'header.php' ?>

<!-- Kineoworks Contact -->
    <div class="kineoworks-contact">
      <div class="container">
        <div class="row">

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="" id="question">
              <h2 class="h2-responsive">Questions?<br><small>Bring them on!</small></h2>
              <form class="form-horizontal"action="contact/contact-mailer.php" method="post">
                <div class="form-group">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" placeholder="Your name">
                  </div>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Your email">
                  </div>  
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control" rows="6" name="message" placeholder="Your message"></textarea>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-testimonial btn-lg btn-block">Submit Question</button>
                  </div>
                </div>  
              </form>
            </div>

          </div> <!-- /.tab-content -->
        </div> <!-- /.row -->  
      </div> <!-- /.container --> 
    </div> <!-- /.kineoworks-contact -->
    
<?php include 'footer.php' ?>