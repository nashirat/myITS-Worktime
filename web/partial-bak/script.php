<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jqueryui/jquery-ui.min.js"></script>
<script src="http://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/prismjs/prism.js"></script>
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.js"></script>
<!-- <script src="../../assets/js/dashforge.aside.js"></script> -->
<!-- <script src="../../assets/js/smooth-scrollbar.js"></script> -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
<!-- what is this -->
<!-- <script src="../../lib/ekko-lightbox/js/ekko-lightbox.min.js"></script>
<script src="../../lib/ekko-lightbox/js/ekko-lightbox.min.js.map"></script> -->

<!-- Script base -->

<!-- Change theme locally -->

<!-- Change theme locally end -->

<!-- z-index card on dropdown -->

<script>
    $(function () {
        'use strict'
        function onLoad(callback) {
            if (document.readyState === 'complete') {
                callback();
            } else {
                window.addEventListener("load", callback);
            }
        }

        onLoad(function () {
            $('#loading').hide();
        });

    })


</script>

<script>
    $(function () {
        $(".dropdown").on({
            "show.bs.dropdown": function () {
                $("#content").css("z-index", "-10")
                $("#content-canvas").css("z-index", "-10")
                $(".sidebar-nav").toggleClass("disable-click");
                $(".dropdown-link-profile").toggleClass("on");
            },
            "hide.bs.dropdown": function () {
                $("#content").css("z-index", "10")
                $("#content-canvas").css("z-index", "10")
                $(".sidebar-nav").toggleClass("disable-click");
                $(".dropdown-link-profile").toggleClass("on");
            },
        })
    })
</script>
<!-- z-index card on dropdown end -->

<!-- Navbar active item automate -->
<script>
    $(function () {
        var category = window.location.pathname.split("/").at(-2);
        var page = window.location.pathname.split("/").at(-1);

        $('.collapse[id="' + category + '"]').addClass("onpage");
        $('.collapse[id="' + category + '"]').collapse("show");
        $('.nav-link-its-desktop[href="../' + category + '"]').addClass("active");
        $('.btn[data-target="#' + category + '"]').children(".dropdown-side").toggleClass("flip");
        if ((page != "")) {
            $('.nav-link-its-desktop[href^="../' + category + "/" + page + '"]').addClass("active");
        }
    })
</script>
<!-- Navbar active item automate end-->

<!-- Click to copy -->
<script>
    $(function () {

        $('.hover-highlight').hover(function () {
            $(this)
                .attr('data-original-title', 'Click to copy')
                .tooltip('show')
        })
        $('.hover-highlight').click(function () {
            navigator.clipboard.writeText($(this).prop("innerText").trim()).then(
                $(this)
                    .attr('data-original-title', 'Copied!')
                    .tooltip('show')
                    .attr('data-original-title', 'Click to copy')
            )
        })

    })
</script>
<!-- Click to copy end -->

<!-- Responsive container content & sidebar toggle -->
<script>
    $(function () {

        const divElem = document.querySelector('.cover-container-menu');
        const divElem2 = document.querySelector('.cover-container');

        const myResize = new ResizeObserver(entries => {
            let Con = $('.cover-container');
            let conWidth = $('.cover-container').width();
            let conMenuWidth = $('.cover-container-menu').width();
            let conMenu = $('.cover-container-menu');

            if (conWidth <= 310) {
                Con.height(conWidth * 0.7);
            } else {
                Con.height(conWidth * 0.5625);
            }
            if (conMenuWidth <= 310) {
                conMenu.height(conMenuWidth * 0.7);
            } else {
                conMenu.height(conMenuWidth * 0.5625);
            }
        })

        $('.change').click(function () {
            let sbWidth = $('.new-sidebar').width();
            if (sbWidth > 71) {
                $('.dropdown-side').hide();
                $('.profile-acc').hide();
                $('.profile-name').hide();
                $('.profile').width(62);
                $('.dropdown-link-profile').width(62);
                $('.new-sidebar').width(71);
                $('.change').toggleClass('flip');
                $('.btn-side').css("visibility", "hidden")
                $(".collapse").collapse("hide");

            } else {
                $('.dropdown-side').show();
                $('.profile-acc').show();
                $('.profile-name').show();
                $('.dropdown-link-profile').width(222);
                $('.profile').width(222);
                $('.new-sidebar').width(241);
                $('.change').toggleClass('flip');
                $('.btn-side').css("visibility", "visible")
                $(".onpage").collapse("show");

            }
        })

        if (($(".cover-container-menu").length <= 0) && ($(".cover-container").length <= 0)) {
            return;
        } else if ($(".cover-container-menu").length <= 0) {
            myResize.observe(divElem2);
        } else if ($(".cover-container-menu").length > 0) {
            myResize.observe(divElem);
        }

    })
