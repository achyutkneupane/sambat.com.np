function getPosts(value) {
    $.ajax({
        url: '/blog/getposts/' + value,
        type: 'get',
        dataType: 'json',
        success: function(response) {
            var len = 0;
            if (response != null) {
            	var posts = response['data'];
                len = posts.length;
            }
        	if(value == "all") {
        		$(".Maintitle").text("All Posts");
        	}
        	else {
        		$(".Maintitle").text(value);
        	}
        	var blog = $(".blogSection");
            if(len > 0){
            	blog.text("");
            	for(i=1;i<=len;i++){
            		var post = posts[i-1];
            		var postContent =
            		'<div class="card bg-dark text-dark">' + 
						'<img class="card-img" src="' + post.featured_image + '" alt="Card image">' + 
						'<div class="card-img-overlay" style="background-color: rbga(0,0,0,0.9);">' + 
							'<h5 class="card-title">' + post.title + '</h5>' + 
							'<p class="card-text">' + post.post_content + '</p>' + 
							'<p class="card-text">' + post.created_at + '</p>' + 
						'</div>' + 
					'</div>';
            		blog.append(postContent);
            	}
            }
        }
    });
}