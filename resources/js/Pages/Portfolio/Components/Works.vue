<template>


<div class="preloader" :class="{ 'active': loading, 'done': !loading }">
  <div class="loading-mask"></div>
  <div class="loading-mask"></div>
  <div class="loading-mask"></div>
  <div class="loading-mask"></div>
  <div class="loading-mask"></div>
</div>

<div class="preview-wrapper">
  <div class="switcher-head">
    <span>Style Switcher</span>
    <div class="switcher-trigger tf-tools"></div>
  </div>

  <div class="switcher-body">
    <h4>Choose Color:</h4>
    <ul class="color-options list-none">
      <li class="c0" data-color="red" title="Default">Default</li>
      <li class="c1" data-color="blue" title="Red">Red</li>
      <li class="c2" data-color="green" title="Green">Green</li>
      <li class="c3" data-color="yellow" title="Blue">Blue</li>
    </ul>
  </div>
</div>

<main class="site-wrapper">
<div class="pt-table">
  <div class="pt-tablecell page-works relative">
    <!-- .close -->
    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
    <!-- /.close -->

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
          <div class="page-title text-center">
            <h2>My <span class="primary">works</span> <span class="title-bg">works</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat.</p>
          </div>
        </div>
      </div> <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <ul class="filter list-inline">
            <li><a href="#" class="active" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".Photoshop">Photoshop</a></li>
            <li><a href="#" data-filter=".Illustrator">Illustrator</a></li>
            <li><a href="#" data-filter=".Indesign">Indesign</a></li>
            <li><a href="#" data-filter=".Artworks">Artworks</a></li>
          </ul>
        </div>
      </div>

      <div class="row isotope-gutter">
        <div class="col-xs-12 col-sm-6 col-md-4 Photoshop Illustrator">
          <figure class="works-item">
            <img src="../images/works/1.jpg" alt="">
            <div class="overlay"></div>
            <figcaption class="works-inner">
              <h4>Project Name</h4>
              <p>Illustration, Digital Art</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 Illustrator">
          <figure class="works-item">
            <img src="../images/works/2.jpg" alt="">
            <div class="overlay"></div>
            <figcaption class="works-inner">
              <h4>Project Name</h4>
              <p>Illustration, Digital Art</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 Indesign Photoshop">
          <figure class="works-item">
            <img src="../images/works/3.jpg" alt="">
            <div class="overlay"></div>
            <figcaption class="works-inner">
              <h4>Project Name</h4>
              <p>Illustration, Digital Art</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 Artworks Illustrator">
          <figure class="works-item">
            <img src="../images/works/4.jpg" alt="">
            <div class="overlay"></div>
            <figcaption class="works-inner">
              <h4>Project Name</h4>
              <p>Illustration, Digital Art</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 Photoshop">
          <figure class="works-item">
            <img src="../images/works/5.jpg" alt="">
            <div class="overlay"></div>
            <figcaption class="works-inner">
              <h4>Project Name</h4>
              <p>Illustration, Digital Art</p>
            </figcaption>
          </figure>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    <nav class="page-nav clear">
<div class="container">
  <div class="flex flex-middle space-between">
    <span class="prev-page"><a href="resume.html" class="link">&larr; Prev Page</a></span>
    <span class="copyright">Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>.</span>
    <span class="next-page"><a href="testimonials.html" class="link">Next Page &rarr;</a></span>
  </div>
</div>
<!-- /.page-nav -->
</nav>
    <!-- /.container -->

  </div> <!-- /.pt-tablecell -->
</div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->



</template>


<script setup>
import { ref, onMounted } from 'vue'

const loading = ref(true);
// lifecycle hooks
onMounted(() => {
  // Execute these actions when the component is mounted
  window.addEventListener("load", () => {

      loading.value = false; // Hide preloader after a delay

  });
});


</script>
