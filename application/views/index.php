<div class="header vert">
  <div class="container">    
    <h1>My office review</h1>
      <p class="lead">A Review System For Professionals as well as for students</p>
      <div>&nbsp;</div>
      <div>
      	<div class="search-group">
          <button type="button" class="btn btn-default btn-lg" id="find_review">Find Review</button>  
          <a class="btn btn-default btn-lg" role="button" href="<?php echo base_url('index.php/welcome/post_review'); ?>">Post Review</a>
		    </div>
      </div>
      <div id="search_term" style="display:none">
        <p>
          <label>
            Find Company<br />
            <input type="text" id="q" name="q" />
          </label>
          <input type="submit" value="Go" />
        </p>
      </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('#find_review').click(function(){
    $('#search_term').show();
  });
});
</script>