$(document).ready((function () {
	var t = $("#quiz"),
		e = t.find(".quiz-steps"),
		i = t.find(".quiz-title"),
		s = t.find(".quiz-info"),
		a = t.find(".steps-block"),
		n = ($(".presents_final"), $(".quiz-info .presents"), $("#quiz-total")),
		l = $("#quiz-num"),
		d = e.find(".step").length ,
		o = 100 / d * 1,
		r = i.find(".line span"),
		c = t.find(".quiz-final"),
		u = $(".next-question"),
		f = $(".prev-question"),
		v = $(".next-question.first"),
		p = $(".quiz-block .quiz-steps .step .answers label");

	function m() {
		var t = e.find(".active").data("num"),
			i = 100 / d * t;
		r.css("width", i + "%"), l.html(t)
	}
	n.html(d), r.css("width", o + "%"), u.on("click", (function () {
		1 == e.find(".active").hasClass("last") ? (a.hide(), s.hide(), c.show(), r.css("width", "100%"), l.html(d)) : (e.find(".active").removeClass("active").next().addClass("active"), v.addClass("disabled"), f.removeClass("disabled"), m())
	})), u.on("click", (function () {
		e.find(".active").hasClass("last")
	})), f.on("click", (function () {
		"1" == e.find(".active").prev().data("num") ? (f.addClass("disabled"), e.find(".active").removeClass("active").prev().addClass("active"), v.removeClass("disabled"), m()) : (f.show(), e.find(".active").removeClass("active").prev().addClass("active"), v.removeClass("disabled"), m())
	})), p.on("click", (function () {
		v.removeClass("disabled")
	})), $(".sl").on("click", (function () {
		var t = $(this).attr("href"),
			e = t.replace("#", "."),
			i = $(e).offset().top;
		return void 0 !== t && "" !== t && $("html, body").animate({
			scrollTop: i - 113
		}, 700), !1
	})), $("form").submit((function () {
		var t = this;
		if (this.form && !this.form.value) return this.form.focus(), !1;
		var e = $(t).find('button[type="submit"]').text();
		return $(t).find('button[type="submit"]').text("Отправка...").attr("disabled", "disabled"), $.ajax({
			type: "POST",
			url: $(this).attr("action") || "send.php",
			data: $(this).serialize(),
			success: function (t) {
				"1" == t ? ($('input[type="text"], input[type="tel"]').val(""), $.fancybox.open({
					src: "#thanks",
					type: "inline"
				}), ym(87284396, "reachGoal", "zayavka1")) : alert(t)
			},
			error: function () {
				// alert("Network Error")
			},
			complete: function () {
				$(t).find('button[type="submit"]').text(e).removeAttr("disabled")
			}
		}), !1
	}))




}));