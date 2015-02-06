if (!SantaFe) {
    var SantaFe = {};
}

(function ($) {
    SantaFe.showAdvancedForm = function () {
        var advancedForm = $('#advanced-form');
        var searchTextbox = $('#search-form input[type=text]');
        var searchSubmit = $('#search-form input[type=submit]');
        if (advancedForm.length > 0) {
            advancedForm.css("display", "none");
            $('#search-form').addClass("with-advanced");
            $('#query').after('<a href="#" id="advanced-search" class="button">Advanced Search</a>');
            advancedForm.click(function (event) {
                event.stopPropagation();
            });
            $("#advanced-search").click(function (event) {
                event.preventDefault();
                event.stopPropagation();
                advancedForm.fadeToggle();
                $(document).click(function (event) {
                    if (event.target.id == 'query') {
                        return;
                    }
                    advancedForm.fadeOut();
                    $(this).unbind(event);
                });
            });
        } else {
            $('#search-form input[type=submit]').addClass("blue button");
        }
    };


    SantaFe.mobileSelectNav = function () {
        // Create the dropdown base
        $("<select class=\"mobile\" />").appendTo("#primary-nav");

        // Create default option "Go to..."
        $("<option />", {
           "selected": "selected",
           "value"   : "",
           "text"    : "Go to..."
        }).appendTo("#primary-nav select");

        // Populate dropdown with menu items
        $("#primary-nav a").each(function() {
            var el = $(this);
            if (el.parents('ul ul').length) {
                var parentCount = el.parents("ul").length;
                var dashes = new Array(parentCount).join('- ');
                $("<option />", {
                    "value": el.attr("href"),
                    "text":  dashes + el.text()
                }).appendTo("#primary-nav select");
            } else {
                $("<option />", {
                    "value": el.attr("href"),
                    "text": el.text()
                }).appendTo("#primary-nav select");
            }
            $("#primary-nav select").change(function() {
              window.location = $(this).find("option:selected").val();
            });
        });
    }

    SantaFe.skipnav = function(){
      $("a[href^='#']").click(function() {
      // get the href attribute of the internal link
      // then strip the first character off it (#)
      // leaving the corresponding id attribute
      $("#"+$(this).attr("href").slice(1)+"")
        // give that id focus (for browsers that didn't already do so)
        .focus()
        // add a highlight effect to that id (comment out if not using)
        //.effect("highlight", {}, 3000);
      });
    };


})(jQuery);
