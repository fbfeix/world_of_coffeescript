<script src="//use.typekit.net/phn3blz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
        
<script src="http://code.jquery.com/jquery-2.1.3.min.js" ></script>
<script>
    $(document).ready( function (readyEventArgs) {
        var isMobile = $(window).width() < 1000;
        var isOpen = false;
        var defaultLeftHeaderMargin = $("header").css("padding-left");

        $(window).resize( function (resizeEventArgs) {
            isMobile = $(window).width() < 1000;
            
            if(isOpen == false && $(window).width() >= 1000)
            {
                $("#left-sided-menu").show();
                $("header").css("margin-left", "0px");
            }
            else if(isOpen == false && $(window).width() < 1000)
            {
                $("#left-sided-menu").hide();
                $("header").css("margin-left", "0px");
            }
            else if(isOpen == true && $(window).width() >= 1000)
            {
                $("header").css("margin-left", "0px");
            }
            else if(isOpen == true && $(window).width() < 1000)
            {
                $("header").css("margin-left", "0px");
                $("header").css("margin-left", "200px");
            }
                
        });

        $("header").click( function(clickEventArgs) {
            if(isMobile) {                        
                $("#left-sided-menu").toggle(100, function (args) {

                    if(isOpen) 
                    {
                        $("header").css("margin-left", "0px");

                    }
                    else {                        
                        $("header").css("margin-left", "200px");
                    }

                    isOpen = (!isOpen);
                });                                               

            }
        });
    });
</script>