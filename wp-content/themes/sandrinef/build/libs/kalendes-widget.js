!(function () {
    var e,
        t,
        l = "https://www.kalendes.com";
    function n() {
        (e = window.jQuery.noConflict(!0)), r();
    }
    function r() {
        e(document).ready(function (o) {
            var e;
            kalendes = {
                html: { container: null, iframe: null, button: null, iosHandlerWindow: null },
                initial: { isInitialized: !1, alreadyOpened: !1, hasError: !1, hasClicked: !1 },
                position: { height: "90%", width: "450px", centered: !1 },
                onLoad: null,
                isFullPage: !1,
                isMinimized: !0,
                boutique: null,
            };
            for (var t = document.getElementsByTagName("script"), n = 0; n < t.length; n++) {
                var i,
                    s = t[n].src;
                s && -1 != s.indexOf("widget.js") && ((i = s.split("onload=")) && 1 < i.length && (i = i[1].split("&")), i && 0 < i.length && (e = i[0]));
            }
            e && (kalendes.onLoad = e),
                (kalendes.iosCookieHandler = function () {
                    kalendes.html.iosHandlerWindow = window.open(l + "/widget/ios-cookie-handler.html", "_blank");
                }),
                (kalendes.iosCookieHandlerDone = function () {
                    kalendes.html.iosHandlerWindow && (kalendes.html.iosHandlerWindow.close(), (kalendes.html.iosHandlerWindow = null), r());
                }),
                (kalendes.setHeight = function (e) {
                    o("#kalendes-widget-iframe").css("height", e + "px");
                }),
                (kalendes.setPercentHeight = function (e) {
                    e < 0 || 100 < e || o("#kalendes-widget-iframe").css("height", e + "%");
                }),
                (kalendes.setWidth = function (e) {
                    o("#kalendes-widget-iframe").css("width", e + "px");
                }),
                (kalendes.setPercentWidth = function (e) {
                    e < 0 || 100 < e || o("#kalendes-widget-iframe").css("width", e + "%");
                }),
                (kalendes.setFullScreen = function (e) {
                    (kalendes.isMinimized = !0), e && (kalendes.isMinimized = !1);
                }),
                (kalendes.removePosition = function () {
                    kalendes.html.iframe.removeClass("topRight"),
                        kalendes.html.iframe.removeClass("topLeft"),
                        kalendes.html.iframe.removeClass("bottomRight"),
                        kalendes.html.iframe.removeClass("bottomLeft"),
                        kalendes.html.iframe.removeClass("centered");
                }),
                (kalendes.setTopRightPosition = function () {
                    this.removePosition(), kalendes.html.iframe.addClass("topRight");
                }),
                (kalendes.setTopLeftPosition = function () {
                    this.removePosition(), kalendes.html.iframe.addClass("topLeft");
                }),
                (kalendes.setBottomRightPosition = function () {
                    this.removePosition(), kalendes.html.iframe.addClass("bottomRight");
                }),
                (kalendes.setBottomLeftPosition = function () {
                    this.removePosition(), kalendes.html.iframe.addClass("bottomLeft");
                }),
                (kalendes.setCenteredPosition = function () {
                    this.removePosition(), kalendes.html.iframe.addClass("centered");
                }),
                (kalendes.removeButtomPosition = function () {
                    kalendes.html.button.removeClass("topRight"),
                        kalendes.html.button.removeClass("topLeft"),
                        kalendes.html.button.removeClass("bottomRight"),
                        kalendes.html.button.removeClass("bottomLeft"),
                        kalendes.html.button.removeClass("centered");
                }),
                (kalendes.setButtomPosition = function (e, t, n, i) {
                    this.removeButtomPosition(),
                        null != e && o("#kalendes-widget-button").css("top", e),
                        null != t && o("#kalendes-widget-button").css("bottom", t),
                        null != n && o("#kalendes-widget-button").css("right", n),
                        null != i && o("#kalendes-widget-button").css("left", i);
                }),
                (kalendes.setButtomTopRightPosition = function () {
                    this.removeButtomPosition(), kalendes.html.button.addClass("topRight");
                }),
                (kalendes.setButtomTopLeftPosition = function () {
                    this.removeButtomPosition(), kalendes.html.button.addClass("topLeft");
                }),
                (kalendes.setButtomBottomRightPosition = function () {
                    this.removeButtomPosition(), kalendes.html.button.addClass("bottomRight");
                }),
                (kalendes.setButtomBottomLeftPosition = function () {
                    this.removeButtomPosition(), kalendes.html.button.addClass("bottomLeft");
                }),
                (kalendes.show = function () {
                    kalendes.initial.hasError
                        ? kalendes.iosCookieHandler()
                        : kalendes.initial.isInitialized
                        ? (kalendes.showFrame(), kalendes.hideButton(), kalendes.showBackdrop(), kalendes.initial.alreadyOpened || (kalendes.refreshState(), (kalendes.initial.alreadyOpened = !0)))
                        : (kalendes.initial.hasClicked = !0);
                }),
                (kalendes.hide = function () {
                    kalendes.hideFrame(), kalendes.showButton(), kalendes.hideBackdrop();
                }),
                (kalendes.hideFrame = function () {
                    kalendes.html.iframe.addClass("hidden"), kalendes.enableParentScroll();
                }),
                (kalendes.showFrame = function () {
                    kalendes.html.iframe.removeClass("hidden"), kalendes.removeParentScroll(), kalendes.html.iframe[0].contentWindow.postMessage("WIDGET_OPENED", "*");
                }),
                (kalendes.hideBackdrop = function () {
                    kalendes.html.backdrop.addClass("hidden"), kalendes.stopBackdropScrolling(!1);
                }),
                (kalendes.showBackdrop = function () {
                    kalendes.html.backdrop.removeClass("hidden"), kalendes.stopBackdropScrolling(!0);
                });
            function a(e) {
                e.preventDefault();
            }
            (kalendes.stopBackdropScrolling = function (e) {
                !0 === e ? (kalendes.html.backdrop.on("wheel", a, !1), kalendes.html.backdrop.on("touchmove", a, !1)) : (kalendes.html.backdrop.off("wheel", a, !1), kalendes.html.backdrop.off("touchmove", a, !1));
            }),
                (kalendes.hideButton = function () {
                    kalendes.html.button.addClass("hidden");
                }),
                (kalendes.showButton = function () {
                    kalendes.boutique.parameters.espaceClient.widget.button.display && kalendes.html.button.removeClass("hidden");
                }),
                (kalendes.setInitialized = function () {
                    (kalendes.initial.isInitialized = !0), kalendes.initial.hasClicked ? kalendes.show() : kalendes.hide();
                }),
                (kalendes.minimize = function () {
                    (kalendes.isMinimized = !0), kalendes.html.iframe.removeClass("maximize"), kalendes.enableParentScroll();
                }),
                (kalendes.maximize = function () {
                    (kalendes.isMinimized = !1), kalendes.html.iframe.addClass("maximize"), kalendes.removeParentScroll();
                }),
                (kalendes.removeParentScroll = function () {
                    o("html").addClass("no-scroll");
                }),
                (kalendes.enableParentScroll = function () {
                    o("html").removeClass("no-scroll");
                }),
                (kalendes.retrieveArticleList = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.retrieveArticleList(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.retrieveFamilleList = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.retrieveFamilleList(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.refreshState = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.refreshState(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goHome = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goHome(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goGiftCard = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goGiftCard(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goAccount = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goAccount(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goArticles = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goArticles(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goServices = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goServices(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goProduits = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goProduits(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.goPromotions = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.goPromotions(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.openBasket = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.openBasket(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.selectFamille = function (n) {
                    return new Promise(function (t, e) {
                        kalendes.communicator.selectFamille(n, function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.selectArticle = function (n) {
                    return new Promise(function (t, e) {
                        kalendes.communicator.selectArticle(n, function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.addArticle = function (n, i) {
                    return new Promise(function (t, e) {
                        kalendes.communicator.addArticle(n, i, function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.removeArticle = function (n) {
                    return new Promise(function (t, e) {
                        kalendes.communicator.removeArticle(n, function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.updateQuantity = function (n, i) {
                    return new Promise(function (t, e) {
                        kalendes.communicator.updateQuantity(n, i, function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.getBasketDetails = function () {
                    return new Promise(function (t, e) {
                        kalendes.communicator.getBasketDetails(function (e) {
                            t(e);
                        });
                    });
                }),
                (kalendes.subscribeBasketChange = function (e) {
                    kalendes.communicator.subscribeBasketChange(e);
                }),
                (kalendes.communicator = new c()),
                kalendes.communicator.initialize(),
                (kalendes.initWidget = function (e) {
                    if (!e) return (kalendes.initial.hasError = !0), kalendes.html.button.addClass("bottomRight"), kalendes.html.button.addClass("indigo"), void kalendes.html.button.removeClass("hidden");
                    var t = kalendes.boutique.parameters.espaceClient.widget.button.position,
                        n = kalendes.boutique.parameters.espaceClient.widget.button.color;
                    n && kalendes.html.button.addClass(n),
                        "TOP_RIGHT" == t
                            ? (kalendes.html.button.addClass("topRight"), kalendes.html.iframe.addClass("topRight"))
                            : "TOP_LEFT" == t
                            ? (kalendes.html.button.addClass("topLeft"), kalendes.html.iframe.addClass("topLeft"))
                            : "BOTTOM_LEFT" == t
                            ? (kalendes.html.button.addClass("bottomLeft"), kalendes.html.iframe.addClass("bottomLeft"))
                            : (kalendes.html.button.addClass("bottomRight"), kalendes.html.iframe.addClass("bottomRight")),
                        o("html").width() < 600 && (kalendes.maximize(), (kalendes.isFullPage = !0), kalendes.html.iframe[0].contentWindow.postMessage("WIDGET_FULL_PAGE", "*")),
                        kalendes.setInitialized(),
                        kalendes.onLoad && kalendes.onLoad in window && window[kalendes.onLoad]();
                }),
                o("#kalendes-widget-iframe").remove(),
                o("#kalendes-widget-button").remove(),
                o("#kalendes-widget-backdrop").remove();
            var d = "<iframe id='kalendes-widget-iframe' class='hidden' src='https://www.kalendes.com/visit/#/booking?host=" + kalendes_host + "&widget=true' ></iframe>";
            (d += "<div id='kalendes-widget-button' class='hidden' onclick='kalendes.show()'><img src='" + l + "/visit/assets/images/widget/shopping_cart.png'></div>"),
                (d += "<div id='kalendes-widget-backdrop' class='hidden' onclick='kalendes.hide()'></div>"),
                o("#kalendes-widget-container").html(d),
                o("<link>", { rel: "stylesheet", type: "text/css", href: l + "/widget/widget.css" }).appendTo("head"),
                (kalendes.html.container = o("#kalendes-widget-container")),
                (kalendes.html.iframe = o("#kalendes-widget-iframe")),
                (kalendes.html.button = o("#kalendes-widget-button")),
                (kalendes.html.backdrop = o("#kalendes-widget-backdrop"));
        });
    }
    function c() {
        this.callbacks = {};
    }
    void 0 === window.jQuery || "3.1.0" !== window.jQuery.fn.jquery
        ? ((t = document.createElement("script")).setAttribute("type", "text/javascript"),
          t.setAttribute("src", "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"),
          t.readyState
              ? (t.onreadystatechange = function () {
                    ("complete" != this.readyState && "loaded" != this.readyState) || n();
                })
              : (t.onload = n),
          (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(t))
        : ((e = window.jQuery), r()),
        (c.prototype.initialize = function () {
            var t = this;
            window.addEventListener(
                "message",
                function (e) {
                    return t.router(e.data.id, e.data.code, e.data.data);
                },
                !1
            );
        }),
        (c.prototype.generateId = function (e) {
            return (e = e || 40), (Math.random() * Math.pow(10, e)).toString(36).substr(2, e);
        }),
        (c.prototype.addCallback = function (e, t) {
            e && t && (this.callbacks[e] = t);
        }),
        (c.prototype.send = function (e, t, n) {
            console.log("WIDGET SENT", e, t, n), kalendes.html.iframe[0].contentWindow.postMessage({ id: e, code: t, data: n }, "*");
        }),
        (c.prototype.router = function (e, t, n) {
            console.log("WIDGET RECEIVED", e, t, n),
                "INIT" == t && (console.log(n.boutique), this.receivedInit(!0, n.boutique)),
                "INIT_FAILURE" == t && this.receivedInit(!1),
                "IS_FULL_PAGE" == t && this.receivedIsFullPage(e),
                "IS_MINIMIZED" == t && this.receivedIsMinimized(e),
                "IOS_COOKIE_HANDLER_DONE" == t && kalendes.iosCookieHandlerDone(),
                "HIDE" == t && this.receivedHide(),
                "MINIMIZE" == t && this.receivedMinimize(),
                "MAXIMIZE" == t && this.receivedMaximize(),
                e && e in this.callbacks && this.callbacks[e](n);
        }),
        (c.prototype.receivedInit = function (e, t) {
            (kalendes.boutique = t), kalendes.initWidget(e);
        }),
        (c.prototype.receivedIsFullPage = function (e) {
            this.send(e, "IS_FULL_PAGE", kalendes.isFullPage);
        }),
        (c.prototype.receivedIsMinimized = function (e) {
            this.send(e, "IS_MINIMIZED", kalendes.isMinimized);
        }),
        (c.prototype.receivedHide = function () {
            kalendes.hide();
        }),
        (c.prototype.receivedMinimize = function () {
            kalendes.minimize(), kalendes.communicator.sendMinimize();
        }),
        (c.prototype.receivedMaximize = function () {
            kalendes.maximize(), kalendes.communicator.sendMaximize();
        }),
        (c.prototype.retrieveArticleList = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "RETRIEVE_ARTICLE_LIST");
        }),
        (c.prototype.retrieveFamilleList = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "RETRIEVE_FAMILLE_LIST");
        }),
        (c.prototype.refreshState = function (e) {
            var t = this.generateId();
            e && this.addCallback(t, e), this.send(t, "REFRESH_STATE");
        }),
        (c.prototype.goHome = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_HOME");
        }),
        (c.prototype.goGiftCard = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_GIFT_CARD");
        }),
        (c.prototype.goAccount = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_ACCOUNT");
        }),
        (c.prototype.goArticles = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_ARTICLES");
        }),
        (c.prototype.goServices = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_SERVICES");
        }),
        (c.prototype.goProduits = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_PRODUITS");
        }),
        (c.prototype.goPromotions = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "GO_PROMOTIONS");
        }),
        (c.prototype.openBasket = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "OPEN_BASKET");
        }),
        (c.prototype.selectFamille = function (e, t) {
            var n = this.generateId();
            this.addCallback(n, t), this.send(n, "SELECT_FAMILLE", { _id: e });
        }),
        (c.prototype.selectArticle = function (e, t) {
            var n = this.generateId();
            this.addCallback(n, t), this.send(n, "SELECT_ARTICLE", { _id: e });
        }),
        (c.prototype.addArticle = function (e, t, n) {
            var i = this.generateId();
            this.addCallback(i, n), this.send(i, "ADD_ARTICLE", { _id: e, quantite: t });
        }),
        (c.prototype.removeArticle = function (e, t) {
            var n = this.generateId();
            this.addCallback(n, t), this.send(n, "REMOVE_ARTICLE", { _id: e });
        }),
        (c.prototype.updateQuantity = function (e, t, n) {
            var i = this.generateId();
            this.addCallback(i, n), this.send(i, "UPDATE_QUANTITY", { _id: e, quantite: t });
        }),
        (c.prototype.getBasketDetails = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "BASKET_DETAILS");
        }),
        (c.prototype.subscribeBasketChange = function (e) {
            var t = this.generateId();
            this.addCallback(t, e), this.send(t, "BASKET_SUBSCRIBE");
        }),
        (c.prototype.sendMaximize = function () {
            this.send(null, "MAXIMIZE");
        }),
        (c.prototype.sendMinimize = function () {
            this.send(null, "MINIMIZE");
        });
})();
