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

<section class="site-wrapper">
<div class="pt-table">
  <div class="pt-tablecell page-services relative">
    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-offset-1 col-lg-10">
          <div class="page-title text-center">
            <h2>Awesome <span class="primary">Services</span> <span class="title-bg">Services</span></h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
              notare quam littera gothica,quam nunc putamus parum claram anteposuerit.</p>
          </div>

          <div class="hexagon-menu services clear">
            <div class="service-hex">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                xml:space="preserve">
                <g>
                  <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                  <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                </g>
              </svg>

              <div class="content">
                <div class="icon">
                  <i class="et-line icon-lightbulb"></i>
                </div>
                <h4>Creative <br> Design</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consue.</p>
              </div>
            </div>
            <div class="service-hex">

              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                xml:space="preserve">
                <g>
                  <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                  <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                </g>
              </svg>
              <div class="content">
                <div class="icon">
                  <i class="et-line icon-mobile"></i>
                </div>
                <h4>Responsive <br> Layout</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consue.</p>
              </div>
            </div>
            <div class="service-hex">

              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                xml:space="preserve">
                <g>
                  <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                  <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                </g>
              </svg>
              <div class="content">
                <div class="icon">
                  <i class="et-line icon-profile-male"></i>
                </div>
                <h4>User <br> Friendly</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consue.</p>
              </div>
            </div>
            <div class="service-hex">

              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                xml:space="preserve">
                <g>
                  <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                  <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                </g>
              </svg>
              <div class="content">
                <div class="icon">
                  <i class="et-line icon-heart"></i>
                </div>
                <h4>Lovely <br> Animation</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consue.</p>
              </div>
            </div>
            <div class="service-hex">

              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;"
                xml:space="preserve">
                <g>
                  <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4" />
                  <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131" />
                </g>
              </svg>
              <div class="content">
                <div class="icon">
                  <i class="et-line icon-hotairballoon"></i>
                </div>
                <h4>Ready to <br> launch</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consue.</p>
              </div>
            </div>
          </div>

        </div> <!-- /.col-xs-12 -->

      </div> <!-- /.row -->
    </div> <!-- /.container -->

    <nav class="page-nav clear">
<div class="container">
  <div class="flex flex-middle space-between">
    <span class="prev-page"><a href="about.html" class="link">&larr; Prev Page</a></span>
    <span class="copyright">Copyright &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a>.</span>
    <span class="next-page"><a href="resume.html" class="link">Next Page &rarr;</a></span>
  </div>
</div>
<!-- /.page-nav -->
</nav>
    <!-- /.container -->

  </div> <!-- /.pt-tablecell -->
</div> <!-- /.pt-table -->
</section> <!-- /.site-wrapper -->


<!--
Essential Scripts
=====================================-->

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
