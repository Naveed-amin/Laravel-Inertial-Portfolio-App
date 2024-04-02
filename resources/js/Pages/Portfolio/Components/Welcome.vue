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
  <div class="pt-tablecell page-welcome relative">
    <!-- .close -->
    <Link href="/portfolio" class="page-close"><i class="tf-ion-close"></i></Link>
    <!-- /.close -->

    <div class="author-image-large">
      <img src="./.././images/author.png" alt="">
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-7">
          <div class="page-title">
            <h2>David <span class="primary">ramon</span> <span class="title-bg">About</span></h2>
            <p>A product designer from England, who focuses on interactive design & A freelance designer focusing on typography & clean interfaces. Also works in dignissimos non quos Google..</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellendus corporis, tenetur inventore perferendis reprehenderit autem dignissimos non quos unde eveniet sapiente necessitatibus consequuntur ea ab dolore.</p>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    <nav class="page-nav clear">
<div class="container">
  <div class="flex flex-middle space-between">
    <span class="prev-page"><a href="index.html" class="link">&larr; Prev Page</a></span>
    <span class="copyright">Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>.</span>
    <span class="next-page"><a href="about.html" class="link">Next Page &rarr;</a></span>
  </div>
</div>
<!-- /.page-nav -->
</nav>
    <!-- /.container -->

  </div> <!-- /.pt-tablecell -->
</div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->


<!--
Essential Scripts
=====================================-->
<!-- <script src="plugins/jquery-2.2.4.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/jquery.nicescroll.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>

<script src="js/script.js"></script> -->



</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Link } from '@inertiajs/vue3'


const loading = ref(true);
// lifecycle hooks
onMounted(() => {
  // Execute these actions when the component is mounted
  window.addEventListener("load", () => {

      loading.value = false; // Hide preloader after a delay

  });
});


</script>
