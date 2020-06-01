setTimeout(function(){
    initDonate()
}, 1000);
function initDonate(){
    var donateBtn = document.getElementById('donate-btn');
    var donatePopup = document.getElementById('qrcode-panel');
    if(!donateBtn && !donatePopup){
        return
    }
    var l = donateBtn.offsetLeft-125;
    var t = donateBtn.offsetTop-330;
    donatePopup.style.left=l+'px'
    donatePopup.style.top=t+'px'

    donateBtn.addEventListener('click',function(){
        donatePopup.style.display='';
        event.stopPropagation()
    })
    document.getElementById('donate-close').addEventListener('click',function(){
        donatePopup.style.display='none';
        event.stopPropagation()
    })
    document.getElementsByName("pay")[0].addEventListener('click',function() {
        document.getElementById('zfbqr').style.display='none';
        document.getElementById('wxqr').style.display='';
        event.stopPropagation()
    });
    document.getElementsByName("pay")[1].addEventListener('click',function() {
        document.getElementById('wxqr').style.display='none';
        document.getElementById('zfbqr').style.display='';
        event.stopPropagation()
    });
    document.querySelector('body').addEventListener('click',function() {
        donatePopup.style.display='none';
        event.stopPropagation()
    });
    donatePopup.addEventListener('click',function() {
        event.stopPropagation()
    });
    console.log(" %c \u5c71\u9876\u6d1e\u6d1e\u4eba %c \u0044\u006f\u006e\u0061\u0074\u0065\u0020\u0070\u006c\u0075\u0067\u0069\u006e\u0020\u0062\u0079\u0020\u5c71\u9876\u6d1e\u6d1e\u4eba\u002e\u0020\u007c\u0020\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0072\u006f\u006f\u0074\u0076\u0069\u0070\u002e\u0063\u006e", "color: #FFFFFF; background: #FF4081; padding:6px;", "color: #FFFFFF; background: #424242; padding:6px;");
}