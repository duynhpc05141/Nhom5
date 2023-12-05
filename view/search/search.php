<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="section-top-border">
					<form action="#">
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder='Tìm kiếm' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tìm kiếm'">
								
							</div>
						</div>
						
					</form>
<div class="result-container">

</div>	
<div class="search-header">
	<?php
					foreach ($search as $key) {
						extract($key);
						$anh = '../img/' . $img;
						$image_paths_array = explode(',', $img);

						$categoryInfo = loai_select_by_id($category_id);
						$anh = '../img/' . $img;
						$image_paths_array = explode(',', $img);
						$image_html_locations = []; 

						foreach ($image_paths_array as $image_path) {
							$full_image_path = './img/' . trim($image_path);

							if (file_exists($full_image_path)) {
								$image_html_locations[] = '<img class="card-img" src="' . $full_image_path . '" alt="Hình ảnh bài viết" style="max-height: 400px;">';
							} else {
								$image_html_locations[] = 'Chưa có ảnh được chọn';
							}
						}
						$detail = "index.php?act=detail&id=" . $article_id;
						$category = "index.php?act=category&id=" . $category_id;
						echo '
					<a href="' . $detail . '">
					<div class="row p-2 shadow">
					<div class="col-md-3 p-2">
					' . $image_html_locations[0] . '
					</div>
					<div class="col-md-9 mt-sm-20 p-2">
						<p>' . $article_name . '</p>
					</div>
				</div>
				</a>
					';
					}
					?>
</div>


				</div>
			</div>
			<div class="col-lg-4">
				<?php include "includes/aside.php"; ?>
			</div>
		</div>
	</div>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.form-control').keyup('input', function() {
        var keyword = $(this).val().trim();

        $.ajax({
            type: 'POST',
            url: './view/search/load_data.php', 
            data: { keyword: keyword },
            success: function(response) {
				 $('.result-container').html(response);
                $('.search-header').hide();
              
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script>