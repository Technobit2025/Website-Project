(function ($) {
    if (localStorage.getItem("color"))
        $("#color").attr(
            "href",
            "../assets/css/" + localStorage.getItem("color") + ".css"
        );
    if (localStorage.getItem("dark")) $("body").attr("class", "dark-only");
    console.log(baseUrl);
    $(
        `<div class="sidebar-panel-main"><ul><li id="cog-click"><a href="javascript:void(0)" class="cog-click icon-btn btn-primary"><i class="fa-solid fa-gear fa-spin"></i></a><span>Settings</span></li></ul></div><section class="setting-sidebar"><div class="customizer-header"><div class="theme-title"><div><h4>Kustom Tema</h4><p class="mb-0">Ubah temamu sekarang<i class="fa-solid fa-thumbs-up fa-fw"></i></p></div><div class="flex-grow-1"><a class="icon-btn btn-outline-light button-effect pull-right cog-close" id="cog-close"><i class="fa-solid fa-xmark fa-fw"></i></a></div></div></div><div class="customizer-body custom-scrollbar"><h6>Tipe Layout</h6><ul class="layout-grid main-layout"><li class=active data-attr=dark-sidebar id="layout-grid-toggle"><div class="bg-light header"><ul><li><li><li></ul></div><div class=body><ul><li class="bg-light sidebar"><li class="bg-light body"><span class="badge badge-primary">LTR</span></ul></div><li class="px-3"  id="box-layout-toggle"><div class="bg-light header"><ul><li><li><li></ul></div><div class=body><ul><li class="bg-light sidebar"><li class="bg-light body"><span class="badge badge-primary">Box</span></ul></div></ul><h6>Tipe sidebar</h6><ul class="layout-grid sidebar-type"><li data-attr="normal-sidebar" id="horizontal-sidebar-toggle"><div class="bg-light header"><ul><li><li><li></ul></div><div class=body><ul><li class="sidebar bg-dark"><li class="bg-light body"></ul></div><li id="compact-sidebar-toggle"><div class="bg-light header"><ul><li><li><li></ul></div><div class=body><ul><li class="sidebar bg-dark compact"><li class="bg-light body"></ul></div></ul><h6>Unlimited Color</h6><ul class="layout-grid unlimited-color-layout"><input id=ColorPicker1 name=Background type=color value=#7366ff><input id=ColorPicker2 name=Background type=color value=#838383><button class="color-apply-btn color-apply-btn btn btn-primary" type=button>Apply</button></ul><h6>Sidebar Icon</h6><ul class="layout-grid sidebar-setting"><li class=active data-attr=stroke-svg><div class="bg-light header"><ul><li><li><li></ul></div><div class="bg-light body"><span class="badge badge-primary">Stroke</span></div><li data-attr=fill-svg><div class="bg-light header"><ul><li><li><li></ul></div><div class="bg-light body"><span class="badge badge-primary">Fill</span></div></ul><h6>Mix Layout</h6><ul class="layout-grid customizer-mix"><li class="color-layout active" data-attr=light-only><div class="bg-light header"><ul><li><li><li></ul></div><div class="body common-layout"><span class="badge badge-secondary">Light</span><ul><li class="bg-light sidebar"><li class="bg-light body"></ul></div><li class=color-layout data-attr=dark-sidebar><div class="bg-light header"><ul><li><li><li></ul></div><div class="body common-layout"><span class="badge badge-secondary">Sidebar</span><ul><li class="sidebar bg-dark"><li class="bg-light body"></ul></div><li class=color-layout data-attr=dark-only><div class="header bg-dark"><ul><li><li><li></ul></div><div class="body common-layout"><span class="badge badge-secondary">Dark</span><ul><li class="sidebar bg-dark"><li class="body bg-dark"></ul></div><li class=color-layout id=auto-layout onclick="detectColorScheme()"><div class="bg-light header"><ul><li><li><li></ul></div><div class="body common-layout"><span class="badge badge-secondary">Auto</span><ul><li class="sidebar bg-dark"><li class="bg-light body"></ul></div></ul></div></section>`
    ).appendTo($("body"));
    {
        /* <h6>Light layout</h6><ul class="layout-grid customizer-color"><li class=color-layout data-attr=color-1 data-primary=#7366ff data-secondary=#838383><div></div><li class=color-layout data-attr=color-2 data-primary=#4831D4 data-secondary=#ea2087><div></div><li class=color-layout data-attr=color-3 data-primary=#d64dcf data-secondary=#8e24aa><div></div><li class=color-layout data-attr=color-4 data-primary=#4c2fbf data-secondary=#2e9de4><div></div><li class=color-layout data-attr=color-5 data-primary=#7c4dff data-secondary=#7b1fa2><div></div><li class=color-layout data-attr=color-6 data-primary=#3949ab data-secondary=#4fc3f7><div></div></ul><h6>Dark Layout</h6><ul class="layout-grid customizer-color dark"><li class=color-layout data-attr=color-1 data-primary=#4466f2 data-secondary=#1ea6ec><div></div><li class=color-layout data-attr=color-2 data-primary=#4831D4 data-secondary=#ea2087><div></div><li class=color-layout data-attr=color-3 data-primary=#d64dcf data-secondary=#8e24aa><div></div><li class=color-layout data-attr=color-4 data-primary=#4c2fbf data-secondary=#2e9de4><div></div><li class=color-layout data-attr=color-5 data-primary=#7c4dff data-secondary=#7b1fa2><div></div><li class=color-layout data-attr=color-6 data-primary=#3949ab data-secondary=#4fc3f7><div></div></ul> */
    }
    (function () {})();
    //live customizer js
    $(document).ready(function () {
        // Setting and Layout Toggle
        document
            .getElementById("cog-click")
            .addEventListener("click", function () {
                var settingSidebar = document.querySelector(".setting-sidebar");
                settingSidebar.classList.add("open");
            });

        document
            .getElementById("cog-close")
            .addEventListener("click", function () {
                var settingSidebar = document.querySelector(".setting-sidebar");
                settingSidebar.classList.remove("open");
            });

        // document
        //     .getElementById("grip-click")
        //     .addEventListener("click", function () {
        //         var settingSidebar = document.querySelector(".layout-sidebar");
        //         settingSidebar.classList.add("open");
        //     });

        // document
        //     .getElementById("grip-close")
        //     .addEventListener("click", function () {
        //         var settingSidebar = document.querySelector(".layout-sidebar");
        //         settingSidebar.classList.remove("open");
        //     });

        function closeSidebarOnClickOutside(sidebarClass) {
            document.addEventListener("click", function (event) {
                var setting_sidebar = document.querySelector(sidebarClass);
                if (
                    !event.target.closest("#cog-click")
                    // && !event.target.closest("#grip-click")
                ) {
                    setting_sidebar.classList.remove("open");
                }
            });
        }
        closeSidebarOnClickOutside(".setting-sidebar");
        // closeSidebarOnClickOutside(".layout-sidebar");

        // const defaultLayout = "dubai";
        // const urlParams = new URLSearchParams(window.location.search);
        // const layout = urlParams.get("layout")
        //     ? urlParams.get("layout")
        //     : defaultLayout;
        // setLayout(layout ? layout : defaultLayout);

        $(".customizer-color li").on("click", function () {
            $(".customizer-color li").removeClass("active");
            $(this).addClass("active");
            var color = $(this).attr("data-attr");
            var primary = $(this).attr("data-primary");
            var secondary = $(this).attr("data-secondary");
            localStorage.setItem("color", color);
            localStorage.setItem("primary", primary);
            localStorage.setItem("secondary", secondary);
            localStorage.removeItem("dark");
            $("#color").attr("href", "../assets/css/" + color + ".css");
            $(".dark-only").removeClass("dark-only");
            location.reload(true);
        });

        $(".customizer-color.dark li").on("click", function () {
            $(".customizer-color.dark li").removeClass("active");
            $(this).addClass("active");
            $("body").attr("class", "dark-only");
            localStorage.setItem("dark", "dark-only");
        });

        function lightenColor(hex, percent) {
            let r = parseInt(hex.substring(1, 3), 16);
            let g = parseInt(hex.substring(3, 5), 16);
            let b = parseInt(hex.substring(5, 7), 16);

            r = Math.min(255, r + (255 - r) * percent);
            g = Math.min(255, g + (255 - g) * percent);
            b = Math.min(255, b + (255 - b) * percent);

            return `#${Math.round(r)
                .toString(16)
                .padStart(
                    2,
                    "0"
                )}${Math.round(g).toString(16).padStart(2, "0")}${Math.round(b).toString(16).padStart(2, "0")}`;
        }

        function hexToRgb(hex) {
            return (
                "rgb(" +
                parseInt(hex.slice(1, 3), 16) +
                ", " +
                parseInt(hex.slice(3, 5), 16) +
                ", " +
                parseInt(hex.slice(5, 7), 16) +
                ")"
            );
        }

        if (localStorage.getItem("primary") != null) {
            let primary = localStorage.getItem("primary");
            let shadow = lightenColor(primary, 0.6); // Mencerahkan 60%

            document.documentElement.style.setProperty(
                "--theme-default",
                primary
            );
            document.documentElement.style.setProperty(
                "--theme-default-label",
                primary + "1a"
            );
            document.documentElement.style.setProperty(
                "--theme-default-alert",
                primary + "cc"
            );
            document.documentElement.style.setProperty(
                "--theme-default-shadow",
                shadow
            );
            document.documentElement.style.setProperty(
                "--bs-link-hover-color-rgb",
                hexToRgb(primary).replace("rgb(", "").replace(")", "")
            );
        }

        if (localStorage.getItem("secondary") != null) {
            document.documentElement.style.setProperty(
                "--theme-secondary",
                localStorage.getItem("secondary")
            );
        }
        $(
            ".customizer-links #c-pills-home-tab, .customizer-links #c-pills-layouts-tab"
        ).click(function () {
            $(".customizer-contain").addClass("open");
            $(".customizer-links").addClass("open");
        });

        $(".close-customizer-btn").on("click", function () {
            $(".floated-customizer-panel").removeClass("active");
        });

        $(".customizer-contain .icon-close").on("click", function () {
            $(".customizer-contain").removeClass("open");
            $(".customizer-links").removeClass("open");
        });

        $(".color-apply-btn").click(function () {
            location.reload(true);
        });

        const layoutToggle = (id, classList) => {
            document.getElementById(id).addEventListener("click", () => {
                document.body.classList.remove("box-layout", "dark-sidebar"); // Remove previous classes
                const classesToAdd = classList.split(" ");
                document.body.classList.add(...classesToAdd); // Add new classes
                localStorage.setItem("layout-type", classesToAdd.join(" "));
            });
        };

        layoutToggle("box-layout-toggle", "box-layout dark-sidebar");
        layoutToggle("layout-grid-toggle", "dark-sidebar");

        if (!window.location.href.includes("login") && 
            !window.location.href.includes("forgot-password") && 
            !window.location.href.includes("reset-password")) {
            document.body.className =
                localStorage.getItem("layout-type") || "dark-sidebar";
        }

        function applyThemeMode() {
            const themeMode = localStorage.getItem("mode-arunika");
            if (themeMode == "dark-only") {
                $("body").addClass("dark-only");
            } else if (themeMode == "light") {
                $("body").addClass("light");
            }
        }
        applyThemeMode();

        var primary = document.getElementById("ColorPicker1").value;
        document.getElementById("ColorPicker1").onchange = function () {
            primary = this.value;
            localStorage.setItem("primary", primary);
            document.documentElement.style.setProperty(
                "--theme-primary",
                primary
            );
        };

        var secondary = document.getElementById("ColorPicker2").value;
        document.getElementById("ColorPicker2").onchange = function () {
            secondary = this.value;
            localStorage.setItem("secondary", secondary);
            document.documentElement.style.setProperty(
                "--theme-secondary",
                secondary
            );
        };

        $(".customizer-color.dark li").on("click", function () {
            $(".customizer-color.dark li").removeClass("active");
            $(this).addClass("active");
            $("body").attr("class", "dark-only");
            localStorage.setItem("dark", "dark-only");
        });

        $(".customizer-mix li").on("click", function () {
            $(".customizer-mix li").removeClass("active");
            $(this).addClass("active");
            var mixLayout = $(this).attr("data-attr");
            $("body").attr("class", mixLayout);
        });

        $(".sidebar-setting li").on("click", function () {
            $(".sidebar-setting li").removeClass("active");
            $(this).addClass("active");
            var sidebar = $(this).attr("data-attr");
            $(".sidebar-wrapper").attr("data-sidebar-layout", sidebar);
        });

        $(".sidebar-main-bg-setting li").on("click", function () {
            $(".sidebar-main-bg-setting li").removeClass("active");
            $(this).addClass("active");
            var bg = $(this).attr("data-attr");
            $(".sidebar-wrapper").attr("class", "sidebar-wrapper " + bg);
        });

        const sidebarToggle = (id, classList) => {
            document.getElementById(id).addEventListener("click", () => {
                document
                    .querySelector("#pageWrapper")
                    .classList.remove("horizontal-wrapper", "compact-wrapper"); // Remove previous classes
                const classesToAdd = classList.split(" ");
                document
                    .querySelector("#pageWrapper")
                    .classList.add(...classesToAdd); // Add new classes
                localStorage.setItem("sidebar-type", classesToAdd.join(" "));
            });
        };

        sidebarToggle("horizontal-sidebar-toggle", "horizontal-wrapper");
        sidebarToggle("compact-sidebar-toggle", "compact-wrapper");

        if (!window.location.href.includes("login") && 
            !window.location.href.includes("forgot-password") && 
            !window.location.href.includes("reset-password")) {
            document.querySelector("#pageWrapper").className =
                "page-wrapper " +
                (localStorage.getItem("sidebar-type") || "compact-wrapper");
        }

        $(".main-layout li").on("click", function () {
            $(".main-layout li").removeClass("active");
            $(this).addClass("active");
            var layout = $(this).attr("data-attr");
            $("body").attr("class", layout);
            $("html").attr("dir", layout);
        });

        $(".main-layout .box-layout").on("click", function () {
            $(".main-layout .box-layout").removeClass("active");
            $(this).addClass("active");
            var layout = $(this).attr("data-attr");
            $("body").attr("class", "box-layout");
            $("html").attr("dir", layout);
        });
    });
})(jQuery);

