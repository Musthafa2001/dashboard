    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Welcome back ! <?= session::$userdata->getlastname(); ?> to Image Gallery</h1>
          <p class="lead text-body-secondary">
           Upload you image here
            
          </p>
          <p>
            <a href="#" class="btn btn-warning my-2">Upload</a>
            <a href="#" class="btn btn-secondary my-2">Delete</a>
          </p>
        </div>
      </div>
    </section>