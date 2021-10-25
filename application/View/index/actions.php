
<style>
    .decor-none{
        text-decoration:none;
    }
</style>

<div class="row justify-content-center pt-5">
    <div class="col-12 col-md-3">
        <a href="<?php echo ('employee'); ?>" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-clipboard-data"></i></h5>
                    <p class="card-text">Result</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-3">
        <a href="<?php echo base_url('Survey/') ?>" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-graph-up"></i></h5>
                    <p class="card-text">Add new Survey</p>
                </div>
            </div>
        </a>
    </div>


    <div class="col-12 col-md-3">
        <a href="" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-table"></i></h5>
                    <p class="card-text">Household Data</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row justify-content-center pt-5">
    <div class="col-12 col-md-3">
        <a href="<?php echo ('Certificate/'); ?>" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-award"></i></h5>
                    <p class="card-text">Certificates of Apperance</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-3">
        <a href="<?php //echo base_url('Survey/') ?>" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-person-lines-fill"></i></h5>
                    <p class="card-text">Manage Employees</p>
                </div>
            </div>
        </a>
    </div>


    <div class="col-12 col-md-3">
        <a href="" class="decor-none">
            <div class="card text-center bg-primary text-light">
                <div class="card-body">
                    <h5 class="card-title fs-1"><i class="bi bi-person"></i></h5>
                    <p class="card-text">Profile</p>
                </div>
            </div>
        </a>
    </div>

</div>








<div class="modal modal-signin  fade"  role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Sign up for free</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
            Sign up with GitHub
          </button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
    // $(window).bind('beforeunload', function(){

    //     var s = confirm("leaving ??");
    //     if (s) {
    //         alert('leaving now')
    //         return true;
    //     }
    // });
  
</script>