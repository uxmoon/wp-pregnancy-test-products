var $ = jQuery.noConflict();

$(document).foundation();

$(document).ready(function() {

    // modal box for videos
    //$('.fancybox').fancybox();

    $('.fancybox').fancybox({
        scrolling : 'no'
    });

    // youtube api
    function onYouTubePlayerAPIReady() {
        $(document).ready(function () {
            jQuery.fancybox({
                href: "http://www.youtube.com/embed/3BnkoJvD5uk?enablejsapi=1&wmode=opaque&autoplay=1",
                //href: "http://www.youtube.com/embed/KL-k5kXqBCE?rel=0&amp;autoplay=1",
                type: "iframe",
                beforeShow: function () {
                    // Find the iframe ID
                    var id = jQuery.fancybox.inner.find('iframe').attr('id');
                    // Create video player object and add event listeners
                    var player = new YT.Player(id, {
                        events: {
                            'onStateChange': function (event) {
                                if (event.data === 0) {
                                    jQuery.fancybox.close();
                                } // if
                            } // onStateChange
                        } // events
                    }); // YT.Player
                } // beforeShow
            }); // fancybox
        }); // ready
    } // onYouTubePlayerAPIReady

    // slider home
    $('.slider-home').slick({
        autoplay        : true,
        autoplaySpeed   : 5000,
        arrows          : true,
        dots            : false,
        infinite        : true,
        pauseOnHover    : false,
        speed: 400
    });

    //  tabs for baby names
    $( "#tabs" ).tabs();

    // "consultorio online" section start
    $(function() {
        $("#archive-browser select").change(function() {
        // dynamically load the archives
        });
    });

    $("div.holder").jPages({
        containerID : "#archive-pot"
    });

    $(function() {
        var hijax = function(panel) {
            $('a.page', panel).click(function(){
                $(panel).load(this.href, {}, function() {
                    hijax(this);
                });
                return false;
            });
        };
        $("#tabs").tabs({
            ajaxOptions: {
                error: function(xhr, status, index, anchor) {
                    $(anchor.hash).html("Error");
                },
            },
            load: function(event, ui) {
                hijax(ui.panel);

            }
        });
    });

    $('#archive-pot').on('click', '.wp-paginate a', function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $('#archives-table').fadeOut(500, function(){
            $(this).load(link + ' #archives-table').fadeIn(500);
        });
    });
    // "consultorio online" section end

}); // end dom ready


/*('video').mediaelementplayer({
    alwaysShowControls: true,
});*/



/*
<?php //if ( is_front_page() ) { ?>
<?php if ( is_page('demo') ) { ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript">
*/


/*
    </script>
    <script src="http://www.youtube.com/player_api"></script>
    <script>
*/

/*    </script>
<?php }
//nombres de bebés
elseif ( is_page(array(48,94,535)) ) {
?>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
    <script>
        $("document").ready(function() {
            $( "#tabs" ).tabs();
        });
    </script>

<?php }
// el codigo aparece en todo el sitio
// el js solo se carga en las siguientes páginas
// para hacer en el futuro, sólo hay que listar las páginas donde no es necesario cargar el fancybox por ej array(!(1,2,3))
elseif (
    is_page(
        array(
            39,40,216,196,212,213,215,214,41,228,223,224,225,227,226,42,222,217,218,219,221,220,1123,13507
            )
        )
    ) {
?>
<?php }
//testing page id: 818
elseif ( is_page(array(818)) ) {
?>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/archives.js" type="text/javascript"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jPages.min.js"></script>

    <script type="text/javascript">*/
/*
    </script>

<?php }
//Consultorio online
if ( is_page(array(46)) ) {
?>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">*/
/*
    </script>

<?php }
// unknown page
elseif ( is_page(21351) ) {
?>

    <script type="text/javascript">*/
/*
    </script>

<?php } ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox')
        .fancybox({
            scrolling : 'no'
        });
    });
/*</script>*/
