!function (e) {
    "use strict";
    var a = function () {
    };
    a.prototype.createStackedChart = function (e, a, t, r, i, o) {
        Morris.Bar({
            element: e,
            data: a,
            xkey: t,
            ykeys: r,
            stacked: !0,
            labels: i,
            hideHover: "auto",
            resize: !0,
            gridLineColor: "#eeeeee",
            barColors: o
        })
    }, a.prototype.createAreaChart = function (e, a, t, r, i, o, y, n, b) {
        Morris.Area({
            element: e,
            pointSize: a,
            lineWidth: t,
            data: r,
            xkey: i,
            ykeys: o,
            labels: y,
            fillOpacity: n,
            hideHover: "auto",
            resize: !0,
            gridLineColor: "#eef0f2",
            lineColors: b
        })
    }, a.prototype.createLineChart = function (e, a, t, r, i, o, y, n, b) {
        Morris.Line({
            element: e,
            data: a,
            xkey: t,
            ykeys: r,
            labels: i,
            fillOpacity: o,
            pointFillColors: y,
            pointStrokeColors: n,
            behaveLikeLine: !0,
            gridLineColor: "#eef0f2",
            hideHover: "auto",
            lineWidth: "3px",
            pointSize: 0,
            preUnits: "$",
            resize: !0,
            lineColors: b
        })
    }, a.prototype.createBarChart = function (e, a, t, r, i, o) {
        Morris.Bar({
            element: e,
            data: a,
            xkey: t,
            ykeys: r,
            labels: i,
            hideHover: "auto",
            resize: !0,
            gridLineColor: "#eeeeee",
            barSizeRatio: .4,
            xLabelAngle: 35,
            barColors: o
        })
    }, a.prototype.createAreaChartDotted = function (e, a, t, r, i, o, y, n, b, c) {
        Morris.Area({
            element: e,
            pointSize: 3,
            lineWidth: 1,
            data: r,
            xkey: i,
            ykeys: o,
            labels: y,
            hideHover: "auto",
            pointFillColors: n,
            pointStrokeColors: b,
            resize: !0,
            smooth: !1,
            behaveLikeLine: !0,
            fillOpacity: .4,
            gridLineColor: "#eef0f2",
            lineColors: c
        })
    }, a.prototype.createDonutChart = function (e, a, t) {
        Morris.Donut({element: e, data: a, barSize: .2, resize: !0, colors: t})
    }, a.prototype.init = function () {
        this.createStackedChart("morris-bar-stacked", [{y: "2007", a: 45, b: 180, c: 100}, {
            y: "2008",
            a: 75,
            b: 65,
            c: 80
        }, {y: "2009", a: 100, b: 90, c: 56}, {y: "2010", a: 75, b: 65, c: 89}, {
            y: "2011",
            a: 100,
            b: 90,
            c: 120
        }, {y: "2012", a: 75, b: 65, c: 110}, {y: "2013", a: 50, b: 40, c: 85}, {
            y: "2014",
            a: 75,
            b: 65,
            c: 52
        }, {y: "2015", a: 50, b: 40, c: 77}, {y: "2016", a: 75, b: 65, c: 90}, {
            y: "2017",
            a: 100,
            b: 90,
            c: 130
        }, {
            y: "2018",
            a: 80,
            b: 65,
            c: 95
        }], "y", ["a", "b", "c"], ["Bitcoin", "Ethereum", "Litecoin"], ["#7266ba", "#f672a7", "#e3eaef"]);
        this.createAreaChart("morris-area-example", 0, 0, [{y: "2012", a: 10, b: 20}, {
            y: "2013",
            a: 75,
            b: 65
        }, {y: "2014", a: 50, b: 40}, {y: "2015", a: 75, b: 65}, {y: "2016", a: 50, b: 40}, {
            y: "2017",
            a: 75,
            b: 65
        }, {y: "2018", a: 90, b: 60}], "y", ["a", "b"], ["Bitcoin", "Ethereum"], ["1"], ["#f672a7", "#e3eaef"]);
        this.createLineChart("morris-line-example", [{y: "2010", a: 50, b: 0}, {y: "2011", a: 75, b: 50}, {
            y: "2012",
            a: 30,
            b: 80
        }, {y: "2013", a: 50, b: 50}, {y: "2014", a: 75, b: 10}, {y: "2015", a: 50, b: 40}, {
            y: "2016",
            a: 75,
            b: 50
        }, {
            y: "2017",
            a: 100,
            b: 70
        }], "y", ["a", "b"], ["Bitcoin", "Ethereum"], ["0.1"], ["#ffffff"], ["#999999"], ["#7266ba", "#f672a7"]);
        this.createBarChart("morris-bar-example", [{y: "2012", a: 100, b: 90, c: 40}, {
            y: "2013",
            a: 75,
            b: 65,
            c: 20
        }, {y: "2014", a: 50, b: 40, c: 50}, {y: "2015", a: 75, b: 65, c: 95}, {
            y: "2016",
            a: 50,
            b: 40,
            c: 22
        }, {y: "2017", a: 75, b: 65, c: 56}, {
            y: "2018",
            a: 100,
            b: 90,
            c: 60
        }], "y", ["a", "b", "c"], ["Bitcoin", "Ethereum", "Litecoin"], ["#7266ba", "#f672a7", "#ebeff2"]);
        this.createAreaChartDotted("morris-area-with-dotted", 0, 0, [{y: "2012", a: 10, b: 20}, {
            y: "2013",
            a: 75,
            b: 65
        }, {y: "2014", a: 50, b: 40}, {y: "2015", a: 75, b: 65}, {y: "2016", a: 50, b: 40}, {
            y: "2017",
            a: 75,
            b: 65
        }, {
            y: "2018",
            a: 90,
            b: 60
        }], "y", ["a", "b"], ["Bitcoin", "Litecoin"], ["#ffffff"], ["#999999"], ["#e3eaef", "#f672a7"]);
        this.createDonutChart("morris-donut-example", [{label: "Ethereum", value: 12}, {
            label: "Bitcoin",
            value: 30
        }, {label: "Litecoin", value: 20}], ["#7266ba", "#f672a7", "#ebeff2"])
    }, e.MorrisCharts = new a, e.MorrisCharts.Constructor = a
}(window.jQuery), function (e) {
    "use strict";
    window.jQuery.MorrisCharts.init()
}();
