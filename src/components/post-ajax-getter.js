import jQuery from 'jquery';
import { masonryPosts } from "./masonry-grid";

//todo: refactor jquery to fetch
// async function getPostsAjax(url, data) {
//     await fetch(url, {
//         method: "POST",
//         body: data
//     })
// }

jQuery(function($){
    $('.js-ajax-post-loader').click(function(){

        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if( data ) {
                    masonryPosts.reInitMasonry(data);
                    masonryPosts.scrollToPost();
                } else {
                    $('.js-ajax-post-loader').remove();
                }
            }
        });
    });
});

