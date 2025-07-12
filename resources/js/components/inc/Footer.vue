<template>
  <footer class="bg-light text-center text-lg-start text-muted">
    <!-- Social Media Section -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <span>Connect with us on social media:</span>
      </div>
      <div>
        <a href="#" class="me-4 text-reset">
          <FacebookIcon :size="24" title="Facebook" />
        </a>
        <a href="#" class="me-4 text-reset">
          <InstagramIcon :size="24" title="Instagram" />
        </a>
        <a href="#" class="me-4 text-reset">
          <TwitterIcon :size="24" title="Twitter" />
        </a>
      </div>
    </section>

    <!-- Links and Info Section -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <!-- Company Info -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              FRESH JUICE SHOP
            </h6>
            <p>
              Fresh, natural, and delicious fruit juices. Fast delivery in Sousse and surrounding areas.
            </p>
          </div>

          <!-- Useful Links -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Useful Links</h6>
            <ul class="list-unstyled">
              <li><a class="text-dark" href="#">About Us</a></li>
              <li><a class="text-dark" href="#">Shop</a></li>
              <li><a class="text-dark" href="#">Our Juices</a></li>
              <li><a class="text-dark" href="#">Contact</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i>Tunisia</p>
            <p><i class="fas fa-envelope me-3"></i> contact@freshjuice.tn</p>
            <p><i class="fas fa-phone me-3"></i> +216 12 345 678</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © {{ new Date().getFullYear() }} FRESH JUICE SHOP
    </div>
  </footer>
</template>

<script>

export default {
  name: 'Footer',
  components: {

  },
};
</script>