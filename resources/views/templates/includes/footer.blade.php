 <section>
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('assets/js/slidebars.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/respond.min.js')}}" ></script>

    <!--common script for all pages-->
    <script src="{{url('assets/js/common-scripts.js')}}"></script>
    @yield('scripts')
    @stack('script')


  </body>
</html>

