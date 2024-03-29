/*
 *  passtrength - v1.0.0
 *  passtrength
 *  passtrength
 *
 *  Made by @adrisorribas
 *  Under MIT License
 */
! function(a, b, c, d) {
    function e(b, c) { this.element = b, this.$elem = a(this.element), this.options = a.extend({}, g, c), this._defaults = g, this._name = f, _this = this, this.init() } var f = "passtrength",
        g = { minChars: 8, passwordToggle: !0, tooltip: !0, textWeak: "Weak", textMedium: "Medium", textStrong: "Strong", textVeryStrong: "Very Strong", eyeImg: "img/eye.svg" };
    e.prototype = { init: function() { var b = this,
                c = jQuery("<div/>", { class: "passtrengthMeter" }),
                d = jQuery("<div/>", { class: "tooltip", text: "Min " + this.options.minChars + " chars" }); if (c.insertAfter(this.element), a(this.element).appendTo(c), this.options.tooltip) { d.appendTo(c); var e = d.outerWidth() / 2;
                d.css("margin-left", -e) }
            this.$elem.bind("keyup keydown", function() { value = a(this).val(), b.check(value) }), this.options.passwordToggle && b.togglePassword() }, check: function(a) { var b = 0,
                c = 0,
                d = 0,
                e = 0,
                f = 0;
            upperCase = new RegExp("[A-Z]"), e = new RegExp("[0-9]"), specialchars = new RegExp("([!,%,&,@,#,$,^,*,?,_,~])"), c = a.length >= this.options.minChars ? 1 : -1, d = a.match(upperCase) ? 1 : 0, e = a.match(e) ? 1 : 0, f = a.match(specialchars) ? 1 : 0, b = c + d + e + f, securePercentage = b / 4 * 100, this.addStatus(securePercentage) }, addStatus: function(b) { var c = "",
                d = "Min " + this.options.minChars + " chars",
                e = a(this.element).closest(".passtrengthMeter"),
                f = e.find(".tooltip");
            e.attr("class", "passtrengthMeter"), b >= 25 && (e.attr("class", "passtrengthMeter"), c = "weak", d = this.options.textWeak), b >= 50 && (e.attr("class", "passtrengthMeter"), c = "medium", d = this.options.textMedium), b >= 75 && (e.attr("class", "passtrengthMeter"), c = "strong", d = this.options.textStrong), b >= 100 && (e.attr("class", "passtrengthMeter"), c = "very-strong", d = this.options.textVeryStrong), e.addClass(c), this.options.tooltip && f.text(d) }, togglePassword: function() { var b = jQuery("<span/>", { class: "showPassword", html: "<img src=" + this.options.eyeImg + " />" }),
                d = jQuery("<input/>", { type: "text" }),
                e = this;
            b.appendTo(a(this.element).closest(".passtrengthMeter")), d.appendTo(a(this.element).closest(".passtrengthMeter")).hide(), a(this.element).bind("keyup keydown", function() { d.val(a(e.element).val()) }), d.bind("keyup keydown", function() { a(e.element).val(d.val()), value = a(this).val(), _this.check(value) }), a(c).on("click", ".showPassword", function() { b.toggleClass("active"), d.toggle(), a(e.element).toggle() }) } }, a.fn[f] = function(b) { return this.each(function() { a.data(this, "plugin_" + f) || a.data(this, "plugin_" + f, new e(this, b)) }) } }(jQuery, window, document);