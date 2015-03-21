<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        <hr>
        <p>Built with <i class="icon-heart-empty"></i> at <a href="#">Somesh Vyas</a>.<br>Company ©2013</p>
      </div>
    </div>
  </div>
</footer>

<ul class="nav pull-right scroll-down">
  <li><a href="#" title="Scroll down"><i class="icon-chevron-down icon-3x"></i></a></li>
</ul>
<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="icon-chevron-up icon-3x"></i></a></li>
</ul>

  <!-- script references -->
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.liveSearch.js'); ?>"></script>
    <script>
        jQuery('#q').liveSearch({url: 'index.php/welcome/search?q='});
        jQuery('#post_review_company').liveSearch({url: 'post_review_search?pc='});
        
        function select_company_from_search(company_id, company_name){
          $('#post_review_company').val(company_name);
          $('#populate_company_id').val(company_id);
        }
        
    </script>
  </body>
</html>