function updateQueryParamInCurrentURL(key, value) {
    // Get the current URL
    let currentUrl = window.location.href;

    // Check if the URL already has query parameters
    const urlParts = currentUrl.split("?");
    if (urlParts.length >= 2) {
        // URL has query parameters, parse them
        const queryParams = urlParts[1].split("&");
        let updatedParams = queryParams.map((param) => {
            const [paramKey, paramValue] = param.split("=");
            if (decodeURIComponent(paramKey) === key) {
                // Found the parameter, update its value
                return `${encodeURIComponent(key)}=${encodeURIComponent(
                    value
                )}`;
            } else {
                // Keep the parameter as it is
                return param;
            }
        });

        // Join the updated parameters
        const updatedUrl = `${urlParts[0]}?${updatedParams.join("&")}`;

        // Update the current URL
        window.history.replaceState({ path: updatedUrl }, "", updatedUrl);
    } else {
        // URL does not have any query parameters, simply add the new one
        addQueryParamToCurrentURL(key, value);
    }

    const urlParams = new URLSearchParams(window.location.search);
    const layout = urlParams.get("layout") ? urlParams.get("layout") : "dubai";
    setLayout(layout);
}

// Function to add a query parameter if it doesn't exist
function addQueryParamToCurrentURL(key, value) {
    let currentUrl = window.location.href;
    const separator = currentUrl.includes("?") ? "&" : "?";
    const updatedUrl = `${currentUrl}${separator}${encodeURIComponent(
        key
    )}=${encodeURIComponent(value)}`;
    window.history.replaceState({ path: updatedUrl }, "", updatedUrl);
}

