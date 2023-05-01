var El = {
    page: "body"
};

var menuModule = {
    $el: ".page-responsive-menu",
    $el_header_active: ".page-header--moved",
    $el_wrapper: ".page-responsive-menu-wrapper",
    $el_active: ".page-responsive-menu--active",
    $el_stabil: ".page-responsive-menu--stabil",
    $$public: "this",
    init: function() {

        // if has el
        if( !$(menuModule.$el).length ){
            return false;
        }

        /* esc Key */
        $(window).on('keyup', function(e) {
            if (e.keyCode == 27 && menuModule.isOpen()) {
                menuModule.Close();
            }
        });

        /* space Click */
        $(menuModule.$el).on('click', function(e) {
            if(menuModule.isOpen()){
                if ( !$(e.target).is(menuModule.$el_wrapper) && !$(e.target).closest( menuModule.$el_wrapper ).length ) {
                    menuModule.Close();
                }
            }
        });

    },
    Open: function() {
        $(El.page).addClass(_(menuModule.$el_active)).removeClass(_(menuModule.$el_stabil)).delay(500).queue(function(next){
            $(this).addClass(_(menuModule.$el_stabil));
            next();
        });
    },
    Close: function() {
        $(El.page).removeClass(_(menuModule.$el_active)).addClass(_(menuModule.$el_stabil)).delay(500).queue(function(next){
            $(this).removeClass(_(menuModule.$el_stabil));
            next();
        });;
    },
    isOpen: function() {
        return $(El.page).hasClass(_(menuModule.$el_active))
    },
    Toggle: function() {
        if (!menuModule.isOpen()) {
            menuModule.Open();
        } else {
            menuModule.Close();
        }
    }
};

/* remove $selector */
var _ = function(val) {
    return val ? (val[0] == '.' || val[0] == '#' ? val.substr(1) : val) : val;
};

/* explode data name */
var data = function(val) {
    return val ? val.replace("[", "").replace("]", "").replace("data-", "") : val;
};

menuModule.init();
