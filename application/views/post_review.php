<div id="container" style="text-align: center; min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto">
	<h1 style="text-align: center;">STEP ONE</h1>
	<div id="content">
		<form id="search_term" action="<?php echo base_url('index.php/welcome/post_review_2'); ?>" method="post">
			<div>
				Select Company From select Box
			</div>
			<div>
			    <input type="text" id="post_review_company" name="post_review_company" value="" />
			    <input type="hidden" id="populate_company_id" name="populate_company_id" value=""/>
			</div>
			<div>Did you work here</div>
			<div>
				<input type="radio" name="work_here" value="yes">Yes
				<input type="radio" name="work_here" value="no">No
			</div>
			<div>
				<input type="submit" value="submit" id="select_company_for_review">
			</div>
		</form>
	</div>
</div>