// function setLayout(layout) {
//     $(document).ready(function () {
//         var boxed = "";
//         if ($(".page-wrapper").hasClass("box-layout")) {
//             boxed = "box-layout";
//         }
//         switch (layout) {
//             case "compact-sidebar": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper" + boxed
//                 );
//                 $(this).addClass("active");
//                 localStorage.setItem("page-wrapper-cuba", "compact-wrapper");

//                 break;
//             }
//             case "normal-sidebar": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper horizontal-wrapper " + boxed
//                 );
//                 $(".logo-wrapper")
//                     .find("img")
//                     .attr("src", "../assets/images/logo/logo.png");
//                 localStorage.setItem("page-wrapper-cuba", "horizontal-wrapper");
//                 break;
//             }
//             case "london": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper  only-body" + boxed
//                 );
//                 localStorage.setItem("page-wrapper-cuba", "only-body");
//                 break;
//             }
//             case "paris": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper dark-sidebar" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-wrapper dark-sidebar"
//                 );
//                 break;
//             }
//             case "tokyo": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-sidebar" + boxed
//                 );
//                 localStorage.setItem("page-wrapper-cuba", "compact-sidebar");
//                 break;
//             }
//             case "madrid": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper color-sidebar" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-wrapper color-sidebar"
//                 );
//                 break;
//             }
//             case "moscow": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-sidebar compact-small" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-sidebar compact-small"
//                 );
//                 break;
//             }
//             case "new_york": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper box-layout " + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-wrapper box-layout"
//                 );
//                 break;
//             }
//             case "singapore": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper horizontal-wrapper enterprice-type" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "horizontal-wrapper enterprice-type"
//                 );
//                 break;
//             }
//             case "seoul": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper modern-type" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-wrapper modern-type"
//                 );
//                 break;
//             }
//             case "los_angeles": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper horizontal-wrapper material-type" + boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "horizontal-wrapper material-type"
//                 );

