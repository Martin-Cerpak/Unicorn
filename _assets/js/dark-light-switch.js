
function getStylesheet() {
    var currentTime = new Date().getHours();
    if (0 <= currentTime && currentTime < 9) {
        document.write("<link rel='stylesheet' href='_assets/css/_dark/style.css' type='text/css'>");
    }
    if (9 <= currentTime && currentTime < 18) {
        document.write("<link rel='stylesheet' href='_assets/css/_light/style.css' type='text/css'>");
    }
    //if (9 <= currentTime && currentTime < 18) {
    //    document.write("<link rel='stylesheet' href='_assets/css/_dark/style.css' type='text/css'>");
    //}
    if (18 <= currentTime && currentTime <= 24) {
        document.write("<link rel='stylesheet' href='_assets/css/_dark/style.css' type='text/css'>");
    }
}
getStylesheet();
