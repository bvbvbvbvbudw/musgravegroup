/**handles:search-filter-plugin-build,search-filter-plugin-chosen,ajax-script,wpstg-global,wpstg-admin-all-pages-script**/
!function t(e, a, r) {
    function n(s, o) {
        if (!a[s]) {
            if (!e[s]) {
                var l = "function" == typeof require && require;
                if (!o && l) return l(s, !0);
                if (i) return i(s, !0);
                var u = new Error("Cannot find module '" + s + "'");
                throw u.code = "MODULE_NOT_FOUND", u
            }
            var c = a[s] = {exports: {}};
            e[s][0].call(c.exports, function (t) {
                var a = e[s][1][t];
                return n(a ? a : t)
            }, c, c.exports, t, e, a, r)
        }
        return a[s].exports
    }

    for (var i = "function" == typeof require && require, s = 0; s < r.length; s++) n(r[s]);
    return n
}({
    1: [function (t, e, a) {
        (function (a) {
            var r = t("./includes/state"), n = t("./includes/plugin");
            !function (t) {
                "use strict";
                t(function () {
                    String.prototype.replaceAll = function (t, e, a) {
                        return this.replace(new RegExp(t.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g, "\\$&"), a ? "gi" : "g"), "string" == typeof e ? e.replace(/\$/g, "$$$$") : e)
                    }, Object.keys || (Object.keys = function () {
                        var t = Object.prototype.hasOwnProperty, e = !{toString: null}.propertyIsEnumerable("toString"),
                            a = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"],
                            r = a.length;
                        return function (n) {
                            if ("object" != typeof n && ("function" != typeof n || null === n)) throw new TypeError("Object.keys called on non-object");
                            var i, s, o = [];
                            for (i in n) t.call(n, i) && o.push(i);
                            if (e) for (s = 0; s < r; s++) t.call(n, a[s]) && o.push(a[s]);
                            return o
                        }
                    }()), t.fn.searchAndFilter = n, t(".searchandfilter123").searchAndFilter(), t(document).on("click", ".search-filter-reset", function (e) {
                        e.preventDefault();
                        var a = "undefined" != typeof t(this).attr("data-search-form-id") ? t(this).attr("data-search-form-id") : "",
                            n = "undefined" != typeof t(this).attr("data-sf-submit-form") ? t(this).attr("data-sf-submit-form") : "";
                        return r.getSearchForm(a).reset(n), !1
                    })
                }), function (t) {
                    "function" == typeof define && define.amd ? define(["jquery"], function (e) {
                        return t(e)
                    }) : "object" == typeof e && "object" == typeof e.exports ? e.exports = t("undefined" != typeof window ? window.jQuery : "undefined" != typeof a ? a.jQuery : null) : t(jQuery)
                }(function (t) {
                    function e(t) {
                        var e = 7.5625, a = 2.75;
                        return t < 1 / a ? e * t * t : t < 2 / a ? e * (t -= 1.5 / a) * t + .75 : t < 2.5 / a ? e * (t -= 2.25 / a) * t + .9375 : e * (t -= 2.625 / a) * t + .984375
                    }

                    "undefined" != typeof t.easing && (t.easing.jswing = t.easing.swing);
                    var a = Math.pow, r = Math.sqrt, n = Math.sin, i = Math.cos, s = Math.PI, o = 1.70158,
                        l = 1.525 * o, u = o + 1, c = 2 * s / 3, f = 2 * s / 4.5;
                    return t.extend(t.easing, {
                        def: "easeOutQuad", swing: function (e) {
                            return t.easing[t.easing.def](e)
                        }, easeInQuad: function (t) {
                            return t * t
                        }, easeOutQuad: function (t) {
                            return 1 - (1 - t) * (1 - t)
                        }, easeInOutQuad: function (t) {
                            return t < .5 ? 2 * t * t : 1 - a(-2 * t + 2, 2) / 2
                        }, easeInCubic: function (t) {
                            return t * t * t
                        }, easeOutCubic: function (t) {
                            return 1 - a(1 - t, 3)
                        }, easeInOutCubic: function (t) {
                            return t < .5 ? 4 * t * t * t : 1 - a(-2 * t + 2, 3) / 2
                        }, easeInQuart: function (t) {
                            return t * t * t * t
                        }, easeOutQuart: function (t) {
                            return 1 - a(1 - t, 4)
                        }, easeInOutQuart: function (t) {
                            return t < .5 ? 8 * t * t * t * t : 1 - a(-2 * t + 2, 4) / 2
                        }, easeInQuint: function (t) {
                            return t * t * t * t * t
                        }, easeOutQuint: function (t) {
                            return 1 - a(1 - t, 5)
                        }, easeInOutQuint: function (t) {
                            return t < .5 ? 16 * t * t * t * t * t : 1 - a(-2 * t + 2, 5) / 2
                        }, easeInSine: function (t) {
                            return 1 - i(t * s / 2)
                        }, easeOutSine: function (t) {
                            return n(t * s / 2)
                        }, easeInOutSine: function (t) {
                            return -(i(s * t) - 1) / 2
                        }, easeInExpo: function (t) {
                            return 0 === t ? 0 : a(2, 10 * t - 10)
                        }, easeOutExpo: function (t) {
                            return 1 === t ? 1 : 1 - a(2, -10 * t)
                        }, easeInOutExpo: function (t) {
                            return 0 === t ? 0 : 1 === t ? 1 : t < .5 ? a(2, 20 * t - 10) / 2 : (2 - a(2, -20 * t + 10)) / 2
                        }, easeInCirc: function (t) {
                            return 1 - r(1 - a(t, 2))
                        }, easeOutCirc: function (t) {
                            return r(1 - a(t - 1, 2))
                        }, easeInOutCirc: function (t) {
                            return t < .5 ? (1 - r(1 - a(2 * t, 2))) / 2 : (r(1 - a(-2 * t + 2, 2)) + 1) / 2
                        }, easeInElastic: function (t) {
                            return 0 === t ? 0 : 1 === t ? 1 : -a(2, 10 * t - 10) * n((10 * t - 10.75) * c)
                        }, easeOutElastic: function (t) {
                            return 0 === t ? 0 : 1 === t ? 1 : a(2, -10 * t) * n((10 * t - .75) * c) + 1
                        }, easeInOutElastic: function (t) {
                            return 0 === t ? 0 : 1 === t ? 1 : t < .5 ? -(a(2, 20 * t - 10) * n((20 * t - 11.125) * f)) / 2 : a(2, -20 * t + 10) * n((20 * t - 11.125) * f) / 2 + 1
                        }, easeInBack: function (t) {
                            return u * t * t * t - o * t * t
                        }, easeOutBack: function (t) {
                            return 1 + u * a(t - 1, 3) + o * a(t - 1, 2)
                        }, easeInOutBack: function (t) {
                            return t < .5 ? a(2 * t, 2) * (2 * (l + 1) * t - l) / 2 : (a(2 * t - 2, 2) * ((l + 1) * (2 * t - 2) + l) + 2) / 2
                        }, easeInBounce: function (t) {
                            return 1 - e(1 - t)
                        }, easeOutBounce: e, easeInOutBounce: function (t) {
                            return t < .5 ? (1 - e(1 - 2 * t)) / 2 : (1 + e(2 * t - 1)) / 2
                        }
                    }), t
                })
            }(jQuery), jQuery(window).on("pageshow", function (t) {
                t.originalEvent.persisted && (jQuery(".searchandfilter123").off(), jQuery(".searchandfilter123").searchAndFilter())
            }), !function () {
                "use strict";

                function t(t) {
                    return t.split("").reverse().join("")
                }

                function e(t, e) {
                    return t.substring(0, e.length) === e
                }

                function a(t, e) {
                    return t.slice(-1 * e.length) === e
                }

                function r(t, e, a) {
                    if ((t[e] || t[a]) && t[e] === t[a]) throw new Error(e)
                }

                function n(t) {
                    return "number" == typeof t && isFinite(t)
                }

                function i(t, e) {
                    var a = Math.pow(10, e);
                    return (Math.round(t * a) / a).toFixed(e)
                }

                function s(e, a, r, s, o, l, u, c, f, d, p, h) {
                    var m, _, g, v = h, x = "", y = "";
                    return l && (h = l(h)), !!n(h) && (e !== !1 && 0 === parseFloat(h.toFixed(e)) && (h = 0), 0 > h && (m = !0, h = Math.abs(h)), e !== !1 && (h = i(h, e)), h = h.toString(), -1 !== h.indexOf(".") ? (_ = h.split("."), g = _[0], r && (x = r + _[1])) : g = h, a && (g = t(g).match(/.{1,3}/g), g = t(g.join(t(a)))), m && c && (y += c), s && (y += s), m && f && (y += f), y += g, y += x, o && (y += o), d && (y = d(y, v)), y)
                }

                function o(t, r, i, s, o, l, u, c, f, d, p, h) {
                    var m, _ = "";
                    return p && (h = p(h)), !(!h || "string" != typeof h) && (c && e(h, c) && (h = h.replace(c, ""), m = !0), s && e(h, s) && (h = h.replace(s, "")), f && e(h, f) && (h = h.replace(f, ""), m = !0), o && a(h, o) && (h = h.slice(0, -1 * o.length)), r && (h = h.split(r).join("")), i && (h = h.replace(i, ".")), m && (_ += "-"), _ += h, _ = _.replace(/[^0-9\.\-.]/g, ""), "" !== _ && (_ = Number(_), u && (_ = u(_)), !!n(_) && _))
                }

                function l(t) {
                    var e, a, n, i = {};
                    for (e = 0; e < f.length; e += 1) if (a = f[e], n = t[a], void 0 === n) "negative" !== a || i.negativeBefore ? "mark" === a && "." !== i.thousand ? i[a] = "." : i[a] = !1 : i[a] = "-"; else if ("decimals" === a) {
                        if (!(n >= 0 && 8 > n)) throw new Error(a);
                        i[a] = n
                    } else if ("encoder" === a || "decoder" === a || "edit" === a || "undo" === a) {
                        if ("function" != typeof n) throw new Error(a);
                        i[a] = n
                    } else {
                        if ("string" != typeof n) throw new Error(a);
                        i[a] = n
                    }
                    return r(i, "mark", "thousand"), r(i, "prefix", "negative"), r(i, "prefix", "negativeBefore"), i
                }

                function u(t, e, a) {
                    var r, n = [];
                    for (r = 0; r < f.length; r += 1) n.push(t[f[r]]);
                    return n.push(a), e.apply("", n)
                }

                function c(t) {
                    return this instanceof c ? void ("object" == typeof t && (t = l(t), this.to = function (e) {
                        return u(t, s, e)
                    }, this.from = function (e) {
                        return u(t, o, e)
                    })) : new c(t)
                }

                var f = ["decimals", "thousand", "mark", "prefix", "postfix", "encoder", "decoder", "negativeBefore", "negative", "edit", "undo"];
                window.wNumb = c
            }()
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {"./includes/plugin": 3, "./includes/state": 5}], 2: [function (t, e, a) {
        !function (t) {
            "function" == typeof define && define.amd ? define([], t) : "object" == typeof a ? e.exports = t() : window.noUiSlider = t()
        }(function () {
            "use strict";

            function t(t) {
                return "object" == typeof t && "function" == typeof t.to && "function" == typeof t.from
            }

            function e(t) {
                t.parentElement.removeChild(t)
            }

            function a(t) {
                return null !== t && void 0 !== t
            }

            function r(t) {
                t.preventDefault()
            }

            function n(t) {
                return t.filter(function (t) {
                    return !this[t] && (this[t] = !0)
                }, {})
            }

            function i(t, e) {
                return Math.round(t / e) * e
            }

            function s(t, e) {
                var a = t.getBoundingClientRect(), r = t.ownerDocument, n = r.documentElement, i = m(r);
                return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (i.x = 0), e ? a.top + i.y - n.clientTop : a.left + i.x - n.clientLeft
            }

            function o(t) {
                return "number" == typeof t && !isNaN(t) && isFinite(t)
            }

            function l(t, e, a) {
                a > 0 && (d(t, e), setTimeout(function () {
                    p(t, e)
                }, a))
            }

            function u(t) {
                return Math.max(Math.min(t, 100), 0)
            }

            function c(t) {
                return Array.isArray(t) ? t : [t]
            }

            function f(t) {
                t = String(t);
                var e = t.split(".");
                return e.length > 1 ? e[1].length : 0
            }

            function d(t, e) {
                t.classList ? t.classList.add(e) : t.className += " " + e
            }

            function p(t, e) {
                t.classList ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\b)" + e.split(" ").join("|") + "(\\b|$)", "gi"), " ")
            }

            function h(t, e) {
                return t.classList ? t.classList.contains(e) : new RegExp("\\b" + e + "\\b").test(t.className)
            }

            function m(t) {
                var e = void 0 !== window.pageXOffset, a = "CSS1Compat" === (t.compatMode || ""),
                    r = e ? window.pageXOffset : a ? t.documentElement.scrollLeft : t.body.scrollLeft,
                    n = e ? window.pageYOffset : a ? t.documentElement.scrollTop : t.body.scrollTop;
                return {x: r, y: n}
            }

            function _() {
                return window.navigator.pointerEnabled ? {
                    start: "pointerdown",
                    move: "pointermove",
                    end: "pointerup"
                } : window.navigator.msPointerEnabled ? {
                    start: "MSPointerDown",
                    move: "MSPointerMove",
                    end: "MSPointerUp"
                } : {start: "mousedown touchstart", move: "mousemove touchmove", end: "mouseup touchend"}
            }

            function g() {
                var t = !1;
                try {
                    var e = Object.defineProperty({}, "passive", {
                        get: function () {
                            t = !0
                        }
                    });
                    window.addEventListener("test", null, e)
                } catch (a) {
                }
                return t
            }

            function v() {
                return window.CSS && CSS.supports && CSS.supports("touch-action", "none")
            }

            function x(t, e) {
                return 100 / (e - t)
            }

            function y(t, e) {
                return 100 * e / (t[1] - t[0])
            }

            function b(t, e) {
                return y(t, t[0] < 0 ? e + Math.abs(t[0]) : e - t[0])
            }

            function j(t, e) {
                return e * (t[1] - t[0]) / 100 + t[0]
            }

            function w(t, e) {
                for (var a = 1; t >= e[a];) a += 1;
                return a
            }

            function S(t, e, a) {
                if (a >= t.slice(-1)[0]) return 100;
                var r = w(a, t), n = t[r - 1], i = t[r], s = e[r - 1], o = e[r];
                return s + b([n, i], a) / x(s, o)
            }

            function U(t, e, a) {
                if (a >= 100) return t.slice(-1)[0];
                var r = w(a, e), n = t[r - 1], i = t[r], s = e[r - 1], o = e[r];
                return j([n, i], (a - s) * x(s, o))
            }

            function C(t, e, a, r) {
                if (100 === r) return r;
                var n = w(r, t), s = t[n - 1], o = t[n];
                return a ? r - s > (o - s) / 2 ? o : s : e[n - 1] ? t[n - 1] + i(r - t[n - 1], e[n - 1]) : r
            }

            function E(t, e, a) {
                var r;
                if ("number" == typeof e && (e = [e]), !Array.isArray(e)) throw new Error("noUiSlider (" + K + "): 'range' contains invalid value.");
                if (r = "min" === t ? 0 : "max" === t ? 100 : parseFloat(t), !o(r) || !o(e[0])) throw new Error("noUiSlider (" + K + "): 'range' value isn't numeric.");
                a.xPct.push(r), a.xVal.push(e[0]), r ? a.xSteps.push(!isNaN(e[1]) && e[1]) : isNaN(e[1]) || (a.xSteps[0] = e[1]), a.xHighestCompleteStep.push(0)
            }

            function A(t, e, a) {
                if (!e) return !0;
                a.xSteps[t] = y([a.xVal[t], a.xVal[t + 1]], e) / x(a.xPct[t], a.xPct[t + 1]);
                var r = (a.xVal[t + 1] - a.xVal[t]) / a.xNumSteps[t], n = Math.ceil(Number(r.toFixed(3)) - 1),
                    i = a.xVal[t] + a.xNumSteps[t] * n;
                a.xHighestCompleteStep[t] = i
            }

            function P(t, e, a) {
                this.xPct = [], this.xVal = [], this.xSteps = [a || !1], this.xNumSteps = [!1], this.xHighestCompleteStep = [], this.snap = e;
                var r, n = [];
                for (r in t) t.hasOwnProperty(r) && n.push([t[r], r]);
                for (n.length && "object" == typeof n[0][0] ? n.sort(function (t, e) {
                    return t[0][0] - e[0][0]
                }) : n.sort(function (t, e) {
                    return t[0] - e[0]
                }), r = 0; r < n.length; r++) E(n[r][1], n[r][0], this);
                for (this.xNumSteps = this.xSteps.slice(0), r = 0; r < this.xNumSteps.length; r++) A(r, this.xNumSteps[r], this)
            }

            function k(e) {
                if (t(e)) return !0;
                throw new Error("noUiSlider (" + K + "): 'format' requires 'to' and 'from' methods.")
            }

            function F(t, e) {
                if (!o(e)) throw new Error("noUiSlider (" + K + "): 'step' is not numeric.");
                t.singleStep = e
            }

            function O(t, e) {
                if ("object" != typeof e || Array.isArray(e)) throw new Error("noUiSlider (" + K + "): 'range' is not an object.");
                if (void 0 === e.min || void 0 === e.max) throw new Error("noUiSlider (" + K + "): Missing 'min' or 'max' in 'range'.");
                if (e.min === e.max) throw new Error("noUiSlider (" + K + "): 'range' 'min' and 'max' cannot be equal.");
                t.spectrum = new P(e, t.snap, t.singleStep)
            }

            function R(t, e) {
                if (e = c(e), !Array.isArray(e) || !e.length) throw new Error("noUiSlider (" + K + "): 'start' option is incorrect.");
                t.handles = e.length, t.start = e
            }

            function N(t, e) {
                if (t.snap = e, "boolean" != typeof e) throw new Error("noUiSlider (" + K + "): 'snap' option must be a boolean.")
            }

            function M(t, e) {
                if (t.animate = e, "boolean" != typeof e) throw new Error("noUiSlider (" + K + "): 'animate' option must be a boolean.")
            }

            function T(t, e) {
                if (t.animationDuration = e, "number" != typeof e) throw new Error("noUiSlider (" + K + "): 'animationDuration' option must be a number.")
            }

            function V(t, e) {
                var a, r = [!1];
                if ("lower" === e ? e = [!0, !1] : "upper" === e && (e = [!1, !0]), e === !0 || e === !1) {
                    for (a = 1; a < t.handles; a++) r.push(e);
                    r.push(!1)
                } else {
                    if (!Array.isArray(e) || !e.length || e.length !== t.handles + 1) throw new Error("noUiSlider (" + K + "): 'connect' option doesn't match handle count.");
                    r = e
                }
                t.connect = r
            }

            function I(t, e) {
                switch (e) {
                    case"horizontal":
                        t.ort = 0;
                        break;
                    case"vertical":
                        t.ort = 1;
                        break;
                    default:
                        throw new Error("noUiSlider (" + K + "): 'orientation' option is invalid.")
                }
            }

            function $(t, e) {
                if (!o(e)) throw new Error("noUiSlider (" + K + "): 'margin' option must be numeric.");
                if (0 !== e && (t.margin = t.spectrum.getMargin(e), !t.margin)) throw new Error("noUiSlider (" + K + "): 'margin' option is only supported on linear sliders.")
            }

            function L(t, e) {
                if (!o(e)) throw new Error("noUiSlider (" + K + "): 'limit' option must be numeric.");
                if (t.limit = t.spectrum.getMargin(e), !t.limit || t.handles < 2) throw new Error("noUiSlider (" + K + "): 'limit' option is only supported on linear sliders with 2 or more handles.")
            }

            function Q(t, e) {
                if (!o(e) && !Array.isArray(e)) throw new Error("noUiSlider (" + K + "): 'padding' option must be numeric or array of exactly 2 numbers.");
                if (Array.isArray(e) && 2 !== e.length && !o(e[0]) && !o(e[1])) throw new Error("noUiSlider (" + K + "): 'padding' option must be numeric or array of exactly 2 numbers.");
                if (0 !== e) {
                    if (Array.isArray(e) || (e = [e, e]), t.padding = [t.spectrum.getMargin(e[0]), t.spectrum.getMargin(e[1])], t.padding[0] === !1 || t.padding[1] === !1) throw new Error("noUiSlider (" + K + "): 'padding' option is only supported on linear sliders.");
                    if (t.padding[0] < 0 || t.padding[1] < 0) throw new Error("noUiSlider (" + K + "): 'padding' option must be a positive number(s).");
                    if (t.padding[0] + t.padding[1] >= 100) throw new Error("noUiSlider (" + K + "): 'padding' option must not exceed 100% of the range.")
                }
            }

            function q(t, e) {
                switch (e) {
                    case"ltr":
                        t.dir = 0;
                        break;
                    case"rtl":
                        t.dir = 1;
                        break;
                    default:
                        throw new Error("noUiSlider (" + K + "): 'direction' option was not recognized.")
                }
            }

            function D(t, e) {
                if ("string" != typeof e) throw new Error("noUiSlider (" + K + "): 'behaviour' must be a string containing options.");
                var a = e.indexOf("tap") >= 0, r = e.indexOf("drag") >= 0, n = e.indexOf("fixed") >= 0,
                    i = e.indexOf("snap") >= 0, s = e.indexOf("hover") >= 0;
                if (n) {
                    if (2 !== t.handles) throw new Error("noUiSlider (" + K + "): 'fixed' behaviour must be used with 2 handles");
                    $(t, t.start[1] - t.start[0])
                }
                t.events = {tap: a || i, drag: r, fixed: n, snap: i, hover: s}
            }

            function H(t, e) {
                if (e !== !1) if (e === !0) {
                    t.tooltips = [];
                    for (var a = 0; a < t.handles; a++) t.tooltips.push(!0)
                } else {
                    if (t.tooltips = c(e), t.tooltips.length !== t.handles) throw new Error("noUiSlider (" + K + "): must pass a formatter for all handles.");
                    t.tooltips.forEach(function (t) {
                        if ("boolean" != typeof t && ("object" != typeof t || "function" != typeof t.to)) throw new Error("noUiSlider (" + K + "): 'tooltips' must be passed a formatter or 'false'.")
                    })
                }
            }

            function z(t, e) {
                t.ariaFormat = e, k(e)
            }

            function B(t, e) {
                t.format = e, k(e)
            }

            function W(t, e) {
                if ("string" != typeof e && e !== !1) throw new Error("noUiSlider (" + K + "): 'cssPrefix' must be a string or `false`.");
                t.cssPrefix = e
            }

            function X(t, e) {
                if ("object" != typeof e) throw new Error("noUiSlider (" + K + "): 'cssClasses' must be an object.");
                if ("string" == typeof t.cssPrefix) {
                    t.cssClasses = {};
                    for (var a in e) e.hasOwnProperty(a) && (t.cssClasses[a] = t.cssPrefix + e[a])
                } else t.cssClasses = e
            }

            function Y(t) {
                var e = {
                    margin: 0,
                    limit: 0,
                    padding: 0,
                    animate: !0,
                    animationDuration: 300,
                    ariaFormat: Z,
                    format: Z
                }, r = {
                    step: {r: !1, t: F},
                    start: {r: !0, t: R},
                    connect: {r: !0, t: V},
                    direction: {r: !0, t: q},
                    snap: {r: !1, t: N},
                    animate: {r: !1, t: M},
                    animationDuration: {r: !1, t: T},
                    range: {r: !0, t: O},
                    orientation: {r: !1, t: I},
                    margin: {r: !1, t: $},
                    limit: {r: !1, t: L},
                    padding: {r: !1, t: Q},
                    behaviour: {r: !0, t: D},
                    ariaFormat: {r: !1, t: z},
                    format: {r: !1, t: B},
                    tooltips: {r: !1, t: H},
                    cssPrefix: {r: !0, t: W},
                    cssClasses: {r: !0, t: X}
                }, n = {
                    connect: !1,
                    direction: "ltr",
                    behaviour: "tap",
                    orientation: "horizontal",
                    cssPrefix: "noUi-",
                    cssClasses: {
                        target: "target",
                        base: "base",
                        origin: "origin",
                        handle: "handle",
                        handleLower: "handle-lower",
                        handleUpper: "handle-upper",
                        horizontal: "horizontal",
                        vertical: "vertical",
                        background: "background",
                        connect: "connect",
                        connects: "connects",
                        ltr: "ltr",
                        rtl: "rtl",
                        draggable: "draggable",
                        drag: "state-drag",
                        tap: "state-tap",
                        active: "active",
                        tooltip: "tooltip",
                        pips: "pips",
                        pipsHorizontal: "pips-horizontal",
                        pipsVertical: "pips-vertical",
                        marker: "marker",
                        markerHorizontal: "marker-horizontal",
                        markerVertical: "marker-vertical",
                        markerNormal: "marker-normal",
                        markerLarge: "marker-large",
                        markerSub: "marker-sub",
                        value: "value",
                        valueHorizontal: "value-horizontal",
                        valueVertical: "value-vertical",
                        valueNormal: "value-normal",
                        valueLarge: "value-large",
                        valueSub: "value-sub"
                    }
                };
                t.format && !t.ariaFormat && (t.ariaFormat = t.format), Object.keys(r).forEach(function (i) {
                    if (!a(t[i]) && void 0 === n[i]) {
                        if (r[i].r) throw new Error("noUiSlider (" + K + "): '" + i + "' is required.");
                        return !0
                    }
                    r[i].t(e, a(t[i]) ? t[i] : n[i])
                }), e.pips = t.pips;
                var i = document.createElement("div"), s = void 0 !== i.style.msTransform,
                    o = void 0 !== i.style.transform;
                e.transformRule = o ? "transform" : s ? "msTransform" : "webkitTransform";
                var l = [["left", "top"], ["right", "bottom"]];
                return e.style = l[e.dir][e.ort], e
            }

            function J(t, a, i) {
                function o(t, e) {
                    var a = St.createElement("div");
                    return e && d(a, e), t.appendChild(a), a
                }

                function f(t, e) {
                    var r = o(t, a.cssClasses.origin), n = o(r, a.cssClasses.handle);
                    return n.setAttribute("data-handle", e), n.setAttribute("tabindex", "0"), n.setAttribute("role", "slider"), n.setAttribute("aria-orientation", a.ort ? "vertical" : "horizontal"), 0 === e ? d(n, a.cssClasses.handleLower) : e === a.handles - 1 && d(n, a.cssClasses.handleUpper), r
                }

                function x(t, e) {
                    return !!e && o(t, a.cssClasses.connect)
                }

                function y(t, e) {
                    var r = o(e, a.cssClasses.connects);
                    ct = [], ft = [], ft.push(x(r, t[0]));
                    for (var n = 0; n < a.handles; n++) ct.push(f(e, n)), xt[n] = n, ft.push(x(r, t[n + 1]))
                }

                function b(t) {
                    d(t, a.cssClasses.target), 0 === a.dir ? d(t, a.cssClasses.ltr) : d(t, a.cssClasses.rtl), 0 === a.ort ? d(t, a.cssClasses.horizontal) : d(t, a.cssClasses.vertical), ut = o(t, a.cssClasses.base)
                }

                function j(t, e) {
                    return !!a.tooltips[e] && o(t.firstChild, a.cssClasses.tooltip)
                }

                function w() {
                    var t = ct.map(j);
                    q("update", function (e, r, n) {
                        if (t[r]) {
                            var i = e[r];
                            a.tooltips[r] !== !0 && (i = a.tooltips[r].to(n[r])), t[r].innerHTML = i
                        }
                    })
                }

                function S() {
                    q("update", function (t, e, r, n, i) {
                        xt.forEach(function (t) {
                            var e = ct[t], n = B(vt, t, 0, !0, !0, !0), s = B(vt, t, 100, !0, !0, !0), o = i[t],
                                l = a.ariaFormat.to(r[t]);
                            e.children[0].setAttribute("aria-valuemin", n.toFixed(1)), e.children[0].setAttribute("aria-valuemax", s.toFixed(1)), e.children[0].setAttribute("aria-valuenow", o.toFixed(1)), e.children[0].setAttribute("aria-valuetext", l)
                        })
                    })
                }

                function U(t, e, a) {
                    if ("range" === t || "steps" === t) return bt.xVal;
                    if ("count" === t) {
                        if (e < 2) throw new Error("noUiSlider (" + K + "): 'values' (>= 2) required for mode 'count'.");
                        var r = e - 1, n = 100 / r;
                        for (e = []; r--;) e[r] = r * n;
                        e.push(100), t = "positions"
                    }
                    return "positions" === t ? e.map(function (t) {
                        return bt.fromStepping(a ? bt.getStep(t) : t)
                    }) : "values" === t ? a ? e.map(function (t) {
                        return bt.fromStepping(bt.getStep(bt.toStepping(t)))
                    }) : e : void 0
                }

                function C(t, e, a) {
                    function r(t, e) {
                        return (t + e).toFixed(7) / 1
                    }

                    var i = {}, s = bt.xVal[0], o = bt.xVal[bt.xVal.length - 1], l = !1, u = !1, c = 0;
                    return a = n(a.slice().sort(function (t, e) {
                        return t - e
                    })), a[0] !== s && (a.unshift(s), l = !0), a[a.length - 1] !== o && (a.push(o), u = !0), a.forEach(function (n, s) {
                        var o, f, d, p, h, m, _, g, v, x, y = n, b = a[s + 1];
                        if ("steps" === e && (o = bt.xNumSteps[s]), o || (o = b - y), y !== !1 && void 0 !== b) for (o = Math.max(o, 1e-7), f = y; f <= b; f = r(f, o)) {
                            for (p = bt.toStepping(f), h = p - c, g = h / t, v = Math.round(g), x = h / v, d = 1; d <= v; d += 1) m = c + d * x, i[m.toFixed(5)] = ["x", 0];
                            _ = a.indexOf(f) > -1 ? 1 : "steps" === e ? 2 : 0, !s && l && (_ = 0), f === b && u || (i[p.toFixed(5)] = [f, _]), c = p
                        }
                    }), i
                }

                function E(t, e, r) {
                    function n(t, e) {
                        var r = e === a.cssClasses.value, n = r ? c : f, i = r ? l : u;
                        return e + " " + n[a.ort] + " " + i[t]
                    }

                    function i(t, i) {
                        i[1] = i[1] && e ? e(i[0], i[1]) : i[1];
                        var l = o(s, !1);
                        l.className = n(i[1], a.cssClasses.marker), l.style[a.style] = t + "%", i[1] && (l = o(s, !1), l.className = n(i[1], a.cssClasses.value), l.setAttribute("data-value", i[0]), l.style[a.style] = t + "%", l.innerText = r.to(i[0]))
                    }

                    var s = St.createElement("div"),
                        l = [a.cssClasses.valueNormal, a.cssClasses.valueLarge, a.cssClasses.valueSub],
                        u = [a.cssClasses.markerNormal, a.cssClasses.markerLarge, a.cssClasses.markerSub],
                        c = [a.cssClasses.valueHorizontal, a.cssClasses.valueVertical],
                        f = [a.cssClasses.markerHorizontal, a.cssClasses.markerVertical];
                    return d(s, a.cssClasses.pips), d(s, 0 === a.ort ? a.cssClasses.pipsHorizontal : a.cssClasses.pipsVertical), Object.keys(t).forEach(function (e) {
                        i(e, t[e])
                    }), s
                }

                function A() {
                    pt && (e(pt), pt = null)
                }

                function P(t) {
                    A();
                    var e = t.mode, a = t.density || 1, r = t.filter || !1, n = t.values || !1, i = t.stepped || !1,
                        s = U(e, n, i), o = C(a, e, s), l = t.format || {to: Math.round};
                    return pt = gt.appendChild(E(o, r, l))
                }

                function k() {
                    var t = ut.getBoundingClientRect(), e = "offset" + ["Width", "Height"][a.ort];
                    return 0 === a.ort ? t.width || ut[e] : t.height || ut[e]
                }

                function F(t, e, r, n) {
                    var i = function (i) {
                        return !!(i = O(i, n.pageOffset, n.target || e)) && (!(gt.hasAttribute("disabled") && !n.doNotReject) && (!(h(gt, a.cssClasses.tap) && !n.doNotReject) && (!(t === ht.start && void 0 !== i.buttons && i.buttons > 1) && ((!n.hover || !i.buttons) && (_t || i.preventDefault(), i.calcPoint = i.points[a.ort], void r(i, n))))))
                    }, s = [];
                    return t.split(" ").forEach(function (t) {
                        e.addEventListener(t, i, !!_t && {passive: !0}), s.push([t, i])
                    }), s
                }

                function O(t, e, a) {
                    var r, n, i = 0 === t.type.indexOf("touch"), s = 0 === t.type.indexOf("mouse"),
                        o = 0 === t.type.indexOf("pointer");
                    if (0 === t.type.indexOf("MSPointer") && (o = !0), i) {
                        var l = function (t) {
                            return t.target === a || a.contains(t.target)
                        };
                        if ("touchstart" === t.type) {
                            var u = Array.prototype.filter.call(t.touches, l);
                            if (u.length > 1) return !1;
                            r = u[0].pageX, n = u[0].pageY
                        } else {
                            var c = Array.prototype.find.call(t.changedTouches, l);
                            if (!c) return !1;
                            r = c.pageX, n = c.pageY
                        }
                    }
                    return e = e || m(St), (s || o) && (r = t.clientX + e.x, n = t.clientY + e.y), t.pageOffset = e, t.points = [r, n], t.cursor = s || o, t
                }

                function R(t) {
                    var e = t - s(ut, a.ort), r = 100 * e / k();
                    return r = u(r), a.dir ? 100 - r : r
                }

                function N(t) {
                    var e = 100, a = !1;
                    return ct.forEach(function (r, n) {
                        if (!r.hasAttribute("disabled")) {
                            var i = Math.abs(vt[n] - t);
                            (i < e || 100 === i && 100 === e) && (a = n, e = i)
                        }
                    }), a
                }

                function M(t, e) {
                    "mouseout" === t.type && "HTML" === t.target.nodeName && null === t.relatedTarget && V(t, e)
                }

                function T(t, e) {
                    if (navigator.appVersion.indexOf("MSIE 9") === -1 && 0 === t.buttons && 0 !== e.buttonsProperty) return V(t, e);
                    var r = (a.dir ? -1 : 1) * (t.calcPoint - e.startCalcPoint), n = 100 * r / e.baseSize;
                    X(r > 0, n, e.locations, e.handleNumbers)
                }

                function V(t, e) {
                    e.handle && (p(e.handle, a.cssClasses.active), yt -= 1), e.listeners.forEach(function (t) {
                        Ut.removeEventListener(t[0], t[1])
                    }), 0 === yt && (p(gt, a.cssClasses.drag), Z(), t.cursor && (Ct.style.cursor = "", Ct.removeEventListener("selectstart", r))), e.handleNumbers.forEach(function (t) {
                        H("change", t), H("set", t), H("end", t)
                    })
                }

                function I(t, e) {
                    var n;
                    if (1 === e.handleNumbers.length) {
                        var i = ct[e.handleNumbers[0]];
                        if (i.hasAttribute("disabled")) return !1;
                        n = i.children[0], yt += 1, d(n, a.cssClasses.active)
                    }
                    t.stopPropagation();
                    var s = [], o = F(ht.move, Ut, T, {
                        target: t.target,
                        handle: n,
                        listeners: s,
                        startCalcPoint: t.calcPoint,
                        baseSize: k(),
                        pageOffset: t.pageOffset,
                        handleNumbers: e.handleNumbers,
                        buttonsProperty: t.buttons,
                        locations: vt.slice()
                    }), l = F(ht.end, Ut, V, {
                        target: t.target,
                        handle: n,
                        listeners: s,
                        doNotReject: !0,
                        handleNumbers: e.handleNumbers
                    }), u = F("mouseout", Ut, M, {
                        target: t.target,
                        handle: n,
                        listeners: s,
                        doNotReject: !0,
                        handleNumbers: e.handleNumbers
                    });
                    s.push.apply(s, o.concat(l, u)), t.cursor && (Ct.style.cursor = getComputedStyle(t.target).cursor, ct.length > 1 && d(gt, a.cssClasses.drag), Ct.addEventListener("selectstart", r, !1)), e.handleNumbers.forEach(function (t) {
                        H("start", t)
                    })
                }

                function $(t) {
                    t.stopPropagation();
                    var e = R(t.calcPoint), r = N(e);
                    return r !== !1 && (a.events.snap || l(gt, a.cssClasses.tap, a.animationDuration), tt(r, e, !0, !0), Z(), H("slide", r, !0), H("update", r, !0), H("change", r, !0), H("set", r, !0), void (a.events.snap && I(t, {handleNumbers: [r]})))
                }

                function L(t) {
                    var e = R(t.calcPoint), a = bt.getStep(e), r = bt.fromStepping(a);
                    Object.keys(wt).forEach(function (t) {
                        "hover" === t.split(".")[0] && wt[t].forEach(function (t) {
                            t.call(dt, r)
                        })
                    })
                }

                function Q(t) {
                    t.fixed || ct.forEach(function (t, e) {
                        F(ht.start, t.children[0], I, {handleNumbers: [e]})
                    }), t.tap && F(ht.start, ut, $, {}), t.hover && F(ht.move, ut, L, {hover: !0}), t.drag && ft.forEach(function (e, r) {
                        if (e !== !1 && 0 !== r && r !== ft.length - 1) {
                            var n = ct[r - 1], i = ct[r], s = [e];
                            d(e, a.cssClasses.draggable), t.fixed && (s.push(n.children[0]), s.push(i.children[0])), s.forEach(function (t) {
                                F(ht.start, t, I, {handles: [n, i], handleNumbers: [r - 1, r]})
                            })
                        }
                    })
                }

                function q(t, e) {
                    wt[t] = wt[t] || [], wt[t].push(e), "update" === t.split(".")[0] && ct.forEach(function (t, e) {
                        H("update", e)
                    })
                }

                function D(t) {
                    var e = t && t.split(".")[0], a = e && t.substring(e.length);
                    Object.keys(wt).forEach(function (t) {
                        var r = t.split(".")[0], n = t.substring(r.length);
                        e && e !== r || a && a !== n || delete wt[t]
                    })
                }

                function H(t, e, r) {
                    Object.keys(wt).forEach(function (n) {
                        var i = n.split(".")[0];
                        t === i && wt[n].forEach(function (t) {
                            t.call(dt, jt.map(a.format.to), e, jt.slice(), r || !1, vt.slice())
                        })
                    })
                }

                function z(t) {
                    return t + "%"
                }

                function B(t, e, r, n, i, s) {
                    return ct.length > 1 && (n && e > 0 && (r = Math.max(r, t[e - 1] + a.margin)), i && e < ct.length - 1 && (r = Math.min(r, t[e + 1] - a.margin))), ct.length > 1 && a.limit && (n && e > 0 && (r = Math.min(r, t[e - 1] + a.limit)), i && e < ct.length - 1 && (r = Math.max(r, t[e + 1] - a.limit))), a.padding && (0 === e && (r = Math.max(r, a.padding[0])), e === ct.length - 1 && (r = Math.min(r, 100 - a.padding[1]))), r = bt.getStep(r), r = u(r), !(r === t[e] && !s) && r
                }

                function W(t, e) {
                    var r = a.ort;
                    return (r ? e : t) + ", " + (r ? t : e)
                }

                function X(t, e, a, r) {
                    var n = a.slice(), i = [!t, t], s = [t, !t];
                    r = r.slice(), t && r.reverse(), r.length > 1 ? r.forEach(function (t, a) {
                        var r = B(n, t, n[t] + e, i[a], s[a], !1);
                        r === !1 ? e = 0 : (e = r - n[t], n[t] = r)
                    }) : i = s = [!0];
                    var o = !1;
                    r.forEach(function (t, r) {
                        o = tt(t, a[t] + e, i[r], s[r]) || o
                    }), o && r.forEach(function (t) {
                        H("update", t), H("slide", t)
                    })
                }

                function J(t, e) {
                    return a.dir ? 100 - t - e : t
                }

                function G(t, e) {
                    vt[t] = e, jt[t] = bt.fromStepping(e);
                    var r = "translate(" + W(z(J(e, 0) - Et), "0") + ")";
                    ct[t].style[a.transformRule] = r, et(t), et(t + 1)
                }

                function Z() {
                    xt.forEach(function (t) {
                        var e = vt[t] > 50 ? -1 : 1, a = 3 + (ct.length + e * t);
                        ct[t].style.zIndex = a
                    })
                }

                function tt(t, e, a, r) {
                    return e = B(vt, t, e, a, r, !1), e !== !1 && (G(t, e), !0)
                }

                function et(t) {
                    if (ft[t]) {
                        var e = 0, r = 100;
                        0 !== t && (e = vt[t - 1]), t !== ft.length - 1 && (r = vt[t]);
                        var n = r - e, i = "translate(" + W(z(J(e, n)), "0") + ")",
                            s = "scale(" + W(n / 100, "1") + ")";
                        ft[t].style[a.transformRule] = i + " " + s
                    }
                }

                function at(t, e) {
                    return null === t || t === !1 || void 0 === t ? vt[e] : ("number" == typeof t && (t = String(t)), t = a.format.from(t), t = bt.toStepping(t), t === !1 || isNaN(t) ? vt[e] : t)
                }

                function rt(t, e) {
                    var r = c(t), n = void 0 === vt[0];
                    e = void 0 === e || !!e, a.animate && !n && l(gt, a.cssClasses.tap, a.animationDuration), xt.forEach(function (t) {
                        tt(t, at(r[t], t), !0, !1)
                    }), xt.forEach(function (t) {
                        tt(t, vt[t], !0, !0)
                    }), Z(), xt.forEach(function (t) {
                        H("update", t), null !== r[t] && e && H("set", t)
                    })
                }

                function nt(t) {
                    rt(a.start, t)
                }

                function it() {
                    var t = jt.map(a.format.to);
                    return 1 === t.length ? t[0] : t
                }

                function st() {
                    for (var t in a.cssClasses) a.cssClasses.hasOwnProperty(t) && p(gt, a.cssClasses[t]);
                    for (; gt.firstChild;) gt.removeChild(gt.firstChild);
                    delete gt.noUiSlider
                }

                function ot() {
                    return vt.map(function (t, e) {
                        var a = bt.getNearbySteps(t), r = jt[e], n = a.thisStep.step, i = null;
                        n !== !1 && r + n > a.stepAfter.startValue && (n = a.stepAfter.startValue - r), i = r > a.thisStep.startValue ? a.thisStep.step : a.stepBefore.step !== !1 && r - a.stepBefore.highestStep, 100 === t ? n = null : 0 === t && (i = null);
                        var s = bt.countStepDecimals();
                        return null !== n && n !== !1 && (n = Number(n.toFixed(s))), null !== i && i !== !1 && (i = Number(i.toFixed(s))), [i, n]
                    })
                }

                function lt(t, e) {
                    var r = it(), n = ["margin", "limit", "padding", "range", "animate", "snap", "step", "format"];
                    n.forEach(function (e) {
                        void 0 !== t[e] && (i[e] = t[e])
                    });
                    var s = Y(i);
                    n.forEach(function (e) {
                        void 0 !== t[e] && (a[e] = s[e])
                    }), bt = s.spectrum, a.margin = s.margin, a.limit = s.limit, a.padding = s.padding, a.pips && P(a.pips), vt = [], rt(t.start || r, e)
                }

                var ut, ct, ft, dt, pt, ht = _(), mt = v(), _t = mt && g(), gt = t, vt = [], xt = [], yt = 0,
                    bt = a.spectrum, jt = [], wt = {}, St = t.ownerDocument, Ut = St.documentElement, Ct = St.body,
                    Et = "rtl" === St.dir || 1 === a.ort ? 0 : 100;
                return b(gt), y(a.connect, ut), Q(a.events), rt(a.start), dt = {
                    destroy: st,
                    steps: ot,
                    on: q,
                    off: D,
                    get: it,
                    set: rt,
                    reset: nt,
                    __moveHandles: function (t, e, a) {
                        X(t, e, vt, a)
                    },
                    options: i,
                    updateOptions: lt,
                    target: gt,
                    removePips: A,
                    pips: P
                }, a.pips && P(a.pips), a.tooltips && w(), S(), dt
            }

            function G(t, e) {
                if (!t || !t.nodeName) throw new Error("noUiSlider (" + K + "): create requires a single element, got: " + t);
                if (t.noUiSlider) throw new Error("noUiSlider (" + K + "): Slider was already initialized.");
                var a = Y(e, t), r = J(t, a, e);
                return t.noUiSlider = r, r
            }

            var K = "11.1.0";
            P.prototype.getMargin = function (t) {
                var e = this.xNumSteps[0];
                if (e && t / e % 1 !== 0) throw new Error("noUiSlider (" + K + "): 'limit', 'margin' and 'padding' must be divisible by step.");
                return 2 === this.xPct.length && y(this.xVal, t)
            }, P.prototype.toStepping = function (t) {
                return t = S(this.xVal, this.xPct, t)
            }, P.prototype.fromStepping = function (t) {
                return U(this.xVal, this.xPct, t)
            }, P.prototype.getStep = function (t) {
                return t = C(this.xPct, this.xSteps, this.snap, t)
            }, P.prototype.getNearbySteps = function (t) {
                var e = w(t, this.xPct);
                return {
                    stepBefore: {
                        startValue: this.xVal[e - 2],
                        step: this.xNumSteps[e - 2],
                        highestStep: this.xHighestCompleteStep[e - 2]
                    },
                    thisStep: {
                        startValue: this.xVal[e - 1],
                        step: this.xNumSteps[e - 1],
                        highestStep: this.xHighestCompleteStep[e - 1]
                    },
                    stepAfter: {
                        startValue: this.xVal[e - 0],
                        step: this.xNumSteps[e - 0],
                        highestStep: this.xHighestCompleteStep[e - 0]
                    }
                }
            }, P.prototype.countStepDecimals = function () {
                var t = this.xNumSteps.map(f);
                return Math.max.apply(null, t)
            }, P.prototype.convert = function (t) {
                return this.getStep(this.toStepping(t))
            };
            var Z = {
                to: function (t) {
                    return void 0 !== t && t.toFixed(2)
                }, from: Number
            };
            return {version: K, create: G}
        })
    }, {}], 3: [function (t, e, a) {
        (function (a) {
            var r = "undefined" != typeof window ? window.jQuery : "undefined" != typeof a ? a.jQuery : null,
                n = t("./state"), i = t("./process_form"), s = t("nouislider"), o = t("./thirdparty");
            window.searchAndFilter = {
                extensions: [], registerExtension: function (t) {
                    this.extensions.push(t)
                }
            }, e.exports = function (t) {
                var e = {startOpened: !1, isInit: !0, action: ""}, a = jQuery.extend(e, t);
                o.init(), this.each(function () {
                    var t = r(this), e = this;
                    this.sfid = t.attr("data-sf-form-id"), n.addSearchForm(this.sfid, this), this.$fields = t.find("> ul > li"), this.enable_taxonomy_archives = t.attr("data-taxonomy-archives"), this.current_taxonomy_archive = t.attr("data-current-taxonomy-archive"), "undefined" == typeof this.enable_taxonomy_archives && (this.enable_taxonomy_archives = "0"), "undefined" == typeof this.current_taxonomy_archive && (this.current_taxonomy_archive = ""), i.init(e.enable_taxonomy_archives, e.current_taxonomy_archive), i.enableInputs(e), "undefined" == typeof this.extra_query_params && (this.extra_query_params = {
                        all: {},
                        results: {},
                        ajax: {}
                    }), this.template_is_loaded = t.attr("data-template-loaded"), this.is_ajax = t.attr("data-ajax"), this.instance_number = t.attr("data-instance-count"), this.$ajax_results_container = jQuery(t.attr("data-ajax-target")), this.ajax_update_sections = t.attr("data-ajax-update-sections") ? JSON.parse(t.attr("data-ajax-update-sections")) : [], this.results_url = t.attr("data-results-url"), this.debug_mode = t.attr("data-debug-mode"), this.update_ajax_url = t.attr("data-update-ajax-url"), this.pagination_type = t.attr("data-ajax-pagination-type"), this.auto_count = t.attr("data-auto-count"), this.auto_count_refresh_mode = t.attr("data-auto-count-refresh-mode"), this.only_results_ajax = t.attr("data-only-results-ajax"), this.scroll_to_pos = t.attr("data-scroll-to-pos"), this.custom_scroll_to = t.attr("data-custom-scroll-to"), this.scroll_on_action = t.attr("data-scroll-on-action"), this.lang_code = t.attr("data-lang-code"), this.ajax_url = t.attr("data-ajax-url"), this.ajax_form_url = t.attr("data-ajax-form-url"), this.is_rtl = t.attr("data-is-rtl"), this.display_result_method = t.attr("data-display-result-method"), this.maintain_state = t.attr("data-maintain-state"), this.ajax_action = "", this.last_submit_query_params = "", this.current_paged = parseInt(t.attr("data-init-paged")), this.last_load_more_html = "", this.load_more_html = "", this.ajax_data_type = t.attr("data-ajax-data-type"), this.ajax_target_attr = t.attr("data-ajax-target"), this.use_history_api = t.attr("data-use-history-api"), this.is_submitting = !1, this.last_ajax_request = null, "undefined" == typeof this.use_history_api && (this.use_history_api = ""), "undefined" == typeof this.pagination_type && (this.pagination_type = "normal"), "undefined" == typeof this.current_paged && (this.current_paged = 1), "undefined" == typeof this.ajax_target_attr && (this.ajax_target_attr = ""), "undefined" == typeof this.ajax_url && (this.ajax_url = ""), "undefined" == typeof this.ajax_form_url && (this.ajax_form_url = ""), "undefined" == typeof this.results_url && (this.results_url = ""), "undefined" == typeof this.scroll_to_pos && (this.scroll_to_pos = ""), "undefined" == typeof this.scroll_on_action && (this.scroll_on_action = ""), "undefined" == typeof this.custom_scroll_to && (this.custom_scroll_to = ""), this.$custom_scroll_to = jQuery(this.custom_scroll_to), "undefined" == typeof this.update_ajax_url && (this.update_ajax_url = ""), "undefined" == typeof this.debug_mode && (this.debug_mode = ""), "undefined" == typeof this.ajax_target_object && (this.ajax_target_object = ""), "undefined" == typeof this.template_is_loaded && (this.template_is_loaded = "0"), "undefined" == typeof this.auto_count_refresh_mode && (this.auto_count_refresh_mode = "0"), this.ajax_links_selector = t.attr("data-ajax-links-selector"), this.auto_update = t.attr("data-auto-update"),
                        this.inputTimer = 0, this.setInfiniteScrollContainer = function () {
                        this.is_max_paged = !1, this.use_scroll_loader = t.attr("data-show-scroll-loader"), this.infinite_scroll_container = t.attr("data-infinite-scroll-container"), this.infinite_scroll_trigger_amount = t.attr("data-infinite-scroll-trigger"), this.infinite_scroll_result_class = t.attr("data-infinite-scroll-result-class"), this.$infinite_scroll_container = this.$ajax_results_container, "undefined" == typeof this.infinite_scroll_container ? this.infinite_scroll_container = "" : this.$infinite_scroll_container = jQuery(t.attr("data-infinite-scroll-container")), "undefined" == typeof this.infinite_scroll_result_class && (this.infinite_scroll_result_class = ""), "undefined" == typeof this.use_scroll_loader && (this.use_scroll_loader = 1)
                    }, this.setInfiniteScrollContainer(), this.reset = function (t) {
                        return this.resetForm(t), !0
                    }, this.inputUpdate = function (t) {
                        if ("undefined" == typeof t) var t = 300;
                        e.resetTimer(t)
                    }, this.scrollToPos = function () {
                        var a = 0, n = !0;
                        1 == e.is_ajax && ("window" == e.scroll_to_pos ? a = 0 : "form" == e.scroll_to_pos ? a = t.offset().top : "results" == e.scroll_to_pos ? e.$ajax_results_container.length > 0 && (a = e.$ajax_results_container.offset().top) : "custom" == e.scroll_to_pos ? e.$custom_scroll_to.length > 0 && (a = e.$custom_scroll_to.offset().top) : n = !1, n && r("html, body").stop().animate({scrollTop: a}, "normal", "easeOutQuad"))
                    }, this.attachActiveClass = function () {
                        t.on("change", 'input[type="radio"], input[type="checkbox"], select', function (t) {
                            var e = r(this), a = e.closest("li[data-sf-field-name]"),
                                n = e.prop("tagName").toLowerCase(), i = e.attr("type"),
                                s = a.prop("tagName").toLowerCase();
                            if ("input" != n || "radio" != i && "checkbox" != i || "li" != s) {
                                if ("select" == n) {
                                    var o = e.children();
                                    o.removeClass("sf-option-active");
                                    var l = e.val(), u = "string" == typeof l || l instanceof String ? [l] : l;
                                    r(u).each(function (t, a) {
                                        e.find("option[value='" + a + "']").addClass("sf-option-active")
                                    })
                                }
                            } else {
                                var o = a.parent().find("li"), c = a.parent().find("input:checked");
                                o.removeClass("sf-option-active"), c.each(function () {
                                    var t = r(this).closest("li");
                                    t.addClass("sf-option-active")
                                })
                            }
                        })
                    }, this.initAutoUpdateEvents = function () {
                        if (1 == e.auto_update || 1 == e.auto_count_refresh_mode) {
                            t.on("change", 'input[type="radio"], input[type="checkbox"], select', function (t) {
                                e.inputUpdate(200)
                            }), t.on("input", 'input[type="number"]', function (t) {
                                e.inputUpdate(800)
                            });
                            var a = t.find('input[type="text"]:not(.sf-datepicker)'), r = a.val();
                            t.on("input", 'input[type="text"]:not(.sf-datepicker)', function () {
                                r != a.val() && e.inputUpdate(1200), r = a.val()
                            }), t.on("keypress", 'input[type="text"]:not(.sf-datepicker)', function (t) {
                                if (13 == t.which) return t.preventDefault(), e.submitForm(), !1
                            })
                        }
                    }, this.clearTimer = function () {
                        clearTimeout(e.inputTimer)
                    }, this.resetTimer = function (t) {
                        clearTimeout(e.inputTimer), e.inputTimer = setTimeout(e.formUpdated, t)
                    }, this.addDatePickers = function () {
                        var a = t.find(".sf-datepicker");
                        a.length > 0 && (a.each(function () {
                            var t = r(this), a = "", n = !1, i = !1, s = t.closest(".sf_date_field");
                            s.length > 0 && (a = s.attr("data-date-format"), 1 == s.attr("data-date-use-year-dropdown") && (n = !0), 1 == s.attr("data-date-use-month-dropdown") && (i = !0));
                            var o = {
                                inline: !0, showOtherMonths: !0, onSelect: function (t, a) {
                                    e.dateSelect(t, a, r(this))
                                }, dateFormat: a, changeMonth: i, changeYear: n
                            };
                            1 == e.is_rtl && (o.direction = "rtl"), t.datepicker(o), "" != e.lang_code ? r.datepicker.setDefaults(r.extend({dateFormat: a}, r.datepicker.regional[e.lang_code])) : r.datepicker.setDefaults(r.extend({dateFormat: a}, r.datepicker.regional.en))
                        }), 0 == r(".ll-skin-melon").length && a.datepicker("widget").wrap('<div class="ll-skin-melon searchandfilter-date-picker"/>'))
                    }, this.dateSelect = function (t, a, n) {
                        var i = r(a.input.get(0)),
                            s = (r(this), i.closest('[data-sf-field-input-type="daterange"], [data-sf-field-input-type="date"]'));
                        s.each(function (t, a) {
                            var n = r(this).find(".sf-datepicker"), i = n.length;
                            if (i > 1) {
                                var s = 0, o = 0;
                                n.each(function () {
                                    "" == r(this).val() && o++, s++
                                }), 0 == o && e.inputUpdate(1)
                            } else e.inputUpdate(1)
                        })
                    }, this.addRangeSliders = function () {
                        var a = t.find(".sf-meta-range-slider");
                        a.length > 0 && (a.each(function () {
                            var t = r(this), a = t.attr("data-min"), n = t.attr("data-max"),
                                i = t.attr("data-start-min"), o = t.attr("data-start-max"),
                                l = t.attr("data-display-values-as"), u = t.attr("data-step"),
                                c = t.find(".sf-range-min"), f = t.find(".sf-range-max"),
                                d = t.attr("data-decimal-places"), p = t.attr("data-thousand-seperator"),
                                h = t.attr("data-decimal-seperator"),
                                m = wNumb({mark: h, decimals: parseFloat(d), thousand: p}),
                                _ = (parseFloat(i), m.to(parseFloat(i))), g = m.to(parseFloat(o));
                            parseFloat(o);
                            "textinput" == l ? (c.val(_), f.val(g)) : "text" == l && (c.html(_), f.html(g));
                            var v = {
                                range: {min: [parseFloat(a)], max: [parseFloat(n)]},
                                start: [_, g],
                                handles: 2,
                                connect: !0,
                                step: parseFloat(u),
                                behaviour: "extend-tap",
                                format: m
                            };
                            1 == e.is_rtl && (v.direction = "rtl");
                            var x = r(this).find(".meta-slider")[0];
                            "undefined" != typeof x.noUiSlider && x.noUiSlider.destroy(), s.create(x, v), c.off(), c.on("change", function () {
                                x.noUiSlider.set([r(this).val(), null])
                            }), f.off(), f.on("change", function () {
                                x.noUiSlider.set([null, r(this).val()])
                            }), x.noUiSlider.off("update"), x.noUiSlider.on("update", function (t, a) {
                                var r = _, n = g, i = t[a];
                                a ? g = i : _ = i, "textinput" == l ? (c.val(_), f.val(g)) : "text" == l && (c.html(_), f.html(g)), 1 != e.auto_update && 1 != e.auto_count_refresh_mode || r == _ && n == g || e.inputUpdate(800)
                            })
                        }), e.clearTimer())
                    }, this.init = function (a) {
                        if ("undefined" == typeof a) var a = !1;
                        this.initAutoUpdateEvents(), this.attachActiveClass(), this.addDatePickers(), this.addRangeSliders();
                        var n = t.find("select[data-combobox='1']");
                        n.length > 0 && n.each(function (t) {
                            var a = r(this), n = a.attr("data-combobox-nrm");
                            if ("undefined" != typeof a.chosen) {
                                var i = {search_contains: !0};
                                "undefined" != typeof n && n && (i.no_results_text = n), 1 == e.is_rtl && a.addClass("chosen-rtl"), a.chosen(i)
                            } else {
                                var s = {};
                                1 == e.is_rtl && (s.dir = "rtl"), "undefined" != typeof n && n && (s.language = {
                                    noResults: function () {
                                        return n
                                    }
                                }), a.select2(s)
                            }
                        }), e.isSubmitting = !1, 1 == e.is_ajax && e.setupAjaxPagination(), t.on("submit", this.submitForm), e.initWooCommerceControls(), 0 == a && (e.last_submit_query_params = e.getUrlParams(!1))
                    }, this.onWindowScroll = function (t) {
                        if (!e.is_loading_more && !e.is_max_paged) {
                            var a = r(window).scrollTop(), n = r(window).scrollTop() + r(window).height(),
                                i = parseInt(e.infinite_scroll_trigger_amount);
                            if (1 == e.$infinite_scroll_container.length) {
                                var s = e.$infinite_scroll_container.offset().top + e.$infinite_scroll_container.height();
                                e.$infinite_scroll_container.offset().top + e.$infinite_scroll_container.height() - a;
                                n > s + i && e.loadMoreResults()
                            }
                        }
                    }, this.stripQueryStringAndHashFromPath = function (t) {
                        return t.split("?")[0].split("#")[0]
                    }, this.gup = function (t, e) {
                        e || (e = location.href), t = t.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                        var a = "[\\?&]" + t + "=([^&#]*)", r = new RegExp(a), n = r.exec(e);
                        return null == n ? null : n[1]
                    }, this.getUrlParams = function (t, a, r) {
                        if ("undefined" == typeof t) var t = !0;
                        if ("undefined" == typeof a) var a = "";
                        var n = "", s = i.getUrlParams(e), o = Object.keys(s).length, l = 0;
                        if ("undefined" != typeof r && s.hasOwnProperty(r) && o--, o > 0) for (var u in s) if (s.hasOwnProperty(u)) {
                            var c = !0;
                            "undefined" != typeof r && u == r && (c = !1), c && (n += u + "=" + s[u], l < o - 1 && (n += "&"), l++)
                        }
                        var f = "", d = n;
                        if (f = e.joinUrlParam(f, d), 1 == t) {
                            var p = e.$ajax_results_container.attr("data-paged");
                            "undefined" == typeof p && (p = 1), p > 1 && (f = e.joinUrlParam(f, "sf_paged=" + p))
                        }
                        return f = e.addQueryParams(f, e.extra_query_params.all)
                    }, this.addQueryParams = function (t, a) {
                        var r = "", n = Object.keys(a).length;
                        if (n > 0) for (var i in a) a.hasOwnProperty(i) && "" != a[i] && (r = i + "=" + a[i], t = e.joinUrlParam(t, r));
                        return t
                    }, this.addUrlParam = function (t, e) {
                        var a = "";
                        return "" != t && (a += t.indexOf("?") != -1 ? "&" : "?"), "" != e ? t + a + e : t
                    }, this.joinUrlParam = function (t, e) {
                        var a = "";
                        return "" != t && (a += "&"), "" != e ? t + a + e : t
                    }, this.setAjaxResultsURLs = function (t) {
                        if ("undefined" == typeof e.ajax_results_conf && (e.ajax_results_conf = new Array), e.ajax_results_conf.processing_url = "", e.ajax_results_conf.results_url = "", e.ajax_results_conf.data_type = "", "shortcode" == e.display_result_method) e.ajax_results_conf.results_url = e.addUrlParam(e.results_url, t), "" != e.lang_code && (t = e.joinUrlParam(t, "lang=" + e.lang_code)), e.ajax_results_conf.processing_url = e.addUrlParam(e.ajax_url, t); else if ("post_type_archive" == e.display_result_method) {
                            i.setTaxArchiveResultsUrl(e, e.results_url);
                            var a = i.getResultsUrl(e, e.results_url);
                            e.ajax_results_conf.results_url = e.addUrlParam(a, t), e.ajax_results_conf.processing_url = e.addUrlParam(a, t)
                        } else if ("custom_woocommerce_store" == e.display_result_method) {
                            i.setTaxArchiveResultsUrl(e, e.results_url);
                            var a = i.getResultsUrl(e, e.results_url);
                            e.ajax_results_conf.results_url = e.addUrlParam(a, t), e.ajax_results_conf.processing_url = e.addUrlParam(a, t)
                        } else e.ajax_results_conf.results_url = e.addUrlParam(e.results_url, t), e.ajax_results_conf.processing_url = e.addUrlParam(e.ajax_url, t);
                        e.ajax_results_conf.processing_url = e.addQueryParams(e.ajax_results_conf.processing_url, e.extra_query_params.ajax), e.ajax_results_conf.data_type = e.ajax_data_type
                    }, this.updateLoaderTag = function (t, a) {
                        var n;
                        n = "" != e.infinite_scroll_result_class ? e.$infinite_scroll_container.find(e.infinite_scroll_result_class).last().parent() : e.$infinite_scroll_container;
                        var a = n.prop("tagName"), i = "div";
                        "ol" != a.toLowerCase() && "ul" != a.toLowerCase() || (i = "li");
                        var s = r("<" + i + " />").html(t.html()), o = t.prop("attributes");
                        return r.each(o, function () {
                            s.attr(this.name, this.value)
                        }), s
                    }, this.loadMoreResults = function () {
                        e.is_loading_more = !0;
                        var t = {sfid: e.sfid, targetSelector: e.ajax_target_attr, type: "load_more", object: e};
                        e.triggerEvent("sf:ajaxstart", t), i.setTaxArchiveResultsUrl(e, e.results_url);
                        var a = e.getUrlParams(!0);
                        e.last_submit_query_params = e.getUrlParams(!1);
                        var n = "", s = "", o = "", l = this.current_paged + 1;
                        if (a = e.joinUrlParam(a, "sf_paged=" + l), e.setAjaxResultsURLs(a), n = e.ajax_results_conf.processing_url, s = e.ajax_results_conf.results_url, o = e.ajax_results_conf.data_type, e.last_ajax_request && e.last_ajax_request.abort(), 1 == e.use_scroll_loader) {
                            var u = r("<div/>", {"class": "search-filter-scroll-loading"});
                            u = e.updateLoaderTag(u), e.infiniteScrollAppend(u)
                        }
                        e.last_ajax_request = r.get(n, function (t, a, r) {
                            e.current_paged++, e.last_ajax_request = null, e.addResults(t, o)
                        }, o).fail(function (t, a, r) {
                            var i = {};
                            i.sfid = e.sfid, i.object = e, i.targetSelector = e.ajax_target_attr, i.ajaxURL = n, i.jqXHR = t, i.textStatus = a, i.errorThrown = r, e.triggerEvent("sf:ajaxerror", i)
                        }).always(function () {
                            var t = {};
                            t.sfid = e.sfid, t.targetSelector = e.ajax_target_attr, t.object = e, 1 == e.use_scroll_loader && u.detach(), e.is_loading_more = !1, e.triggerEvent("sf:ajaxfinish", t)
                        })
                    }, this.fetchAjaxResults = function () {
                        var a = {sfid: e.sfid, targetSelector: e.ajax_target_attr, type: "load_results", object: e};
                        e.triggerEvent("sf:ajaxstart", a);
                        var n = t.find('input[type="text"]:focus').not(".sf-datepicker");
                        if (1 == n.length) var s = n.attr("name");
                        if (t.addClass("search-filter-disabled"), i.disableInputs(e), e.$ajax_results_container.animate({opacity: .5}, "fast"), e.fadeContentAreas("out"), "pagination" == e.ajax_action) {
                            var o = e.$ajax_results_container.attr("data-paged");
                            "undefined" == typeof o && (o = 1), i.setTaxArchiveResultsUrl(e, e.results_url), l = e.getUrlParams(!1), o > 1 && (l = e.joinUrlParam(l, "sf_paged=" + o))
                        } else if ("submit" == e.ajax_action) {
                            var l = e.getUrlParams(!0);
                            e.last_submit_query_params = e.getUrlParams(!1)
                        }
                        var u = "", c = "", f = "";
                        e.setAjaxResultsURLs(l), u = e.ajax_results_conf.processing_url, c = e.ajax_results_conf.results_url, f = e.ajax_results_conf.data_type, e.last_ajax_request && e.last_ajax_request.abort();
                        var d = e.ajax_action;
                        e.last_ajax_request = r.get(u, function (t, a, r) {
                            e.last_ajax_request = null, e.updateResults(t, f), e.ajax_action = d, e.scrollResults(e.ajax_action), e.updateUrlHistory(c), e.setupAjaxPagination(), e.isSubmitting = !1, e.initWooCommerceControls()
                        }, f).fail(function (t, a, r) {
                            var n = {};
                            n.sfid = e.sfid, n.targetSelector = e.ajax_target_attr, n.object = e, n.ajaxURL = u, n.jqXHR = t, n.textStatus = a, n.errorThrown = r, e.isSubmitting = !1, e.triggerEvent("sf:ajaxerror", n)
                        }).always(function () {
                            e.$ajax_results_container.stop(!0, !0).animate({opacity: 1}, "fast"), e.fadeContentAreas("in");
                            var a = {};
                            if (a.sfid = e.sfid, a.targetSelector = e.ajax_target_attr, a.object = e, t.removeClass("search-filter-disabled"), i.enableInputs(e), "" != s) {
                                var n = [];
                                e.$fields.each(function () {
                                    var t = r(this).find("input[name='" + s + "']");
                                    1 == t.length && (n = t)
                                }), 1 == n.length && (n.focus().val(n.val()), e.focusCampo(n[0]))
                            }
                            t.find("input[name='_sf_search']").trigger("focus"), e.triggerEvent("sf:ajaxfinish", a)
                        })
                    }, this.focusCampo = function (t) {
                        if (null != t && 0 != t.value.length) {
                            if (t.createTextRange) {
                                var e = t.createTextRange();
                                e.moveStart("character", t.value.length), e.collapse(), e.select()
                            } else if (t.selectionStart || "0" == t.selectionStart) {
                                var a = t.value.length;
                                t.selectionStart = a, t.selectionEnd = a
                            }
                            t.blur(), t.focus()
                        } else t && t.focus()
                    }, this.triggerEvent = function (t, a) {
                        var n = r(".searchandfilter123[data-sf-form-id='" + e.sfid + "']");
                        n.trigger(t, [a])
                    }, this.fetchAjaxForm = function () {
                        var a = {sfid: e.sfid, targetSelector: e.ajax_target_attr, type: "form", object: e};
                        e.triggerEvent("sf:ajaxformstart", [a]), t.addClass("search-filter-disabled"), i.disableInputs(e);
                        var n = e.getUrlParams();
                        "" != e.lang_code && (n = e.joinUrlParam(n, "lang=" + e.lang_code));
                        var s = e.addUrlParam(e.ajax_form_url, n), o = "json";
                        r.get(s, function (t, a, r) {
                            e.updateForm(t, o)
                        }, o).fail(function (t, a, r) {
                            var n = {};
                            n.sfid = e.sfid, n.targetSelector = e.ajax_target_attr, n.object = e, n.ajaxURL = s, n.jqXHR = t, n.textStatus = a, n.errorThrown = r, e.triggerEvent("sf:ajaxerror", [n])
                        }).always(function () {
                            var a = {};
                            a.sfid = e.sfid, a.targetSelector = e.ajax_target_attr, a.object = e, t.removeClass("search-filter-disabled"), i.enableInputs(e), e.triggerEvent("sf:ajaxformfinish", [a])
                        })
                    }, this.copyListItemsContents = function (t, e) {
                        var a = this, n = new Array, i = new Array, s = t.find("> ul > li");
                        s.each(function (t) {
                            n.push(r(this).html());
                            var e = r(this).prop("attributes");
                            i.push(e)
                        });
                        var o = 0, l = e.find("> ul > li");
                        l.each(function (t) {
                            r(this).html(n[o]);
                            var e = r(s.get(o)), i = r(this);
                            i.removeAttr("data-sf-taxonomy-archive"), a.copyAttributes(e, i), o++
                        })
                    }, this.updateFormAttributes = function (t, e) {
                        var a = t.prop("attributes"), n = e.prop("attributes");
                        r.each(n, function () {
                            e.removeAttr(this.name)
                        }), r.each(a, function () {
                            e.attr(this.name, this.value)
                        })
                    }, this.copyAttributes = function (t, e, a) {
                        if ("undefined" == typeof a) var a = "";
                        var n = t.prop("attributes"), i = e.prop("attributes");
                        r.each(i, function () {
                            "" != a && 0 == this.name.indexOf(a) && e.removeAttr(this.name)
                        }), r.each(n, function () {
                            e.attr(this.name, this.value)
                        })
                    }, this.copyFormAttributes = function (t, e) {
                        e.removeAttr("data-current-taxonomy-archive"), this.copyAttributes(t, e)
                    }, this.updateForm = function (e, a) {
                        var n = this;
                        "json" == a && "undefined" != typeof e.form && (t.off(), n.copyListItemsContents(r(e.form), t), this.init(!0), 1 == n.is_ajax && n.setupAjaxPagination())
                    }, this.addResults = function (t, e) {
                        var a = this;
                        if ("json" == e) a.load_more_html = t.results; else if ("html" == e) {
                            var n = r(t);
                            a.load_more_html = n.find(a.ajax_target_attr).html()
                        }
                        var i = !1;
                        if (r("<div>" + a.load_more_html + "</div>").find("[data-search-filter-action='infinite-scroll-end']").length > 0 && (i = !0), "" != a.infinite_scroll_container && (a.load_more_html = r("<div>" + a.load_more_html + "</div>").find(a.infinite_scroll_container).html()), "" != a.infinite_scroll_result_class) {
                            var s = r("<div>" + a.load_more_html + "</div>").find(a.infinite_scroll_result_class),
                                o = r("<div/>", {});
                            o.append(s), a.load_more_html = o.html()
                        }
                        i ? (a.is_max_paged = !0, a.last_load_more_html = a.load_more_html, a.infiniteScrollAppend(a.load_more_html)) : a.last_load_more_html !== a.load_more_html ? (a.last_load_more_html = a.load_more_html, a.infiniteScrollAppend(a.load_more_html)) : a.is_max_paged = !0
                    }, this.infiniteScrollAppend = function (t) {
                        "" != e.infinite_scroll_result_class ? e.$infinite_scroll_container.find(e.infinite_scroll_result_class).last().after(t) : e.$infinite_scroll_container.append(t)
                    }, this.updateResults = function (e, a) {
                        var n = this;
                        if ("json" == a) n.$ajax_results_container.html(e.results), "undefined" != typeof e.form && (t.off(), n.removeAjaxPagination(), n.copyListItemsContents(r(e.form), t), n.copyFormAttributes(r(e.form), t), t.searchAndFilter({isInit: !1})); else if ("html" == a) {
                            var i = r(e);
                            if (n.$ajax_results_container.html(i.find(n.ajax_target_attr).html()), n.updateContentAreas(i), n.$ajax_results_container.find(".searchandfilter123").length > 0 && n.$ajax_results_container.find(".searchandfilter123").searchAndFilter(), 0 == n.$ajax_results_container.find(".searchandfilter123[data-sf-form-id='" + n.sfid + "']").length) {
                                var s = i.find(".searchandfilter123[data-sf-form-id='" + n.sfid + "']");
                                1 == s.length && (t.off(), n.removeAjaxPagination(), n.copyListItemsContents(s, t), n.copyFormAttributes(s, t), t.searchAndFilter({isInit: !1}))
                            }
                        }
                        n.is_max_paged = !1, n.current_paged = 1, n.setInfiniteScrollContainer()
                    }, this.updateContentAreas = function (t) {
                        if (this.ajax_update_sections && this.ajax_update_sections.length) for (index = 0; index < this.ajax_update_sections.length; ++index) {
                            var e = this.ajax_update_sections[index];
                            r(e).html(t.find(e).html())
                        }
                    }, this.fadeContentAreas = function (t) {
                        var e = .5;
                        if ("in" === t && (e = 1), this.ajax_update_sections && this.ajax_update_sections.length) for (index = 0; index < this.ajax_update_sections.length; ++index) {
                            var a = this.ajax_update_sections[index];
                            r(a).stop(!0, !0).animate({opacity: e}, "fast")
                        }
                    }, this.removeWooCommerceControls = function () {
                        var t = r(".woocommerce-ordering .orderby"), e = r(".woocommerce-ordering");
                        e.off(), t.off()
                    }, this.addQueryParam = function (t, a, r) {
                        if ("undefined" == typeof r) var r = "all";
                        e.extra_query_params[r][t] = a
                    }, this.initWooCommerceControls = function () {
                        e.removeWooCommerceControls();
                        var a = r(".woocommerce-ordering .orderby"), n = r(".woocommerce-ordering"), i = "";
                        i = a.length > 0 ? a.val() : e.getQueryParamFromURL("orderby", window.location.href), "menu_order" == i && (i = ""), "" != i && i && (e.extra_query_params.all.orderby = i), n.on("submit", function (t) {
                            return t.preventDefault(), !1
                        }), a.on("change", function (a) {
                            a.preventDefault();
                            var n = r(this).val();
                            return "menu_order" == n && (n = ""), e.extra_query_params.all.orderby = n, t.trigger("submit"), !1
                        })
                    }, this.scrollResults = function () {
                        var t = this;
                        t.scroll_on_action != t.ajax_action && "all" != t.scroll_on_action || t.scrollToPos()
                    },this.updateUrlHistory = function (e) {
                        var a = this, r = 0;
                        window.history && window.history.pushState && (r = t.attr("data-use-history-api")), 1 == a.update_ajax_url && 1 == r && window.history && window.history.pushState && history.pushState(null, null, e)
                    },this.removeAjaxPagination = function () {
                        var t = this;
                        if ("undefined" != typeof t.ajax_links_selector) {
                            var e = jQuery(t.ajax_links_selector);
                            e.length > 0 && e.off()
                        }
                    },this.getBaseUrl = function (t) {
                        var e = t.split("?"), a = "";
                        return a = e.length > 0 ? e[0] : t
                    },this.canFetchAjaxResults = function (t) {
                        if ("undefined" == typeof t) var t = "";
                        var e = this, a = !1;
                        if (1 == e.is_ajax) {
                            1 == e.$ajax_results_container.length && (a = !0);
                            var r = e.results_url, n = "", i = window.location.href,
                                s = window.location.href.indexOf("#");
                            if (s !== -1 && (i = window.location.href.substr(0, window.location.href.indexOf("#"))), ("custom_woocommerce_store" == e.display_result_method || "post_type_archive" == e.display_result_method) && 1 == e.enable_taxonomy_archives && "" !== e.current_taxonomy_archive) return a = !0;
                            var o = this.getBaseUrl(i), l = e.getQueryParamFromURL("lang", window.location.href);
                            "undefined" != typeof l && null !== l && (o = e.addUrlParam(o, "lang=" + l));
                            var u = e.getQueryParamFromURL("sfid", window.location.href);
                            Number(parseFloat(u)) == u && (o = e.addUrlParam(o, "sfid=" + u)), o = o.replace(/\/$/, ""), r = r.replace(/\/$/, ""), n = encodeURI(r);
                            var c = -1;
                            o == r || o.toLowerCase() == n.toLowerCase() ? c = 1 : r.indexOf("?") !== -1 && 0 === i.lastIndexOf(r, 0) && (c = 1), 1 == e.only_results_ajax ? a = c > -1 : "pagination" == t && (c > -1 || (a = !1))
                        }
                        return a
                    },this.setupAjaxPagination = function () {
                        if ("infinite_scroll" === this.pagination_type) {
                            var t = !1;
                            e.$ajax_results_container.find("[data-search-filter-action='infinite-scroll-end']").length > 0 && (t = !0, e.is_max_paged = !0), 1 === parseInt(this.instance_number) && (r(window).off("scroll", e.onWindowScroll), e.canFetchAjaxResults("pagination") && r(window).on("scroll", e.onWindowScroll))
                        } else {
                            if ("undefined" == typeof e.ajax_links_selector) return;
                            r(document).off("click", e.ajax_links_selector), r(document).off(e.ajax_links_selector), r(e.ajax_links_selector).off(), r(document).on("click", e.ajax_links_selector, function (t) {
                                if (e.canFetchAjaxResults("pagination")) {
                                    t.preventDefault();
                                    var a = jQuery(this).attr("href");
                                    e.ajax_action = "pagination";
                                    var r = e.getPagedFromURL(a);
                                    return e.$ajax_results_container.attr("data-paged", r), e.fetchAjaxResults(), !1
                                }
                            })
                        }
                    },this.getPagedFromURL = function (t) {
                        var a = 1, r = e.getQueryParamFromURL("sf_paged", t);
                        return "string" != typeof r && "number" != typeof r || (a = r), a
                    },this.getQueryParamFromURL = function (t, e) {
                        var a = "?" + e.split("?")[1];
                        if ("undefined" != typeof a) {
                            var r = decodeURIComponent((new RegExp("[?|&]" + t + "=([^&;]+?)(&|#|;|$)").exec(a) || [, ""])[1].replace(/\+/g, "%20")) || null;
                            return r
                        }
                        return ""
                    },this.formUpdated = function (t) {
                        return 1 == e.auto_update ? e.submitForm() : 0 == e.auto_update && 1 == e.auto_count_refresh_mode && e.formUpdatedFetchAjax(), !1
                    },this.formUpdatedFetchAjax = function () {
                        return e.fetchAjaxForm(), !1
                    },this.setFields = function (t) {
                        e.$fields.each(function () {
                            var t = r(this), e = t.find(".sf-meta-range-slider").attr("data-display-values-as");
                            "textinput" === e && (t.find(".meta-slider").length > 0, t.find(".meta-slider").each(function (t) {
                                var e = r(this)[0], a = r(this).closest(".sf-meta-range-slider"),
                                    n = a.find(".sf-range-min").val(), i = a.find(".sf-range-max").val();
                                e.noUiSlider.set([n, i])
                            }))
                        })
                    },this.submitForm = function (t) {
                        if (1 == e.isSubmitting) return !1;
                        if (e.setFields(), e.clearTimer(), e.isSubmitting = !0, i.setTaxArchiveResultsUrl(e, e.results_url), e.$ajax_results_container.attr("data-paged", 1), e.canFetchAjaxResults()) e.ajax_action = "submit", e.fetchAjaxResults(); else {
                            var a = i.getResultsUrl(e, e.results_url), r = e.getUrlParams(!0, "");
                            a = e.addUrlParam(a, r), window.location.href = a
                        }
                        return !1
                    },this.resetForm = function (t) {
                        e.$fields.each(function () {
                            var t = r(this);
                            t.removeAttr("data-sf-taxonomy-archive"), t.find("select:not([multiple='multiple']) > option:first-child").prop("selected", !0), t.find("select[multiple='multiple'] > option").prop("selected", !1), t.find("input[type='checkbox']").prop("checked", !1), t.find("> ul > li:first-child input[type='radio']").prop("checked", !0), t.find("input[type='text']").val(""), t.find(".sf-option-active").removeClass("sf-option-active"), t.find("> ul > li:first-child input[type='radio']").parent().addClass("sf-option-active"), t.find("input[type='number']").each(function (t) {
                                var e = r(this);
                                e.parent().parent().hasClass("sf-meta-range") && (0 == t ? e.val(e.attr("min")) : 1 == t && e.val(e.attr("max")))
                            });
                            var e = t.find(".sf-meta-range-select-fromto");
                            if (e.length > 0) {
                                var a = e.attr("data-min"), n = e.attr("data-max");
                                e.find("select").each(function (t) {
                                    var e = r(this);
                                    0 == t ? e.val(a) : 1 == t && e.val(n)
                                })
                            }
                            var i = t.find(".sf-meta-range-radio-fromto");
                            if (i.length > 0) {
                                var a = i.attr("data-min"), n = i.attr("data-max"), s = i.find(".sf-input-range-radio");
                                s.each(function (t) {
                                    var e = r(this).find(".sf-input-radio");
                                    e.prop("checked", !1), 0 == t ? e.filter('[value="' + a + '"]').prop("checked", !0) : 1 == t && e.filter('[value="' + n + '"]').prop("checked", !0)
                                })
                            }
                            t.find(".meta-slider").each(function (t) {
                                var e = r(this)[0], a = r(this).closest(".sf-meta-range-slider"),
                                    n = a.attr("data-min"), i = a.attr("data-max");
                                e.noUiSlider.set([n, i])
                            });
                            var o = t.find("select[data-combobox='1']");
                            o.length > 0 && ("undefined" != typeof o.chosen ? o.trigger("chosen:updated") : (o.val(""), o.trigger("change.select2")))
                        }), e.clearTimer(), "always" == t ? e.submitForm() : "never" == t ? 1 == this.auto_count_refresh_mode && e.formUpdatedFetchAjax() : "auto" == t && (1 == this.auto_update ? e.submitForm() : 1 == this.auto_count_refresh_mode && e.formUpdatedFetchAjax())
                    },this.init();
                    var o = {};
                    o.sfid = e.sfid, o.targetSelector = e.ajax_target_attr, o.object = this, a.isInit && e.triggerEvent("sf:init", o)
                })
            }
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {"./process_form": 4, "./state": 5, "./thirdparty": 6, nouislider: 2}], 4: [function (t, e, a) {
        (function (t) {
            var a = "undefined" != typeof window ? window.jQuery : "undefined" != typeof t ? t.jQuery : null;
            e.exports = {
                taxonomy_archives: 0,
                url_params: {},
                tax_archive_results_url: "",
                active_tax: "",
                fields: {},
                init: function (t, e) {
                    this.taxonomy_archives = 0, this.url_params = {}, this.tax_archive_results_url = "", this.active_tax = "", this.taxonomy_archives = t, this.current_taxonomy_archive = e, this.clearUrlComponents()
                },
                setTaxArchiveResultsUrl: function (t, e, r) {
                    var n = this;
                    if (this.clearTaxArchiveResultsUrl(), 1 == this.taxonomy_archives) {
                        if ("undefined" == typeof r) var r = !1;
                        var i = !1, s = "", o = "", l = t.$fields.parent().find("[data-sf-taxonomy-archive='1']");
                        if (1 == l.length) {
                            i = l;
                            var u = i.attr("data-sf-field-type");
                            if ("tag" == u || "category" == u || "taxonomy" == u) {
                                var c = n.processTaxonomy(i, !0);
                                s = i.attr("data-sf-field-name");
                                var f = s.replace("_sft_", "");
                                c && (o = c.value)
                            }
                            "" == o && (i = !1)
                        }
                        if ("" != n.current_taxonomy_archive && n.current_taxonomy_archive != f) return void (this.tax_archive_results_url = e);
                        if ("" != o && i || t.$fields.each(function () {
                            if (!i) {
                                var t = a(this).attr("data-sf-field-type");
                                if ("tag" == t || "category" == t || "taxonomy" == t) {
                                    var e = n.processTaxonomy(a(this), !0);
                                    s = a(this).attr("data-sf-field-name"), e && (o = e.value, "" != o && (i = a(this)))
                                }
                            }
                        }), i && "" != o) {
                            var d = i.attr("data-sf-term-rewrite");
                            if ("" != d) {
                                var p = JSON.parse(d), h = i.attr("data-sf-field-input-type");
                                if (n.active_tax = s, "radio" == h || "checkbox" == h) {
                                    var m = !0, _ = o.split(",").join("+").split("+");
                                    if (_.length > 1 && (m = !1), m) {
                                        var g = i.find("input[value='" + o + "']"), v = g.parent(),
                                            x = v.attr("data-sf-depth"), y = new Array;
                                        y.push(o);
                                        for (var b = x; b > 0; b--) v = v.parent().parent(), y.push(v.find("input").val());
                                        y.reverse();
                                        var j = p[x], w = j;
                                        a(y).each(function (t, e) {
                                            w = w.replace("[" + t + "]", e)
                                        }), this.tax_archive_results_url = w
                                    }
                                } else if ("select" == h || "multiselect" == h) {
                                    var m = !0, _ = o.split(",").join("+").split("+");
                                    if (_.length > 1 && (m = !1), m) {
                                        var v = i.find("option[value='" + o + "']"), x = v.attr("data-sf-depth"),
                                            y = new Array;
                                        y.push(o);
                                        for (var b = x; b > 0; b--) v = v.prevAll("option[data-sf-depth='" + (b - 1) + "']"), y.push(v.val());
                                        y.reverse();
                                        var j = p[x], w = j;
                                        a(y).each(function (t, e) {
                                            w = w.replace("[" + t + "]", e)
                                        }), this.tax_archive_results_url = w
                                    }
                                }
                            }
                        }
                    }
                },
                getResultsUrl: function (t, e) {
                    return "" == this.tax_archive_results_url ? e : this.tax_archive_results_url
                },
                getUrlParams: function (t) {
                    if (this.buildUrlComponents(t, !0), "" != this.tax_archive_results_url && "" != this.active_tax) {
                        var e = this.active_tax;
                        "undefined" != typeof this.url_params[e] && delete this.url_params[e]
                    }
                    return this.url_params
                },
                clearUrlComponents: function () {
                    this.url_params = {}
                },
                clearTaxArchiveResultsUrl: function () {
                    this.tax_archive_results_url = ""
                },
                disableInputs: function (t) {
                    t.$fields.each(function () {
                        var t = a(this).find("input, select, .meta-slider");
                        t.attr("disabled", "disabled"), t.attr("disabled", !0), t.prop("disabled", !0), t.trigger("chosen:updated")
                    })
                },
                enableInputs: function (t) {
                    t.$fields.each(function () {
                        var t = a(this).find("input, select, .meta-slider");
                        t.prop("disabled", !1), t.attr("disabled", !1), t.trigger("chosen:updated")
                    })
                },
                buildUrlComponents: function (t, e) {
                    var r = this;
                    "undefined" != typeof e && 1 == e && this.clearUrlComponents(), t.$fields.each(function () {
                        var t = (a(this).attr("data-sf-field-name"), a(this).attr("data-sf-field-type"));
                        "search" == t ? r.processSearchField(a(this)) : "tag" == t || "category" == t || "taxonomy" == t ? r.processTaxonomy(a(this)) : "sort_order" == t ? r.processSortOrderField(a(this)) : "posts_per_page" == t ? r.processResultsPerPageField(a(this)) : "author" == t ? r.processAuthor(a(this)) : "post_type" == t ? r.processPostType(a(this)) : "post_date" == t ? r.processPostDate(a(this)) : "post_meta" == t && r.processPostMeta(a(this))
                    })
                },
                processSearchField: function (t) {
                    var e = this, a = t.find("input[name^='_sf_search']");
                    if (a.length > 0) {
                        var r = (a.attr("name").replace("[]", ""), a.val());
                        "" != r && (e.url_params._sf_s = encodeURIComponent(r))
                    }
                },
                processSortOrderField: function (t) {
                    this.processAuthor(t)
                },
                processResultsPerPageField: function (t) {
                    this.processAuthor(t)
                },
                getActiveTax: function (t) {
                    return this.active_tax
                },
                getSelectVal: function (t) {
                    var e = "";
                    return 0 != t.val() && (e = t.val()), null == e && (e = ""), e
                },
                getMetaSelectVal: function (t) {
                    var e = "";
                    return e = t.val(), null == e && (e = ""), e
                },
                getMultiSelectVal: function (t, e) {
                    var a = "+";
                    if ("or" == e && (a = ","), "object" == typeof t.val() && null != t.val()) return t.val().join(a)
                },
                getMetaMultiSelectVal: function (t, e) {
                    var r = "-+-";
                    if ("or" == e && (r = "-,-"), "object" == typeof t.val() && null != t.val()) {
                        var n = [];
                        return a(t.val()).each(function (t, e) {
                            n.push(e)
                        }), n.join(r)
                    }
                    return ""
                },
                getCheckboxVal: function (t, e) {
                    var r = t.map(function () {
                        if (1 == a(this).prop("checked")) return a(this).val()
                    }).get(), n = "+";
                    return "or" == e && (n = ","), r.join(n)
                },
                getMetaCheckboxVal: function (t, e) {
                    var r = t.map(function () {
                        if (1 == a(this).prop("checked")) return a(this).val()
                    }).get(), n = "-+-";
                    return "or" == e && (n = "-,-"), r.join(n)
                },
                getRadioVal: function (t) {
                    var e = t.map(function () {
                        if (1 == a(this).prop("checked")) return a(this).val()
                    }).get();
                    if (0 != e[0]) return e[0]
                },
                getMetaRadioVal: function (t) {
                    var e = t.map(function () {
                        if (1 == a(this).prop("checked")) return a(this).val()
                    }).get();
                    return e[0]
                },
                processAuthor: function (t) {
                    var e, a = this, r = (t.attr("data-sf-field-type"), t.attr("data-sf-field-input-type")), n = "",
                        i = "";
                    if ("select" == r) e = t.find("select"), n = e.attr("name").replace("[]", ""), i = a.getSelectVal(e); else if ("multiselect" == r) {
                        e = t.find("select"), n = e.attr("name").replace("[]", "");
                        e.attr("data-operator");
                        i = a.getMultiSelectVal(e, "or")
                    } else if ("checkbox" == r) {
                        if (e = t.find("ul > li input:checkbox"), e.length > 0) {
                            n = e.attr("name").replace("[]", "");
                            t.find("> ul").attr("data-operator");
                            i = a.getCheckboxVal(e, "or")
                        }
                    } else "radio" == r && (e = t.find("ul > li input:radio"), e.length > 0 && (n = e.attr("name").replace("[]", ""), i = a.getRadioVal(e)));
                    if ("undefined" != typeof i && "" != i) {
                        var s = "";
                        "_sf_author" == n ? s = "authors" : "_sf_sort_order" == n ? s = "sort_order" : "_sf_ppp" == n ? s = "_sf_ppp" : "_sf_post_type" == n && (s = "post_types"), "" != s && (a.url_params[s] = i)
                    }
                },
                processPostType: function (t) {
                    this.processAuthor(t)
                },
                processPostMeta: function (t) {
                    var e, r = this, n = (t.attr("data-sf-field-type"), t.attr("data-sf-field-input-type")),
                        i = t.attr("data-sf-meta-type"), s = "", o = "";
                    if ("number" == i) {
                        if ("range-number" == n) {
                            e = t.find(".sf-meta-range-number input");
                            var l = [];
                            e.each(function () {
                                l.push(a(this).val())
                            }), s = l.join("+")
                        } else if ("range-slider" == n) {
                            e = t.find(".sf-meta-range-slider input");
                            var u = t.find(".sf-meta-range-slider"), c = u.attr("data-decimal-places"),
                                f = u.attr("data-thousand-seperator"), d = u.attr("data-decimal-seperator"),
                                p = wNumb({mark: d, decimals: parseFloat(c), thousand: f}), l = [],
                                h = t.find(".meta-slider")[0], m = h.noUiSlider.get();
                            l.push(p.from(m[0])), l.push(p.from(m[1])), s = l.join("+"), o = u.attr("data-sf-field-name")
                        } else if ("range-radio" == n) {
                            e = t.find(".sf-input-range-radio"), 0 == e.length && (e = t.find("> ul"));
                            var u = t.find(".sf-meta-range");
                            if (e.length > 0) {
                                var _ = [];
                                e.each(function () {
                                    var t = a(this).find(".sf-input-radio");
                                    _.push(r.getMetaRadioVal(t))
                                }), 2 == _.length && Number(_[1]) < Number(_[0]) && (_[1] = _[0]), s = _.join("+")
                            }
                            o = 1 == e.length ? e.find(".sf-input-radio").attr("name").replace("[]", "") : u.attr("data-sf-field-name")
                        } else if ("range-select" == n) {
                            e = t.find(".sf-input-select");
                            var u = t.find(".sf-meta-range");
                            if (e.length > 0) {
                                var _ = [];
                                e.each(function () {
                                    var t = a(this);
                                    _.push(r.getMetaSelectVal(t))
                                }), 2 == _.length && Number(_[1]) < Number(_[0]) && (_[1] = _[0]), s = _.join("+")
                            }
                            o = 1 == e.length ? e.attr("name").replace("[]", "") : u.attr("data-sf-field-name")
                        } else "range-checkbox" == n && (e = t.find("ul > li input:checkbox"), e.length > 0 && (s = r.getCheckboxVal(e, "and")));
                        "" == o && (o = e.attr("name").replace("[]", ""))
                    } else if ("choice" == i) {
                        if ("select" == n) e = t.find("select"), s = r.getMetaSelectVal(e); else if ("multiselect" == n) {
                            e = t.find("select");
                            var g = e.attr("data-operator");
                            s = r.getMetaMultiSelectVal(e, g)
                        } else if ("checkbox" == n) {
                            if (e = t.find("ul > li input:checkbox"), e.length > 0) {
                                var g = t.find("> ul").attr("data-operator");
                                s = r.getMetaCheckboxVal(e, g)
                            }
                        } else "radio" == n && (e = t.find("ul > li input:radio"), e.length > 0 && (s = r.getMetaRadioVal(e)));
                        s = encodeURIComponent(s), "undefined" != typeof e && e.length > 0 && (o = e.attr("name").replace("[]", ""), o = o)
                    } else "date" == i && r.processPostDate(t);
                    "undefined" != typeof s && "" != s && (r.url_params[encodeURIComponent(o)] = s)
                },
                processPostDate: function (t) {
                    var e, r = this, n = (t.attr("data-sf-field-type"), t.attr("data-sf-field-input-type"), ""), i = "";
                    e = t.find("ul > li input:text"), n = e.attr("name").replace("[]", "");
                    var s = [];
                    if (e.each(function () {
                        s.push(a(this).val())
                    }), 2 == e.length ? "" == s[0] && "" == s[1] || (i = s.join("+"), i = i.replace(/\//g, "")) : 1 == e.length && "" != s[0] && (i = s.join("+"), i = i.replace(/\//g, "")), "undefined" != typeof i && "" != i) {
                        var o = "";
                        o = "_sf_post_date" == n ? "post_date" : n, "" != o && (r.url_params[o] = i)
                    }
                },
                processTaxonomy: function (t, e) {
                    "undefined" == typeof e && (e = !1);
                    var a, r = this, n = (t.attr("data-sf-field-type"), t.attr("data-sf-field-input-type")), i = "",
                        s = "";
                    if ("select" == n) a = t.find("select"), i = a.attr("name").replace("[]", ""), s = r.getSelectVal(a); else if ("multiselect" == n) {
                        a = t.find("select"),
                            i = a.attr("name").replace("[]", "");
                        var o = a.attr("data-operator");
                        s = r.getMultiSelectVal(a, o)
                    } else if ("checkbox" == n) {
                        if (a = t.find("ul > li input:checkbox"), a.length > 0) {
                            i = a.attr("name").replace("[]", "");
                            var o = t.find("> ul").attr("data-operator");
                            s = r.getCheckboxVal(a, o)
                        }
                    } else "radio" == n && (a = t.find("ul > li input:radio"), a.length > 0 && (i = a.attr("name").replace("[]", ""), s = r.getRadioVal(a)));
                    if ("undefined" != typeof s && "" != s) {
                        if (1 == e) return {name: i, value: s};
                        r.url_params[i] = s
                    }
                    if (1 == e) return !1
                }
            }
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}], 5: [function (t, e, a) {
        e.exports = {
            searchForms: {}, init: function () {
            }, addSearchForm: function (t, e) {
                this.searchForms[t] = e
            }, getSearchForm: function (t) {
                return this.searchForms[t]
            }
        }
    }, {}], 6: [function (t, e, a) {
        (function (t) {
            var a = "undefined" != typeof window ? window.jQuery : "undefined" != typeof t ? t.jQuery : null;
            e.exports = {
                init: function () {
                    a(document).on("sf:ajaxfinish", ".searchandfilter123", function (t, e) {
                        var r = e.object.display_result_method;
                        if ("custom_edd_store" === r) a("input.edd-add-to-cart").css("display", "none"), a("a.edd-add-to-cart").addClass("edd-has-js"); else if ("custom_layouts" === r && a(".cl-layout").hasClass("cl-layout--masonry")) {
                            const n = document.querySelectorAll(".cl-layout--masonry");
                            if (n.length > 0) {
                                const i = new Masonry(".cl-layout--masonry", {
                                    itemSelector: ".cl-layout__item",
                                    percentPosition: !0,
                                    transitionDuration: 0
                                });
                                imagesLoaded(n).on("progress", function () {
                                    i.layout()
                                })
                            }
                        }
                    })
                }
            }
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}]
}, {}, [1]);
/* Chosen v1.8.7 | (c) 2011-2018 by Harvest | MIT License, https://github.com/harvesthq/chosen/blob/master/LICENSE.md */

(function () {
    var t, e, s, i, n = function (t, e) {
        return function () {
            return t.apply(e, arguments)
        }
    }, r = function (t, e) {
        function s() {
            this.constructor = t
        }

        for (var i in e) o.call(e, i) && (t[i] = e[i]);
        return s.prototype = e.prototype, t.prototype = new s, t.__super__ = e.prototype, t
    }, o = {}.hasOwnProperty;
    (i = function () {
        function t() {
            this.options_index = 0, this.parsed = []
        }

        return t.prototype.add_node = function (t) {
            return "OPTGROUP" === t.nodeName.toUpperCase() ? this.add_group(t) : this.add_option(t)
        }, t.prototype.add_group = function (t) {
            var e, s, i, n, r, o;
            for (e = this.parsed.length, this.parsed.push({
                array_index: e,
                group: !0,
                label: t.label,
                title: t.title ? t.title : void 0,
                children: 0,
                disabled: t.disabled,
                classes: t.className
            }), o = [], s = 0, i = (r = t.childNodes).length; s < i; s++) n = r[s], o.push(this.add_option(n, e, t.disabled));
            return o
        }, t.prototype.add_option = function (t, e, s) {
            if ("OPTION" === t.nodeName.toUpperCase()) return "" !== t.text ? (null != e && (this.parsed[e].children += 1), this.parsed.push({
                array_index: this.parsed.length,
                options_index: this.options_index,
                value: t.value,
                text: t.text,
                html: t.innerHTML,
                title: t.title ? t.title : void 0,
                selected: t.selected,
                disabled: !0 === s ? s : t.disabled,
                group_array_index: e,
                group_label: null != e ? this.parsed[e].label : null,
                classes: t.className,
                style: t.style.cssText
            })) : this.parsed.push({
                array_index: this.parsed.length,
                options_index: this.options_index,
                empty: !0
            }), this.options_index += 1
        }, t
    }()).select_to_array = function (t) {
        var e, s, n, r, o;
        for (r = new i, s = 0, n = (o = t.childNodes).length; s < n; s++) e = o[s], r.add_node(e);
        return r.parsed
    }, e = function () {
        function t(e, s) {
            this.form_field = e, this.options = null != s ? s : {}, this.label_click_handler = n(this.label_click_handler, this), t.browser_is_supported() && (this.is_multiple = this.form_field.multiple, this.set_default_text(), this.set_default_values(), this.setup(), this.set_up_html(), this.register_observers(), this.on_ready())
        }

        return t.prototype.set_default_values = function () {
            return this.click_test_action = function (t) {
                return function (e) {
                    return t.test_active_click(e)
                }
            }(this), this.activate_action = function (t) {
                return function (e) {
                    return t.activate_field(e)
                }
            }(this), this.active_field = !1, this.mouse_on_container = !1, this.results_showing = !1, this.result_highlighted = null, this.is_rtl = this.options.rtl || /\bchosen-rtl\b/.test(this.form_field.className), this.allow_single_deselect = null != this.options.allow_single_deselect && null != this.form_field.options[0] && "" === this.form_field.options[0].text && this.options.allow_single_deselect, this.disable_search_threshold = this.options.disable_search_threshold || 0, this.disable_search = this.options.disable_search || !1, this.enable_split_word_search = null == this.options.enable_split_word_search || this.options.enable_split_word_search, this.group_search = null == this.options.group_search || this.options.group_search, this.search_contains = this.options.search_contains || !1, this.single_backstroke_delete = null == this.options.single_backstroke_delete || this.options.single_backstroke_delete, this.max_selected_options = this.options.max_selected_options || Infinity, this.inherit_select_classes = this.options.inherit_select_classes || !1, this.display_selected_options = null == this.options.display_selected_options || this.options.display_selected_options, this.display_disabled_options = null == this.options.display_disabled_options || this.options.display_disabled_options, this.include_group_label_in_selected = this.options.include_group_label_in_selected || !1, this.max_shown_results = this.options.max_shown_results || Number.POSITIVE_INFINITY, this.case_sensitive_search = this.options.case_sensitive_search || !1, this.hide_results_on_select = null == this.options.hide_results_on_select || this.options.hide_results_on_select
        }, t.prototype.set_default_text = function () {
            return this.form_field.getAttribute("data-placeholder") ? this.default_text = this.form_field.getAttribute("data-placeholder") : this.is_multiple ? this.default_text = this.options.placeholder_text_multiple || this.options.placeholder_text || t.default_multiple_text : this.default_text = this.options.placeholder_text_single || this.options.placeholder_text || t.default_single_text, this.default_text = this.escape_html(this.default_text), this.results_none_found = this.form_field.getAttribute("data-no_results_text") || this.options.no_results_text || t.default_no_result_text
        }, t.prototype.choice_label = function (t) {
            return this.include_group_label_in_selected && null != t.group_label ? "<b class='group-name'>" + this.escape_html(t.group_label) + "</b>" + t.html : t.html
        }, t.prototype.mouse_enter = function () {
            return this.mouse_on_container = !0
        }, t.prototype.mouse_leave = function () {
            return this.mouse_on_container = !1
        }, t.prototype.input_focus = function (t) {
            if (this.is_multiple) {
                if (!this.active_field) return setTimeout(function (t) {
                    return function () {
                        return t.container_mousedown()
                    }
                }(this), 50)
            } else if (!this.active_field) return this.activate_field()
        }, t.prototype.input_blur = function (t) {
            if (!this.mouse_on_container) return this.active_field = !1, setTimeout(function (t) {
                return function () {
                    return t.blur_test()
                }
            }(this), 100)
        }, t.prototype.label_click_handler = function (t) {
            return this.is_multiple ? this.container_mousedown(t) : this.activate_field()
        }, t.prototype.results_option_build = function (t) {
            var e, s, i, n, r, o, h;
            for (e = "", h = 0, n = 0, r = (o = this.results_data).length; n < r && (s = o[n], i = "", "" !== (i = s.group ? this.result_add_group(s) : this.result_add_option(s)) && (h++, e += i), (null != t ? t.first : void 0) && (s.selected && this.is_multiple ? this.choice_build(s) : s.selected && !this.is_multiple && this.single_set_selected_text(this.choice_label(s))), !(h >= this.max_shown_results)); n++) ;
            return e
        }, t.prototype.result_add_option = function (t) {
            var e, s;
            return t.search_match && this.include_option_in_results(t) ? (e = [], t.disabled || t.selected && this.is_multiple || e.push("active-result"), !t.disabled || t.selected && this.is_multiple || e.push("disabled-result"), t.selected && e.push("result-selected"), null != t.group_array_index && e.push("group-option"), "" !== t.classes && e.push(t.classes), s = document.createElement("li"), s.className = e.join(" "), t.style && (s.style.cssText = t.style), s.setAttribute("data-option-array-index", t.array_index), s.innerHTML = t.highlighted_html || t.html, t.title && (s.title = t.title), this.outerHTML(s)) : ""
        }, t.prototype.result_add_group = function (t) {
            var e, s;
            return (t.search_match || t.group_match) && t.active_options > 0 ? ((e = []).push("group-result"), t.classes && e.push(t.classes), s = document.createElement("li"), s.className = e.join(" "), s.innerHTML = t.highlighted_html || this.escape_html(t.label), t.title && (s.title = t.title), this.outerHTML(s)) : ""
        }, t.prototype.results_update_field = function () {
            if (this.set_default_text(), this.is_multiple || this.results_reset_cleanup(), this.result_clear_highlight(), this.results_build(), this.results_showing) return this.winnow_results()
        }, t.prototype.reset_single_select_options = function () {
            var t, e, s, i, n;
            for (n = [], t = 0, e = (s = this.results_data).length; t < e; t++) (i = s[t]).selected ? n.push(i.selected = !1) : n.push(void 0);
            return n
        }, t.prototype.results_toggle = function () {
            return this.results_showing ? this.results_hide() : this.results_show()
        }, t.prototype.results_search = function (t) {
            return this.results_showing ? this.winnow_results() : this.results_show()
        }, t.prototype.winnow_results = function (t) {
            var e, s, i, n, r, o, h, l, c, _, a, u, d, p, f;
            for (this.no_results_clear(), _ = 0, e = (h = this.get_search_text()).replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), c = this.get_search_regex(e), i = 0, n = (l = this.results_data).length; i < n; i++) (r = l[i]).search_match = !1, a = null, u = null, r.highlighted_html = "", this.include_option_in_results(r) && (r.group && (r.group_match = !1, r.active_options = 0), null != r.group_array_index && this.results_data[r.group_array_index] && (0 === (a = this.results_data[r.group_array_index]).active_options && a.search_match && (_ += 1), a.active_options += 1), f = r.group ? r.label : r.text, r.group && !this.group_search || (u = this.search_string_match(f, c), r.search_match = null != u, r.search_match && !r.group && (_ += 1), r.search_match ? (h.length && (d = u.index, o = f.slice(0, d), s = f.slice(d, d + h.length), p = f.slice(d + h.length), r.highlighted_html = this.escape_html(o) + "<em>" + this.escape_html(s) + "</em>" + this.escape_html(p)), null != a && (a.group_match = !0)) : null != r.group_array_index && this.results_data[r.group_array_index].search_match && (r.search_match = !0)));
            return this.result_clear_highlight(), _ < 1 && h.length ? (this.update_results_content(""), this.no_results(h)) : (this.update_results_content(this.results_option_build()), (null != t ? t.skip_highlight : void 0) ? void 0 : this.winnow_results_set_highlight())
        }, t.prototype.get_search_regex = function (t) {
            var e, s;
            return s = this.search_contains ? t : "(^|\\s|\\b)" + t + "[^\\s]*", this.enable_split_word_search || this.search_contains || (s = "^" + s), e = this.case_sensitive_search ? "" : "i", new RegExp(s, e)
        }, t.prototype.search_string_match = function (t, e) {
            var s;
            return s = e.exec(t), !this.search_contains && (null != s ? s[1] : void 0) && (s.index += 1), s
        }, t.prototype.choices_count = function () {
            var t, e, s;
            if (null != this.selected_option_count) return this.selected_option_count;
            for (this.selected_option_count = 0, t = 0, e = (s = this.form_field.options).length; t < e; t++) s[t].selected && (this.selected_option_count += 1);
            return this.selected_option_count
        }, t.prototype.choices_click = function (t) {
            if (t.preventDefault(), this.activate_field(), !this.results_showing && !this.is_disabled) return this.results_show()
        }, t.prototype.keydown_checker = function (t) {
            var e, s;
            switch (s = null != (e = t.which) ? e : t.keyCode, this.search_field_scale(), 8 !== s && this.pending_backstroke && this.clear_backstroke(), s) {
                case 8:
                    this.backstroke_length = this.get_search_field_value().length;
                    break;
                case 9:
                    this.results_showing && !this.is_multiple && this.result_select(t), this.mouse_on_container = !1;
                    break;
                case 13:
                case 27:
                    this.results_showing && t.preventDefault();
                    break;
                case 32:
                    this.disable_search && t.preventDefault();
                    break;
                case 38:
                    t.preventDefault(), this.keyup_arrow();
                    break;
                case 40:
                    t.preventDefault(), this.keydown_arrow()
            }
        }, t.prototype.keyup_checker = function (t) {
            var e, s;
            switch (s = null != (e = t.which) ? e : t.keyCode, this.search_field_scale(), s) {
                case 8:
                    this.is_multiple && this.backstroke_length < 1 && this.choices_count() > 0 ? this.keydown_backstroke() : this.pending_backstroke || (this.result_clear_highlight(), this.results_search());
                    break;
                case 13:
                    t.preventDefault(), this.results_showing && this.result_select(t);
                    break;
                case 27:
                    this.results_showing && this.results_hide();
                    break;
                case 9:
                case 16:
                case 17:
                case 18:
                case 38:
                case 40:
                case 91:
                    break;
                default:
                    this.results_search()
            }
        }, t.prototype.clipboard_event_checker = function (t) {
            if (!this.is_disabled) return setTimeout(function (t) {
                return function () {
                    return t.results_search()
                }
            }(this), 50)
        }, t.prototype.container_width = function () {
            return null != this.options.width ? this.options.width : this.form_field.offsetWidth + "px"
        }, t.prototype.include_option_in_results = function (t) {
            return !(this.is_multiple && !this.display_selected_options && t.selected) && (!(!this.display_disabled_options && t.disabled) && !t.empty)
        }, t.prototype.search_results_touchstart = function (t) {
            return this.touch_started = !0, this.search_results_mouseover(t)
        }, t.prototype.search_results_touchmove = function (t) {
            return this.touch_started = !1, this.search_results_mouseout(t)
        }, t.prototype.search_results_touchend = function (t) {
            if (this.touch_started) return this.search_results_mouseup(t)
        }, t.prototype.outerHTML = function (t) {
            var e;
            return t.outerHTML ? t.outerHTML : ((e = document.createElement("div")).appendChild(t), e.innerHTML)
        }, t.prototype.get_single_html = function () {
            return '<a class="chosen-single chosen-default">\n  <span>' + this.default_text + '</span>\n  <div><b></b></div>\n</a>\n<div class="chosen-drop">\n  <div class="chosen-search">\n    <input class="chosen-search-input" type="text" autocomplete="off" />\n  </div>\n  <ul class="chosen-results"></ul>\n</div>'
        }, t.prototype.get_multi_html = function () {
            return '<ul class="chosen-choices">\n  <li class="search-field">\n    <input class="chosen-search-input" type="text" autocomplete="off" value="' + this.default_text + '" />\n  </li>\n</ul>\n<div class="chosen-drop">\n  <ul class="chosen-results"></ul>\n</div>'
        }, t.prototype.get_no_results_html = function (t) {
            return '<li class="no-results">\n  ' + this.results_none_found + " <span>" + this.escape_html(t) + "</span>\n</li>"
        }, t.browser_is_supported = function () {
            return "Microsoft Internet Explorer" === window.navigator.appName ? document.documentMode >= 8 : !(/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(window.navigator.userAgent) || /Windows Phone/i.test(window.navigator.userAgent) || /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window.navigator.userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent))
        }, t.default_multiple_text = "Select Some Options", t.default_single_text = "Select an Option", t.default_no_result_text = "No results match", t
    }(), (t = jQuery).fn.extend({
        chosen: function (i) {
            return e.browser_is_supported() ? this.each(function (e) {
                var n, r;
                r = (n = t(this)).data("chosen"), "destroy" !== i ? r instanceof s || n.data("chosen", new s(this, i)) : r instanceof s && r.destroy()
            }) : this
        }
    }), s = function (s) {
        function n() {
            return n.__super__.constructor.apply(this, arguments)
        }

        return r(n, e), n.prototype.setup = function () {
            return this.form_field_jq = t(this.form_field), this.current_selectedIndex = this.form_field.selectedIndex
        }, n.prototype.set_up_html = function () {
            var e, s;
            return (e = ["chosen-container"]).push("chosen-container-" + (this.is_multiple ? "multi" : "single")), this.inherit_select_classes && this.form_field.className && e.push(this.form_field.className), this.is_rtl && e.push("chosen-rtl"), s = {
                "class": e.join(" "),
                title: this.form_field.title
            }, this.form_field.id.length && (s.id = this.form_field.id.replace(/[^\w]/g, "_") + "_chosen"), this.container = t("<div />", s), this.container.width(this.container_width()), this.is_multiple ? this.container.html(this.get_multi_html()) : this.container.html(this.get_single_html()), this.form_field_jq.hide().after(this.container), this.dropdown = this.container.find("div.chosen-drop").first(), this.search_field = this.container.find("input").first(), this.search_results = this.container.find("ul.chosen-results").first(), this.search_field_scale(), this.search_no_results = this.container.find("li.no-results").first(), this.is_multiple ? (this.search_choices = this.container.find("ul.chosen-choices").first(), this.search_container = this.container.find("li.search-field").first()) : (this.search_container = this.container.find("div.chosen-search").first(), this.selected_item = this.container.find(".chosen-single").first()), this.results_build(), this.set_tab_index(), this.set_label_behavior()
        }, n.prototype.on_ready = function () {
            return this.form_field_jq.trigger("chosen:ready", {chosen: this})
        }, n.prototype.register_observers = function () {
            return this.container.on("touchstart.chosen", function (t) {
                return function (e) {
                    t.container_mousedown(e)
                }
            }(this)), this.container.on("touchend.chosen", function (t) {
                return function (e) {
                    t.container_mouseup(e)
                }
            }(this)), this.container.on("mousedown.chosen", function (t) {
                return function (e) {
                    t.container_mousedown(e)
                }
            }(this)), this.container.on("mouseup.chosen", function (t) {
                return function (e) {
                    t.container_mouseup(e)
                }
            }(this)), this.container.on("mouseenter.chosen", function (t) {
                return function (e) {
                    t.mouse_enter(e)
                }
            }(this)), this.container.on("mouseleave.chosen", function (t) {
                return function (e) {
                    t.mouse_leave(e)
                }
            }(this)), this.search_results.on("mouseup.chosen", function (t) {
                return function (e) {
                    t.search_results_mouseup(e)
                }
            }(this)), this.search_results.on("mouseover.chosen", function (t) {
                return function (e) {
                    t.search_results_mouseover(e)
                }
            }(this)), this.search_results.on("mouseout.chosen", function (t) {
                return function (e) {
                    t.search_results_mouseout(e)
                }
            }(this)), this.search_results.on("mousewheel.chosen DOMMouseScroll.chosen", function (t) {
                return function (e) {
                    t.search_results_mousewheel(e)
                }
            }(this)), this.search_results.on("touchstart.chosen", function (t) {
                return function (e) {
                    t.search_results_touchstart(e)
                }
            }(this)), this.search_results.on("touchmove.chosen", function (t) {
                return function (e) {
                    t.search_results_touchmove(e)
                }
            }(this)), this.search_results.on("touchend.chosen", function (t) {
                return function (e) {
                    t.search_results_touchend(e)
                }
            }(this)), this.form_field_jq.on("chosen:updated.chosen", function (t) {
                return function (e) {
                    t.results_update_field(e)
                }
            }(this)), this.form_field_jq.on("chosen:activate.chosen", function (t) {
                return function (e) {
                    t.activate_field(e)
                }
            }(this)), this.form_field_jq.on("chosen:open.chosen", function (t) {
                return function (e) {
                    t.container_mousedown(e)
                }
            }(this)), this.form_field_jq.on("chosen:close.chosen", function (t) {
                return function (e) {
                    t.close_field(e)
                }
            }(this)), this.search_field.on("blur.chosen", function (t) {
                return function (e) {
                    t.input_blur(e)
                }
            }(this)), this.search_field.on("keyup.chosen", function (t) {
                return function (e) {
                    t.keyup_checker(e)
                }
            }(this)), this.search_field.on("keydown.chosen", function (t) {
                return function (e) {
                    t.keydown_checker(e)
                }
            }(this)), this.search_field.on("focus.chosen", function (t) {
                return function (e) {
                    t.input_focus(e)
                }
            }(this)), this.search_field.on("cut.chosen", function (t) {
                return function (e) {
                    t.clipboard_event_checker(e)
                }
            }(this)), this.search_field.on("paste.chosen", function (t) {
                return function (e) {
                    t.clipboard_event_checker(e)
                }
            }(this)), this.is_multiple ? this.search_choices.on("click.chosen", function (t) {
                return function (e) {
                    t.choices_click(e)
                }
            }(this)) : this.container.on("click.chosen", function (t) {
                t.preventDefault()
            })
        }, n.prototype.destroy = function () {
            return t(this.container[0].ownerDocument).off("click.chosen", this.click_test_action), this.form_field_label.length > 0 && this.form_field_label.off("click.chosen"), this.search_field[0].tabIndex && (this.form_field_jq[0].tabIndex = this.search_field[0].tabIndex), this.container.remove(), this.form_field_jq.removeData("chosen"), this.form_field_jq.show()
        }, n.prototype.search_field_disabled = function () {
            return this.is_disabled = this.form_field.disabled || this.form_field_jq.parents("fieldset").is(":disabled"), this.container.toggleClass("chosen-disabled", this.is_disabled), this.search_field[0].disabled = this.is_disabled, this.is_multiple || this.selected_item.off("focus.chosen", this.activate_field), this.is_disabled ? this.close_field() : this.is_multiple ? void 0 : this.selected_item.on("focus.chosen", this.activate_field)
        }, n.prototype.container_mousedown = function (e) {
            var s;
            if (!this.is_disabled) return !e || "mousedown" !== (s = e.type) && "touchstart" !== s || this.results_showing || e.preventDefault(), null != e && t(e.target).hasClass("search-choice-close") ? void 0 : (this.active_field ? this.is_multiple || !e || t(e.target)[0] !== this.selected_item[0] && !t(e.target).parents("a.chosen-single").length || (e.preventDefault(), this.results_toggle()) : (this.is_multiple && this.search_field.val(""), t(this.container[0].ownerDocument).on("click.chosen", this.click_test_action), this.results_show()), this.activate_field())
        }, n.prototype.container_mouseup = function (t) {
            if ("ABBR" === t.target.nodeName && !this.is_disabled) return this.results_reset(t)
        }, n.prototype.search_results_mousewheel = function (t) {
            var e;
            if (t.originalEvent && (e = t.originalEvent.deltaY || -t.originalEvent.wheelDelta || t.originalEvent.detail), null != e) return t.preventDefault(), "DOMMouseScroll" === t.type && (e *= 40), this.search_results.scrollTop(e + this.search_results.scrollTop())
        }, n.prototype.blur_test = function (t) {
            if (!this.active_field && this.container.hasClass("chosen-container-active")) return this.close_field()
        }, n.prototype.close_field = function () {
            return t(this.container[0].ownerDocument).off("click.chosen", this.click_test_action), this.active_field = !1, this.results_hide(), this.container.removeClass("chosen-container-active"), this.clear_backstroke(), this.show_search_field_default(), this.search_field_scale(), this.search_field.blur()
        }, n.prototype.activate_field = function () {
            if (!this.is_disabled) return this.container.addClass("chosen-container-active"), this.active_field = !0, this.search_field.val(this.search_field.val()), this.search_field.focus()
        }, n.prototype.test_active_click = function (e) {
            var s;
            return (s = t(e.target).closest(".chosen-container")).length && this.container[0] === s[0] ? this.active_field = !0 : this.close_field()
        }, n.prototype.results_build = function () {
            return this.parsing = !0, this.selected_option_count = null, this.results_data = i.select_to_array(this.form_field), this.is_multiple ? this.search_choices.find("li.search-choice").remove() : (this.single_set_selected_text(), this.disable_search || this.form_field.options.length <= this.disable_search_threshold ? (this.search_field[0].readOnly = !0, this.container.addClass("chosen-container-single-nosearch")) : (this.search_field[0].readOnly = !1, this.container.removeClass("chosen-container-single-nosearch"))), this.update_results_content(this.results_option_build({first: !0})), this.search_field_disabled(), this.show_search_field_default(), this.search_field_scale(), this.parsing = !1
        }, n.prototype.result_do_highlight = function (t) {
            var e, s, i, n, r;
            if (t.length) {
                if (this.result_clear_highlight(), this.result_highlight = t, this.result_highlight.addClass("highlighted"), i = parseInt(this.search_results.css("maxHeight"), 10), r = this.search_results.scrollTop(), n = i + r, s = this.result_highlight.position().top + this.search_results.scrollTop(), (e = s + this.result_highlight.outerHeight()) >= n) return this.search_results.scrollTop(e - i > 0 ? e - i : 0);
                if (s < r) return this.search_results.scrollTop(s)
            }
        }, n.prototype.result_clear_highlight = function () {
            return this.result_highlight && this.result_highlight.removeClass("highlighted"), this.result_highlight = null
        }, n.prototype.results_show = function () {
            return this.is_multiple && this.max_selected_options <= this.choices_count() ? (this.form_field_jq.trigger("chosen:maxselected", {chosen: this}), !1) : (this.container.addClass("chosen-with-drop"), this.results_showing = !0, this.search_field.focus(), this.search_field.val(this.get_search_field_value()), this.winnow_results(), this.form_field_jq.trigger("chosen:showing_dropdown", {chosen: this}))
        }, n.prototype.update_results_content = function (t) {
            return this.search_results.html(t)
        }, n.prototype.results_hide = function () {
            return this.results_showing && (this.result_clear_highlight(), this.container.removeClass("chosen-with-drop"), this.form_field_jq.trigger("chosen:hiding_dropdown", {chosen: this})), this.results_showing = !1
        }, n.prototype.set_tab_index = function (t) {
            var e;
            if (this.form_field.tabIndex) return e = this.form_field.tabIndex, this.form_field.tabIndex = -1, this.search_field[0].tabIndex = e
        }, n.prototype.set_label_behavior = function () {
            if (this.form_field_label = this.form_field_jq.parents("label"), !this.form_field_label.length && this.form_field.id.length && (this.form_field_label = t("label[for='" + this.form_field.id + "']")), this.form_field_label.length > 0) return this.form_field_label.on("click.chosen", this.label_click_handler)
        }, n.prototype.show_search_field_default = function () {
            return this.is_multiple && this.choices_count() < 1 && !this.active_field ? (this.search_field.val(this.default_text), this.search_field.addClass("default")) : (this.search_field.val(""), this.search_field.removeClass("default"))
        }, n.prototype.search_results_mouseup = function (e) {
            var s;
            if ((s = t(e.target).hasClass("active-result") ? t(e.target) : t(e.target).parents(".active-result").first()).length) return this.result_highlight = s, this.result_select(e), this.search_field.focus()
        }, n.prototype.search_results_mouseover = function (e) {
            var s;
            if (s = t(e.target).hasClass("active-result") ? t(e.target) : t(e.target).parents(".active-result").first()) return this.result_do_highlight(s)
        }, n.prototype.search_results_mouseout = function (e) {
            if (t(e.target).hasClass("active-result") || t(e.target).parents(".active-result").first()) return this.result_clear_highlight()
        }, n.prototype.choice_build = function (e) {
            var s, i;
            return s = t("<li />", {"class": "search-choice"}).html("<span>" + this.choice_label(e) + "</span>"), e.disabled ? s.addClass("search-choice-disabled") : ((i = t("<a />", {
                "class": "search-choice-close",
                "data-option-array-index": e.array_index
            })).on("click.chosen", function (t) {
                return function (e) {
                    return t.choice_destroy_link_click(e)
                }
            }(this)), s.append(i)), this.search_container.before(s)
        }, n.prototype.choice_destroy_link_click = function (e) {
            if (e.preventDefault(), e.stopPropagation(), !this.is_disabled) return this.choice_destroy(t(e.target))
        }, n.prototype.choice_destroy = function (t) {
            if (this.result_deselect(t[0].getAttribute("data-option-array-index"))) return this.active_field ? this.search_field.focus() : this.show_search_field_default(), this.is_multiple && this.choices_count() > 0 && this.get_search_field_value().length < 1 && this.results_hide(), t.parents("li").first().remove(), this.search_field_scale()
        }, n.prototype.results_reset = function () {
            if (this.reset_single_select_options(), this.form_field.options[0].selected = !0, this.single_set_selected_text(), this.show_search_field_default(), this.results_reset_cleanup(), this.trigger_form_field_change(), this.active_field) return this.results_hide()
        }, n.prototype.results_reset_cleanup = function () {
            return this.current_selectedIndex = this.form_field.selectedIndex, this.selected_item.find("abbr").remove()
        }, n.prototype.result_select = function (t) {
            var e, s;
            if (this.result_highlight) return e = this.result_highlight, this.result_clear_highlight(), this.is_multiple && this.max_selected_options <= this.choices_count() ? (this.form_field_jq.trigger("chosen:maxselected", {chosen: this}), !1) : (this.is_multiple ? e.removeClass("active-result") : this.reset_single_select_options(), e.addClass("result-selected"), s = this.results_data[e[0].getAttribute("data-option-array-index")], s.selected = !0, this.form_field.options[s.options_index].selected = !0, this.selected_option_count = null, this.is_multiple ? this.choice_build(s) : this.single_set_selected_text(this.choice_label(s)), this.is_multiple && (!this.hide_results_on_select || t.metaKey || t.ctrlKey) ? t.metaKey || t.ctrlKey ? this.winnow_results({skip_highlight: !0}) : (this.search_field.val(""), this.winnow_results()) : (this.results_hide(), this.show_search_field_default()), (this.is_multiple || this.form_field.selectedIndex !== this.current_selectedIndex) && this.trigger_form_field_change({selected: this.form_field.options[s.options_index].value}), this.current_selectedIndex = this.form_field.selectedIndex, t.preventDefault(), this.search_field_scale())
        }, n.prototype.single_set_selected_text = function (t) {
            return null == t && (t = this.default_text), t === this.default_text ? this.selected_item.addClass("chosen-default") : (this.single_deselect_control_build(), this.selected_item.removeClass("chosen-default")), this.selected_item.find("span").html(t)
        }, n.prototype.result_deselect = function (t) {
            var e;
            return e = this.results_data[t], !this.form_field.options[e.options_index].disabled && (e.selected = !1, this.form_field.options[e.options_index].selected = !1, this.selected_option_count = null, this.result_clear_highlight(), this.results_showing && this.winnow_results(), this.trigger_form_field_change({deselected: this.form_field.options[e.options_index].value}), this.search_field_scale(), !0)
        }, n.prototype.single_deselect_control_build = function () {
            if (this.allow_single_deselect) return this.selected_item.find("abbr").length || this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>'), this.selected_item.addClass("chosen-single-with-deselect")
        }, n.prototype.get_search_field_value = function () {
            return this.search_field.val()
        }, n.prototype.get_search_text = function () {
            return t.trim(this.get_search_field_value())
        }, n.prototype.escape_html = function (e) {
            return t("<div/>").text(e).html()
        }, n.prototype.winnow_results_set_highlight = function () {
            var t, e;
            if (e = this.is_multiple ? [] : this.search_results.find(".result-selected.active-result"), null != (t = e.length ? e.first() : this.search_results.find(".active-result").first())) return this.result_do_highlight(t)
        }, n.prototype.no_results = function (t) {
            var e;
            return e = this.get_no_results_html(t), this.search_results.append(e), this.form_field_jq.trigger("chosen:no_results", {chosen: this})
        }, n.prototype.no_results_clear = function () {
            return this.search_results.find(".no-results").remove()
        }, n.prototype.keydown_arrow = function () {
            var t;
            return this.results_showing && this.result_highlight ? (t = this.result_highlight.nextAll("li.active-result").first()) ? this.result_do_highlight(t) : void 0 : this.results_show()
        }, n.prototype.keyup_arrow = function () {
            var t;
            return this.results_showing || this.is_multiple ? this.result_highlight ? (t = this.result_highlight.prevAll("li.active-result")).length ? this.result_do_highlight(t.first()) : (this.choices_count() > 0 && this.results_hide(), this.result_clear_highlight()) : void 0 : this.results_show()
        }, n.prototype.keydown_backstroke = function () {
            var t;
            return this.pending_backstroke ? (this.choice_destroy(this.pending_backstroke.find("a").first()), this.clear_backstroke()) : (t = this.search_container.siblings("li.search-choice").last()).length && !t.hasClass("search-choice-disabled") ? (this.pending_backstroke = t, this.single_backstroke_delete ? this.keydown_backstroke() : this.pending_backstroke.addClass("search-choice-focus")) : void 0
        }, n.prototype.clear_backstroke = function () {
            return this.pending_backstroke && this.pending_backstroke.removeClass("search-choice-focus"), this.pending_backstroke = null
        }, n.prototype.search_field_scale = function () {
            var e, s, i, n, r, o, h;
            if (this.is_multiple) {
                for (r = {
                    position: "absolute",
                    left: "-1000px",
                    top: "-1000px",
                    display: "none",
                    whiteSpace: "pre"
                }, s = 0, i = (o = ["fontSize", "fontStyle", "fontWeight", "fontFamily", "lineHeight", "textTransform", "letterSpacing"]).length; s < i; s++) r[n = o[s]] = this.search_field.css(n);
                return (e = t("<div />").css(r)).text(this.get_search_field_value()), t("body").append(e), h = e.width() + 25, e.remove(), this.container.is(":visible") && (h = Math.min(this.container.outerWidth() - 10, h)), this.search_field.width(h)
            }
        }, n.prototype.trigger_form_field_change = function (t) {
            return this.form_field_jq.trigger("input", t), this.form_field_jq.trigger("change", t)
        }, n
    }()
}).call(this);
jQuery(document).ready(function (a) {
    jQuery(".select-option").on("change", function () {
        var t = a(".js-category").val(), e = a(".js-date").val();
        data = {action: "filterposts", category: t, date: e}, a.ajax({
            url: my_ajax_object.ajax_url,
            data: data,
            type: "POST",
            beforeSend: function (t) {
                a(".filtered-posts").html("Loading..."), a(".js-category").attr("disabled", "disabled"), a(".js-date").attr("disabled", "disabled")
            },
            success: function (t) {
                t ? (a(".filtered-posts").html(t.posts), a(".js-category").removeAttr("disabled"), a(".js-date").removeAttr("disabled")) : a(".filtered-posts").html("No posts found.")
            }
        })
    }), a(function () {
        a(".js-category").change(function () {
            a(".trending-articles").hide(), a("#" + a(this).val()).show()
        })
    })
});

!function () {
    "use strict";
    jQuery(document).ready((function (t) {
        t(".wpstg-install-message").hide(), t("#wpstg-activate-free").on("click", (function (e) {
            e.preventDefault(), t(".wpstg-install-message").hide();
            var a = t(this), s = a.text();
            a.attr("disabled", !0), a.text("Activating, please wait..."), t.post(ajaxurl, {
                action: "wpstg_install_free",
                nonce: t(this).data("nonce")
            }, (function (e) {
                e.success ? window.location.href = e.data.url : (t(".wpstg-install-message").show(), e.data ? t(".wpstg-install-message").html(e.data) : t(".wpstg-install-message").html("Error: Failed to install the WP STAGING core plugin for unknown reason. Please try again or contact support@wp-staging.com!"), a.text(s), a.removeAttr("disabled"))
            }))
        }))
    }))
}();
//# sourceMappingURL=wpstg-admin-all-pages.min.js.map
