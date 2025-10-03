<form class="review-form">
	<h2 class="loud-voice">Submit Your Review</h2>
	
	<label for="title" class="required">Title:</label>
	<input type="text" id="title" name="title">
	
	<label for="review" class="required">Review:</label>
	<textarea type="text" id="review" name="review" rows='13'></textarea>
	
	<label for="add_images">Add Image (Optional)</label>
	<div class="image-area">
		<select name="add_images" id="add_images">
			<option value="">No Files Selected</option>
 			<option value="">Select Files</option>
			<option value="">Image 1</option>
  			<option value="">Image 2</option>
  			<option value="">Image 3</option>
		</select>
	</div>

  	<div><?php include('components/submit-btn/template.php'); ?></div>

	<output>
	</output>
</form>