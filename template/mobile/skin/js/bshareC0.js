(function() {
	function q() {
		for (g in a.pnMap) j = a.topMap[g] * -18, k += ".bshare-custom .bshare-" + g + '{background:url("' + n + (j ? "sprite/top_logos_sprite" + l + '") no-repeat 0 ' + j + "px;" : g + l + '") no-repeat;') + "*display:inline;display:inline-block;}";
		k += '.bshare-custom #bshare-more-icon,.bshare-custom .bshare-more-icon{background:url("' + n + "more" + l + '") no-repeat;padding-left:19px;}.bshare-custom .bshare-share-count{width:41px;background:transparent url(' + a.imageBasePath + "counter_box_18.gif) no-repeat;height:18px;line-height:18px !important;color:#333;text-align:center;font:bold 11px Arial,\u5b8b\u4f53,sans-serif;*display:inline;display:inline-block;zoom:1;_padding-top:2px;}.bshare-custom .bshareDiv{*display:inline;display:inline-block;}";
		f.loadStyle(k);
		if (!a.anchorsBinded) {
			a.anchorsBinded = !0;
			for (var c = f.getElem(o, "div", "bshare-custom"), p = function(d) {
					if (!d) d = m.event;
					var b = d.target ? d.target : d.srcElement;
					if (b) {
						for (var f = b.className.split(" "), b = b.buttonIndex, c, e = 0; e < f.length; e++) if (/^bshare-/.test(f[e])) {
							c = f[e].slice(7);
							break
						}
						if (!c) return !1;
						if (c == "more") {
							if (h.pop == -2) return !1;
							a.more(d);
							d.preventDefault ? d.preventDefault() : d.returnValue = !1;
							return !1
						}
						a.share(d, c, b);
						return !1
					}
				}, i = 0; i < c.length; i++) for (var e = c[i].getElementsByTagName("a"), b = 0; b < e.length; b++) e[b].buttonIndex = i, e[b].href = "javascript:;", o.addEventListener ? e[b].addEventListener("click", p, !1) : e[b].attachEvent("onclick", p)
		}
	}
	var m = window,
		f = m.bShareUtil,
		a = m.bShare,
		h = a.config,
		n = a.imageBasePath + "logos/s4/",
		g, j, l = f.isIe ? ".gif" : ".png",
		o = document,
		k = ".bshare-custom{font-size:13px;line-height:16px !important;}.bshare-custom a{text-decoration:none;display:none;zoom:1;height:16px;_height:18px;vertical-align:middle;cursor:pointer;color:#2e3192;padding-left:19px;margin-right:3px;filter:alpha(opacity=100);-moz-opacity:1;-khtml-opacity:1;opacity:1;}*+html .bshare-custom a{height:16px}.bshare-custom a:hover{text-decoration:underline;filter:alpha(opacity=75);-moz-opacity:0.75;-khtml-opacity:0.75;opacity:0.75;}.bshare-custom .bshare-more{padding-left:0;color:#000;*display:inline;display:inline-block;}.bshare-custom #bshare-shareto{text-decoration:none;font-weight:bold;margin-right:8px;*display:inline;display:inline-block;}";
	f.ready(function() {
		var c = function() {
				a.completed ? (q(), a.params.type != 15 && h.pop != -1 && !h.beta && !h.popjs && f.loadScript(a.jsBasePath + "styles/bshareS887.js?v=20150603")) : setTimeout(c, 50)
			};
		c()
	})
})();