</script>
<!-- Responsive container content & sidebar toggle end-->

<!-- dropdown click animation -->
<script>
    $(function () {
        $("button.btn-side").click(function () {
            $(this).children(".dropdown-side").toggleClass("flip");
        })
    })
</script>
<!-- dropdown click animation end -->

<!-- back to top button & scroll observer -->
<script>
    $(".back-to-top").slideUp("fast");

    document.addEventListener('DOMContentLoaded', () => {
        var scrollDirectionDown;
        scrollDirectionDown = true;
        window.addEventListener('scroll', () => {

            if ((this.oldScroll > this.scrollY) && this.scrollY >= 800) {
                scrollDirectionDown = false;
            } else {
                scrollDirectionDown = true;
            }
            this.oldScroll = this.scrollY;

            if (scrollDirectionDown) {
                $(".back-to-top").slideUp("fast");
            } else {
                $(".back-to-top").slideDown("fast");
            }
        });
    });
</script>
<!-- back to top button & scroll observer end-->

<!-- Responsive footer and navbar -->
<script>
    var bodyWidth = $("#content").width();
    var navWidth = $("#navbar").width();
    var sidebarWidth = $(".new-sidebar").width();

    if ($(window).width() <= 992) {
        $('#navbar').width(bodyWidth - 25);
        $('#footer').width(bodyWidth + sidebarWidth - 25)
        $('#mobilemenu').width(bodyWidth)
    } else {
        $('#footer').width(bodyWidth + sidebarWidth + 10);
        $('#navbar').width(bodyWidth + sidebarWidth + 10);
        $('#mobilemenu').width(bodyWidth + sidebarWidth + 10);
    }

    $(window).resize(function () {
        bodyWidth = $("#content").width();
        navWidth = $("#navbar").width();
        sidebarWidth = $(".new-sidebar").width();
        if ($(window).width() <= 992) {
            $('#navbar').width(bodyWidth - 25);
            $('#mobilemenu').width(bodyWidth)
        } else {
            $('#footer').width(bodyWidth + sidebarWidth + 10);
            $('#navbar').width(bodyWidth + sidebarWidth + 10);
            $('#mobilemenu').width(bodyWidth + sidebarWidth + 10);
        }
    })
</script>
<!-- Responsive footer and navbar end-->

<!-- IDK WHAT ALL OF BELOW -->

<script>
    $(function () {
        'use strict'

        $('.off-canvas-menu').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).addClass('show');
        });

        $('.off-canvas .close').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.off-canvas').removeClass('show');
        })

        $(document).on('click touchstart', function (e) {
            e.stopPropagation();
            if (!$(e.target).closest('.off-canvas-menu').length) {
                var offCanvas = $(e.target).closest('.off-canvas').length;
                if (!offCanvas) {
                    $('.off-canvas.show').removeClass('show');
                }
            }
        });
    });
</script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>

<script>
    $(document).on('click', '.allow-focus', function (e) {
        e.stopPropagation();
    });
</script>

<script>
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<!-- Sementara -->
<!-- <script>
    var goBtn = document.getElementById("goBtn");
    var menu = document.getElementById("menu");

    goBtn.onclick = function () {
        window.location = menu.value;
    }
</script> -->

<!-- Tahun Saat Ini -->
<!-- <script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("thn").innerHTML = year;
</script> -->

<!-- Lightbox, penampil gambar -->
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>