//                 break;
//             }
//             case "rome": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-sidebar compact-small material-icon" +
//                         boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "compact-sidebar compact-small material-icon"
//                 );

//                 break;
//             }
//             case "barcelona": {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper horizontal-wrapper enterprice-type advance-layout" +
//                         boxed
//                 );
//                 localStorage.setItem(
//                     "page-wrapper-cuba",
//                     "horizontal-wrapper enterprice-type advance-layout"
//                 );

//                 break;
//             }
//             default: {
//                 $(".page-wrapper").attr(
//                     "class",
//                     "page-wrapper compact-wrapper " + boxed
//                 );
//                 localStorage.setItem("page-wrapper-cuba", "compact-wrapper");
//                 break;
//             }
//         }
//     });
// }

// Auto layout
function applyTheme(theme) {
    if (theme == "light-only") {
        document.body.classList.add(theme, "auto-only");
        document.body.classList.remove("dark-only");
        document.body.classList.remove("light");
        document.body.classList.remove("dark-sidebar");
    } else if (theme == "dark-only") {
        document.body.classList.add(theme, "auto-only");
        document.body.classList.remove("light-only");
        document.body.classList.remove("light");
        document.body.classList.remove("dark-sidebar");
    } else if (theme == "auto-only") {
        // Check user's color scheme preference
        const prefersDarkScheme = window.matchMedia(
            "(prefers-color-scheme: dark)"
        ).matches;

        // Apply the corresponding theme
        if (prefersDarkScheme) {
            document.body.classList.add("dark-only", "auto-only");
            document.body.classList.remove("light-only");
            document.body.classList.remove("light");
            document.body.classList.remove("dark-sidebar");
        } else {
            document.body.classList.add("light-only", "auto-only");
            document.body.classList.remove("dark-only");
            document.body.classList.remove("light");
            document.body.classList.remove("dark-sidebar");
        }
    }
}

// // Check user's color scheme preference
function detectColorScheme() {
    console.log("inside color scheme function");

    // Check for the user's color scheme preference
    const prefersDarkScheme = window.matchMedia(
        "(prefers-color-scheme: dark)"
    ).matches;

    // Apply the corresponding theme
    if (prefersDarkScheme) {
        applyTheme("dark-only");
    } else {
        applyTheme("light-only");
    }
}
// Optional: Add a listener to handle changes in the color scheme preference
window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", (event) => {
        if (document.body.classList.contains("auto-only")) {
            if (event.matches) {
                applyTheme("dark-only");
            } else {
                applyTheme("light-only");
            }
        } else return;
    });
