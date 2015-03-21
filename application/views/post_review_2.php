<div>
	<div>
		<form action="<?php echo base_url('index.php/welcome/submit_review'); ?>" method="post">
			<h1>Rating</h1>
			<div>
				<div>
				<span>P1:</span>
				<input type="hidden" value="<?php echo $post_data['post_review_company']; ?>" name="company_name">
				<input type="hidden" value="<?php echo $post_data['populate_company_id']; ?>" name="company_id">
				<input type="hidden" value="<?php echo $post_data['work_here']; ?>" name="work_here">
				<input type="radio" name="p1" value="one_star">one star
				<input type="radio" name="p1" value="two_star">two star
				<input type="radio" name="p1" value="three_star">three star
				<input type="radio" name="p1" value="four_star">four star
				<input type="radio" name="p1" value="five_star">five star
				</div>
				<br>
				<div>
				<span>P2:</span>
				<input type="radio" name="p2" value="one_star">one star
				<input type="radio" name="p2" value="two_star">two star
				<input type="radio" name="p2" value="three_star">three star
				<input type="radio" name="p2" value="four_star">four star
				<input type="radio" name="p2" value="five_star">five star
				</div>
				<br>
				<div>
				<span>P3:</span>
				<input type="radio" name="p3" value="one_star">one star
				<input type="radio" name="p3" value="two_star">two star
				<input type="radio" name="p3" value="three_star">three star
				<input type="radio" name="p3" value="four_star">four star
				<input type="radio" name="p3" value="five_star">five star
				</div>
				<br>
				<div>
				<span>P4:</span>
				<input type="radio" name="p4" value="one_star">one star
				<input type="radio" name="p4" value="two_star">two star
				<input type="radio" name="p4" value="three_star">three star
				<input type="radio" name="p4" value="four_star">four star
				<input type="radio" name="p4" value="five_star">five star
				</div>
				<br>
				<div>
				<span>P5:</span>
				<input type="radio" name="p5" value="one_star">one star
				<input type="radio" name="p5" value="two_star">two star
				<input type="radio" name="p5" value="three_star">three star
				<input type="radio" name="p5" value="four_star">four star
				<input type="radio" name="p5" value="five_star">five star
				</div>
				<br>
				<div>
				<span>Overall Rating:</span>
				<input type="radio" name="rating" value="one_star">one star
				<input type="radio" name="rating" value="two_star">two star
				<input type="radio" name="rating" value="three_star">three star
				<input type="radio" name="rating" value="four_star">four star
				<input type="radio" name="rating" value="five_star">five star
				</div>
				<div>
					<span><h3>Comment</h1></span><br>
					<textarea name="review" id="review_box" cols="30" rows="10"></textarea>
				</div>
				<div>
					<input type="submit" value="submit review">
				</div>
			</div>
		</form>
	</div>
</div>