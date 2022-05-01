// SCRIPT WIDGET WHATSAPP
object = document.querySelector(".ws--button-fab");
object.addEventListener("click", whatsappChat);
function whatsappChat() {    
    var button = document.querySelector(".ws--button-fab");
    var ballon = document.querySelector(".ws--float-ballon");

    if (button.classList.contains("ws--button-fab---open")) {
        button.classList.remove("ws--button-fab---open");
        ballon.classList.remove("ws--float-ballon---open");
        ballon.classList.add("ws--float-ballon---close");
        button.innerHTML = '<img src="assets/img/whatsappWidger/icon-watsapp-chat.svg?h=f212680524d8016ddcb3fd24999d1085" alt="icon-chat" width="31px">';
    } else {
        button.classList.add("ws--button-fab---open");
        ballon.classList.add("ws--float-ballon---open");
        ballon.classList.remove("ws--float-ballon---close");
        button.innerHTML = '<img src="assets/img/whatsappWidger/icon-watsapp-close.svg?h=f212680524d8016ddcb3fd24999d1086" alt="icon-close" width="31px">';

    }
}
object = document.querySelector(".ws-float-ballon--button-close");
object.addEventListener("click", whatsappBalloonClose);
function whatsappBalloonClose() {
    var ballon = document.querySelector(".ws--float-ballon");
    ballon.classList.add("ws--float-ballon---close");
}