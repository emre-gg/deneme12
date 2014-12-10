function shareOnFacebook(shareURL, shareTitle) {
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(shareURL) + '&t=' + encodeURIComponent(shareTitle),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;
}

function shareOnTwitter(shareURL, shareTitle) {
    window.open(
	  'https://twitter.com/intent/tweet?original_referer=' + encodeURIComponent(location.href) + '&text=' + encodeURIComponent(shareTitle) + '&tw_p=tweetbutton&url=' + encodeURIComponent(shareURL),
      'twitter-share-dialog',
      'width=626,height=436');
    return false;
}

function shareOnPinterest(shareURL, shareTitle, shareImage) {
    window.open(
	  'http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(shareURL) + '&media=' + encodeURIComponent(shareImage) + '&guid=oaKnNWr2tQ2c-0&description=' + encodeURIComponent(shareTitle),
      'pinterest-share-dialog',
      'width=626,height=436');
    return false;
}

function shareOnGoogle(shareURL, shareTitle) {
    window.open(
	  'https://plus.google.com/?url=' + encodeURIComponent(shareURL) + '&media=' + encodeURIComponent(shareImage) + '&guid=oaKnNWr2tQ2c-0&description=' + encodeURIComponent(shareTitle),
      'pinterest-share-dialog',
      'width=626,height=436');
    return false;
}