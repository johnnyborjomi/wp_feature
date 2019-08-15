import Masonry from 'masonry-layout';

export const masonryPosts = new MasonryPostsGridComponent('.posts-container', '.post');

function MasonryPostsGridComponent(containerSelector, postSelector) {
    this.container = null;
    this.masonryInstance = null;
    this.postsWrapper = document.createElement("div");
    this.postToScroll = '';

    this.initMasonry = function () {
        this.container = document.querySelector(containerSelector);

        this.masonryInstance = new Masonry( this.container, {
            itemSelector: postSelector,
            columnWidth: postSelector
        });
    };

    this.reInitMasonry = function (posts) {
        this.postsWrapper.innerHTML = posts;
        const wrappedPosts = this.postsWrapper.querySelectorAll(postSelector);

        Array.from(wrappedPosts).forEach(this.appendPost.bind(this));
    };

    this.appendPost = function (post, index) {
        index === 0 ? this.postToScroll = post : null;
        this.container.appendChild(post);
        this.masonryInstance.appended(post);
    };


    this.scrollToPost = function () {
        window.scrollTo({
            top: this.postToScroll.offsetTop,
            behavior: "smooth"
        })
    }
}

document.addEventListener('DOMContentLoaded', ()=> {
    masonryPosts.initMasonry();
});


