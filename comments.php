<!-- https://ra-biitch.blogspot.com/ - Kunjungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php

echo '<form action="#" class="comments-section-form">
		<fieldset>
			<section>
				<label class="input comment-user-img-wrapp"><i class="icon-profile-male comment-user-img"></i></label>
				<div class="comment-wrapper">
					<label class="input">
						<span class="comment-username" id="username1"></span><span class="timePosted"id="timePosted1"></span>
						<span class="comments" id="comment1"></span>														
					</label>
				</div>
			</section>
		</fieldset>
		<fieldset>
			<section>
				<label class="input comment-user-img-wrapp"><i class="icon-profile-male comment-user-img"></i></label>
				<div class="comment-wrapper">
					<label class="input">
						<span class="comment-username" id="username2"></span><span class="timePosted" id="timePosted2"></span>
						<span class="comments" id="comment2"></span>														
					</label>
				</div>
			</section>
		</fieldset>
		<fieldset>
			<section>
				<label class="input comment-user-img-wrapp"><i class="icon-profile-male comment-user-img"></i></label>
				<div class="comment-wrapper">
					<label class="input">
						<span class="comment-username" id="username3"></span><span class="timePosted" id="timePosted3"></span>
						<span class="comments" id="comment3"></span>														
					</label>
				</div>
			</section>
		</fieldset>			
		<div class="add-new-comment-wrapp">
			<h4>Add a new comment</h4>
			<section>
				<label class="input" id="commentUsernameLabel">						
					<input id="commentUsername" placeholder="Username" type="text">
				</label>
			</section>
			<section>
				<label class="textarea" id="commentCommentLabel">						
					<textarea id="commentComment" rows="3" placeholder="Your Message..."></textarea>
				</label>
				<div class="post-new-comment-button-wrapp">
					<a class="ig-button small" href="javascript:void(0)">Post</a>
				</div>
				<div class="shake-wrapper-2"><p class="comment-post-notice"><i class="fa fa-info-circle" aria-hidden="true"></i> To prevent spam, commenting is only allowed for users who
				already used our generator.</p>
				</div>
				<div style="clear: both;"></div>
			</section>
		</div>
	</form>';
?>	