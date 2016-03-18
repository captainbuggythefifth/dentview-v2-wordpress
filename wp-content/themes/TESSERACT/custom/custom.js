(function(){
    var replaceWithMobilePhone = "<div><span class='fa fa-mobile' aria-hidden='true'></span><a style='padding-left: 10px; font-size:12px'>091934514518</a></div>";
    var replaceWithTelephone = "<div><span class='fa fa-envelope' aria-hidden='true'></span><a style='padding-left: 10px; font-size:12px'>091934514518</a></div>";
    var replace = document.getElementById("footer-banner-right").getElementsByTagName('div')[0];
    console.log(replace.innerHTML = replaceWithMobilePhone + replaceWithTelephone);
})();
