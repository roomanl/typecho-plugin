setTimeout(function(){
    initImagePreview()
    console.log(" %c \u5c71\u9876\u6d1e\u6d1e\u4eba %c \u0049\u006d\u0061\u0067\u0065\u0050\u0072\u0065\u0076\u0069\u0065\u0077\u0020\u0070\u006c\u0075\u0067\u0069\u006e\u0020\u0062\u0079\u0020\u5c71\u9876\u6d1e\u6d1e\u4eba\u002e\u0020\u007c\u0020\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0072\u006f\u006f\u0074\u0076\u0069\u0070\u002e\u0063\u006e", "color: #FFFFFF; background: #FF4081; padding:6px;", "color: #FFFFFF; background: #424242; padding:6px;");
}, 1000);

function initImagePreview(){
    var postcontent=document.querySelector('.post-content');
    var viewer = new Viewer(postcontent);
}