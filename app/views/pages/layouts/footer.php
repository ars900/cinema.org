
		<script src = "<?=URLROOT.'public/admin/main/factory/script/bootstrap.min.js' ?>"></script>
		<script src = "<?=URLROOT.'public/admin/main/factory/script/jquery.js' ?>"></script>
		<script src = "<?=URLROOT.'public/user/main/script/user_home.js' ?>"></script>

        <script src="https://checkout.stripe.com/checkout.js"></script>
        <script>
            delete window.self;
        </script>
        <script>
            ! function(e, i, s) {
                if ("undefined" != typeof module && module.exports) module.exports = s();
                else if ("function" == typeof define && define.amd) define(i, s);
                else e[i] = s()
            }(this, "bowser", function() {
                var e = true;

                function i(i) {
                    function s(e) {
                        var s = i.match(e);
                        return s && s.length > 1 && s[1] || ""
                    }

                    function o(e) {
                        var s = i.match(e);
                        return s && s.length > 1 && s[2] || ""
                    }
                    var r = s(/(ipod|iphone|ipad)/i).toLowerCase(),
                        n = /like android/i.test(i),
                        t = !n && /android/i.test(i),
                        a = /nexus\s*[0-6]\s*/i.test(i),
                        d = !a && /nexus\s*[0-9]+/i.test(i),
                        l = /CrOS/.test(i),
                        f = /silk/i.test(i),
                        m = /sailfish/i.test(i),
                        v = /tizen/i.test(i),
                        p = /(web|hpw)os/i.test(i),
                        c = /windows phone/i.test(i),
                        u = /SamsungBrowser/i.test(i),
                        h = !c && /windows/i.test(i),
                        w = !r && !f && /macintosh/i.test(i),
                        b = !t && !m && !v && !p && /linux/i.test(i),
                        g = o(/edg([ea]|ios)\/(\d+(\.\d+)?)/i),
                        k = s(/version\/(\d+(\.\d+)?)/i),
                        x = /tablet/i.test(i) && !/tablet pc/i.test(i),
                        y = !x && /[^-]mobi/i.test(i),
                        S = /xbox/i.test(i),
                        B;
                    if (/opera/i.test(i)) B = {
                        name: "Opera",
                        opera: e,
                        version: k || s(/(?:opera|opr|opios)[\s\/](\d+(\.\d+)?)/i)
                    };
                    else if (/opr\/|opios/i.test(i)) B = {
                        name: "Opera",
                        opera: e,
                        version: s(/(?:opr|opios)[\s\/](\d+(\.\d+)?)/i) || k
                    };
                    else if (/SamsungBrowser/i.test(i)) B = {
                        name: "Samsung Internet for Android",
                        samsungBrowser: e,
                        version: k || s(/(?:SamsungBrowser)[\s\/](\d+(\.\d+)?)/i)
                    };
                    else if (/coast/i.test(i)) B = {
                        name: "Opera Coast",
                        coast: e,
                        version: k || s(/(?:coast)[\s\/](\d+(\.\d+)?)/i)
                    };
                    else if (/yabrowser/i.test(i)) B = {
                        name: "Yandex Browser",
                        yandexbrowser: e,
                        version: k || s(/(?:yabrowser)[\s\/](\d+(\.\d+)?)/i)
                    };
                    else if (/ucbrowser/i.test(i)) B = {
                        name: "UC Browser",
                        ucbrowser: e,
                        version: s(/(?:ucbrowser)[\s\/](\d+(?:\.\d+)+)/i)
                    };
                    else if (/mxios/i.test(i)) B = {
                        name: "Maxthon",
                        maxthon: e,
                        version: s(/(?:mxios)[\s\/](\d+(?:\.\d+)+)/i)
                    };
                    else if (/epiphany/i.test(i)) B = {
                        name: "Epiphany",
                        epiphany: e,
                        version: s(/(?:epiphany)[\s\/](\d+(?:\.\d+)+)/i)
                    };
                    else if (/puffin/i.test(i)) B = {
                        name: "Puffin",
                        puffin: e,
                        version: s(/(?:puffin)[\s\/](\d+(?:\.\d+)?)/i)
                    };
                    else if (/sleipnir/i.test(i)) B = {
                        name: "Sleipnir",
                        sleipnir: e,
                        version: s(/(?:sleipnir)[\s\/](\d+(?:\.\d+)+)/i)
                    };
                    else if (/k-meleon/i.test(i)) B = {
                        name: "K-Meleon",
                        kMeleon: e,
                        version: s(/(?:k-meleon)[\s\/](\d+(?:\.\d+)+)/i)
                    };
                    else if (c) {
                        B = {
                            name: "Windows Phone",
                            osname: "Windows Phone",
                            windowsphone: e
                        };
                        if (g) {
                            B.msedge = e;
                            B.version = g
                        } else {
                            B.msie = e;
                            B.version = s(/iemobile\/(\d+(\.\d+)?)/i)
                        }
                    } else if (/msie|trident/i.test(i)) B = {
                        name: "Internet Explorer",
                        msie: e,
                        version: s(/(?:msie |rv:)(\d+(\.\d+)?)/i)
                    };
                    else if (l) B = {
                        name: "Chrome",
                        osname: "Chrome OS",
                        chromeos: e,
                        chromeBook: e,
                        chrome: e,
                        version: s(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)
                    };
                    else if (/edg([ea]|ios)/i.test(i)) B = {
                        name: "Microsoft Edge",
                        msedge: e,
                        version: g
                    };
                    else if (/vivaldi/i.test(i)) B = {
                        name: "Vivaldi",
                        vivaldi: e,
                        version: s(/vivaldi\/(\d+(\.\d+)?)/i) || k
                    };
                    else if (m) B = {
                        name: "Sailfish",
                        osname: "Sailfish OS",
                        sailfish: e,
                        version: s(/sailfish\s?browser\/(\d+(\.\d+)?)/i)
                    };
                    else if (/seamonkey\//i.test(i)) B = {
                        name: "SeaMonkey",
                        seamonkey: e,
                        version: s(/seamonkey\/(\d+(\.\d+)?)/i)
                    };
                    else if (/firefox|iceweasel|fxios/i.test(i)) {
                        B = {
                            name: "Firefox",
                            firefox: e,
                            version: s(/(?:firefox|iceweasel|fxios)[ \/](\d+(\.\d+)?)/i)
                        };
                        if (/\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(i)) {
                            B.firefoxos = e;
                            B.osname = "Firefox OS"
                        }
                    } else if (f) B = {
                        name: "Amazon Silk",
                        silk: e,
                        version: s(/silk\/(\d+(\.\d+)?)/i)
                    };
                    else if (/phantom/i.test(i)) B = {
                        name: "PhantomJS",
                        phantom: e,
                        version: s(/phantomjs\/(\d+(\.\d+)?)/i)
                    };
                    else if (/slimerjs/i.test(i)) B = {
                        name: "SlimerJS",
                        slimer: e,
                        version: s(/slimerjs\/(\d+(\.\d+)?)/i)
                    };
                    else if (/blackberry|\bbb\d+/i.test(i) || /rim\stablet/i.test(i)) B = {
                        name: "BlackBerry",
                        osname: "BlackBerry OS",
                        blackberry: e,
                        version: k || s(/blackberry[\d]+\/(\d+(\.\d+)?)/i)
                    };
                    else if (p) {
                        B = {
                            name: "WebOS",
                            osname: "WebOS",
                            webos: e,
                            version: k || s(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i)
                        };
                        /touchpad\//i.test(i) && (B.touchpad = e)
                    } else if (/bada/i.test(i)) B = {
                        name: "Bada",
                        osname: "Bada",
                        bada: e,
                        version: s(/dolfin\/(\d+(\.\d+)?)/i)
                    };
                    else if (v) B = {
                        name: "Tizen",
                        osname: "Tizen",
                        tizen: e,
                        version: s(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i) || k
                    };
                    else if (/qupzilla/i.test(i)) B = {
                        name: "QupZilla",
                        qupzilla: e,
                        version: s(/(?:qupzilla)[\s\/](\d+(?:\.\d+)+)/i) || k
                    };
                    else if (/chromium/i.test(i)) B = {
                        name: "Chromium",
                        chromium: e,
                        version: s(/(?:chromium)[\s\/](\d+(?:\.\d+)?)/i) || k
                    };
                    else if (/chrome|crios|crmo/i.test(i)) B = {
                        name: "Chrome",
                        chrome: e,
                        version: s(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)
                    };
                    else if (t) B = {
                        name: "Android",
                        version: k
                    };
                    else if (/safari|applewebkit/i.test(i)) {
                        B = {
                            name: "Safari",
                            safari: e
                        };
                        if (k) B.version = k
                    } else if (r) {
                        B = {
                            name: "iphone" == r ? "iPhone" : "ipad" == r ? "iPad" : "iPod"
                        };
                        if (k) B.version = k
                    } else if (/googlebot/i.test(i)) B = {
                        name: "Googlebot",
                        googlebot: e,
                        version: s(/googlebot\/(\d+(\.\d+))/i) || k
                    };
                    else B = {
                            name: s(/^(.*)\/(.*) /),
                            version: o(/^(.*)\/(.*) /)
                        };
                    if (!B.msedge && /(apple)?webkit/i.test(i)) {
                        if (/(apple)?webkit\/537\.36/i.test(i)) {
                            B.name = B.name || "Blink";
                            B.blink = e
                        } else {
                            B.name = B.name || "Webkit";
                            B.webkit = e
                        }
                        if (!B.version && k) B.version = k
                    } else if (!B.opera && /gecko\//i.test(i)) {
                        B.name = B.name || "Gecko";
                        B.gecko = e;
                        B.version = B.version || s(/gecko\/(\d+(\.\d+)?)/i)
                    }
                    if (!B.windowsphone && (t || B.silk)) {
                        B.android = e;
                        B.osname = "Android"
                    } else if (!B.windowsphone && r) {
                        B[r] = e;
                        B.ios = e;
                        B.osname = "iOS"
                    } else if (w) {
                        B.mac = e;
                        B.osname = "macOS"
                    } else if (S) {
                        B.xbox = e;
                        B.osname = "Xbox"
                    } else if (h) {
                        B.windows = e;
                        B.osname = "Windows"
                    } else if (b) {
                        B.linux = e;
                        B.osname = "Linux"
                    }

                    function O(e) {
                        switch (e) {
                            case "NT":
                                return "NT";
                            case "XP":
                                return "XP";
                            case "NT 5.0":
                                return "2000";
                            case "NT 5.1":
                                return "XP";
                            case "NT 5.2":
                                return "2003";
                            case "NT 6.0":
                                return "Vista";
                            case "NT 6.1":
                                return "7";
                            case "NT 6.2":
                                return "8";
                            case "NT 6.3":
                                return "8.1";
                            case "NT 10.0":
                                return "10";
                            default:
                                return undefined
                        }
                    }
                    var T = "";
                    if (B.windows) T = O(s(/Windows ((NT|XP)( \d\d?.\d)?)/i));
                    else if (B.windowsphone) T = s(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i);
                    else if (B.mac) {
                        T = s(/Mac OS X (\d+([_\.\s]\d+)*)/i);
                        T = T.replace(/[_\s]/g, ".")
                    } else if (r) {
                        T = s(/os (\d+([_\s]\d+)*) like mac os x/i);
                        T = T.replace(/[_\s]/g, ".")
                    } else if (t) T = s(/android[ \/-](\d+(\.\d+)*)/i);
                    else if (B.webos) T = s(/(?:web|hpw)os\/(\d+(\.\d+)*)/i);
                    else if (B.blackberry) T = s(/rim\stablet\sos\s(\d+(\.\d+)*)/i);
                    else if (B.bada) T = s(/bada\/(\d+(\.\d+)*)/i);
                    else if (B.tizen) T = s(/tizen[\/\s](\d+(\.\d+)*)/i);
                    if (T) B.osversion = T;
                    var P = !B.windows && T.split(".")[0];
                    if (x || d || "ipad" == r || t && (3 == P || P >= 4 && !y) || B.silk) B.tablet = e;
                    else if (y || "iphone" == r || "ipod" == r || t || a || B.blackberry || B.webos || B.bada) B.mobile = e;
                    if (B.msedge || B.msie && B.version >= 10 || B.yandexbrowser && B.version >= 15 || B.vivaldi && B.version >= 1 || B.chrome && B.version >= 20 || B.samsungBrowser && B.version >= 4 || B.firefox && B.version >= 20 || B.safari && B.version >=
                        6 || B.opera && B.version >= 10 || B.ios && B.osversion && B.osversion.split(".")[0] >= 6 || B.blackberry && B.version >= 10.1 || B.chromium && B.version >= 20) B.a = e;
                    else if (B.msie && B.version < 10 || B.chrome && B.version < 20 || B.firefox && B.version < 20 || B.safari && B.version < 6 || B.opera && B.version < 10 || B.ios && B.osversion && B.osversion.split(".")[0] < 6 || B.chromium && B.version <
                        20) B.c = e;
                    else B.x = e;
                    return B
                }
                var s = i("undefined" !== typeof navigator ? navigator.userAgent || "" : "");
                s.test = function(e) {
                    for (var i = 0; i < e.length; ++i) {
                        var o = e[i];
                        if ("string" === typeof o)
                            if (o in s) return true
                    }
                    return false
                };

                function o(e) {
                    return e.split(".").length
                }

                function r(e, i) {
                    var s = [],
                        o;
                    if (Array.prototype.map) return Array.prototype.map.call(e, i);
                    for (o = 0; o < e.length; o++) s.push(i(e[o]));
                    return s
                }

                function n(e) {
                    var i = Math.max(o(e[0]), o(e[1]));
                    var s = r(e, function(e) {
                        var s = i - o(e);
                        e += new Array(s + 1).join(".0");
                        return r(e.split("."), function(e) {
                            return new Array(20 - e.length).join("0") + e
                        }).reverse()
                    });
                    while (--i >= 0)
                        if (s[0][i] > s[1][i]) return 1;
                        else if (s[0][i] === s[1][i]) {
                            if (0 === i) return 0
                        } else return -1
                }

                function t(e, o, r) {
                    var t = s;
                    if ("string" === typeof o) {
                        r = o;
                        o = void 0
                    }
                    if (void 0 === o) o = false;
                    if (r) t = i(r);
                    var a = "" + t.version;
                    for (var d in e)
                        if (e.hasOwnProperty(d))
                            if (t[d]) {
                                if ("string" !== typeof e[d]) throw new Error("Browser version in the minVersion map should be a string: " + d + ": " + String(e));
                                return n([a, e[d]]) < 0
                            } return o
                }

                function a(e, i, s) {
                    return !t(e, i, s)
                }
                s.isUnsupportedBrowser = t;
                s.compareVersions = n;
                s.check = a;
                s._detect = i;
                s.detect = i;
                return s
            });
        </script>
        <script src = "<?=URLROOT.'public/user/factory/dist/scripts/js/production.min.9f797690.js' ?>"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>

            // --------subscribe form------

            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }

            $("#subscribe").click(async function(){

                var subscriber = $("#subscriber").val();

                if( !validateEmail(subscriber) || subscriber == '') {

                    $("#success").text("");
                    $("#error").text("Please enter a valid email address.");

                }else{

                    $("#error").text("");
                    $("#subscriber").val('');

                    var result = await Cloud.addsubscriber.with({
                        email: subscriber
                    });

                    if(result.status == 'success'){

                        $("#success").text("You have been successfully added to our mailing list.");

                    }else if(result.status == 'allreadyInDB'){

                        $("#success").text("You're already in our mailing list.");

                    }

                }

            })

            // --------subscribe form------

        </script>
        <script>
            (function() {
                if (typeof bowser !== 'undefined') {
                    // --------------------------------------------------------------------
                    // Additional compatibility tips:
                    //
                    // ??? The browser/OS compatibility below is determined by the needs of Vue.js and Bootstrap.js.
                    // ??? All browsers on Windows XP are probably unsupported (because of compatibility issues with modern SSL certs)
                    // ??? See https://getbootstrap.com/docs/4.0/getting-started/browsers-devices/
                    // ??? See also https://github.com/vuejs/vue/tree/0e5306658ad7b83c553a6a3eeedb15f9066ab063#browser-compatibility
                    // ??? For more info, see:
                    //    - https://github.com/lancedikson/bowser/blob/1fb99ced0e8834fd9662604bad7e0f0c3eba2786/test/test.js#L110-L123
                    //    - https://github.com/lancedikson/bowser/tree/1fb99ced0e8834fd9662604bad7e0f0c3eba2786#rendering-engine-flags
                    // --------------------------------------------------------------------
                    var LATEST_SUPPORTED_VERSION_BY_OS = {
                        iOS: '10', //?? earliest version to eliminate rare bug where `window.location` doesn't exist momentarily after doing a server-side redirect
                        Android: '6'
                    };
                    var LATEST_SUPPORTED_VERSION_BY_USER_AGENT = {
                        msedge: '16',
                        msie: '10',
                        safari: '10', //?? earliest version to eliminate rare bug where `window.location` doesn't exist momentarily after doing a server-side redirect
                        firefox: '28', //?? earliest version to support both ES5 (for Vue.js) and unprefixed flexbox (for Bootstrap 4)
                        chrome: '29', //?? earliest version to support both ES5 (for Vue.js) and unprefixed flexbox (for Bootstrap 4)
                        opera: '17', //?? earliest version to support both ES5 (for Vue.js) and unprefixed flexbox (for Bootstrap 4)
                    };
                    var LATEST_SUPPORTED_VERSION_BY_BROWSER_NAME = {
                        'microsoft edge': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.msedge,
                        'internet explorer': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.msie,
                        'safari': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.safari,
                        'firefox': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.firefox,
                        'chrome': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.chrome,
                        'opera': LATEST_SUPPORTED_VERSION_BY_USER_AGENT.opera
                    };
                    var isUnsupportedBrowser = (
                        bowser.isUnsupportedBrowser(LATEST_SUPPORTED_VERSION_BY_USER_AGENT, window.navigator.userAgent)
                    );
                    var isUnsupportedOS = (
                        LATEST_SUPPORTED_VERSION_BY_OS[bowser.osname] &&
                        bowser.compareVersions([bowser.osversion, LATEST_SUPPORTED_VERSION_BY_OS[bowser.osname]]) < 0
                    );
                    if (isUnsupportedBrowser || isUnsupportedOS) {
                        document.body.innerHTML =
                            '<div class="container browser-warning-message text-center error-page">' +
                            '  <a href="https://sailsjs.com/support">' +
                            '<img style="display: block; height: 75px; width: auto; margin: 0 auto 15px;" alt="Logo" src="/img/Og-image-Logo.png"/>' +
                            '</a>' +
                            '  <h5 class="card-title">This ' + (isUnsupportedBrowser ? 'browser' : 'operating system') + ' is not supported.</h5>' +
                            '  <p style="max-width: 500px; margin-left: auto; margin-right: auto;">' +
                            '    This app does not currently support ' + (
                                isUnsupportedBrowser ?
                                    '<strong>' + bowser.name + '</strong> for versions lower than <strong>v' + LATEST_SUPPORTED_VERSION_BY_BROWSER_NAME[bowser.name.toLowerCase()] + '</strong>. ' +
                                    'To continue, please upgrade your browser to the newest version, or download the <a href="https://www.google.com/chrome">latest version of Google Chrome</a>.' +
                                    '  </p>' +
                                    '<h6>OR</h6>'+
                                    '<p>Try our mobile apps to make bookings.</p>'+
                                    '<div class="text-center" style="display: inline-flex;"><a href="https://play.google.com/store/apps/details?id=cinema.com.scope&hl=en" class="pr-1">  <img src="/img/google_play.png" class="img-fluid main-logo " alt="Scope Cinemas" width="100px"></a> <a href="https://apps.apple.com/us/app/id1236478837">  <img src="/img/apple-store.png" class="img-fluid main-logo " alt="Scope Cinemas" width="100px"></a></div>'  :

                                    '<strong>' + bowser.osname + '</strong> for versions lower than <strong>v' + LATEST_SUPPORTED_VERSION_BY_OS[bowser.osname] + '</strong>. ' +
                                    'To continue, please use a different device, or <a href="' + (bowser.osname === 'iOS' ? 'https://support.apple.com/en-us/HT204204' : 'https://support.google.com/android/?hl=en#topic=7313011') +
                                    '">upgrade this device\'s software</a> to the latest compatible version.' +
                                    '  </p>' +
                                    '<h6>OR</h6>'+
                                    '<p>Try our mobile apps to make bookings.</p>'+
                                    '<div class="text-center" style="display: inline-flex;"><a href="https://play.google.com/store/apps/details?id=cinema.com.scope&hl=en" class="pr-1">  <img src="/img/google_play.png" class="img-fluid main-logo " alt="Scope Cinemas" width="100px"></a> <a href="https://apps.apple.com/us/app/id1236478837">  <img src="/img/apple-store.png" class="img-fluid main-logo " alt="Scope Cinemas" width="100px"></a></div>'
                            ) +
                            '</div>';
                        document.body.style.padding = '75px 0';
                    }
                }
            })(); //???
        </script>

		<?php
			$errors = new ErrorController; 
			$errors -> clean_errors();
		?>
</body>
</html>