<?php

/* E:\workspace\shawen\install-master/themes/hd/partials/gdmap.htm */
class __TwigTemplate_e9e0f04c0f385bc56baac7aaddb13fa9bbd3b45c802b352454dfb6e18bcec059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
    .my-map {
        margin: 0 auto;
        width: 100%;
        height: 400px;
    }

.my-map .icon { background: url(http://lbs.amap.com/console/public/show/marker.png) no-repeat; }
\t\t.my-map .icon-cir { height: 31px; width: 28px; }
\t\t.my-map .icon-cir-red { background-position: -11px -5px; }
    .amap-container {
        height: 100%;
    }
</style>
<div id=\"wrap\" class=\"my-map\">
    <div id=\"mapContainer-";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" style='width:";
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo ";height:";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "'></div>
</div>
<script src=\"//webapi.amap.com/maps?v=1.3&key=8325164e247e15eea68b59e89200988b\"></script>
<script>
    \$(function(){
    !function () {
        var infoWindow, map, level = 18,
            center = { lng: ";
        // line 23
        echo twig_escape_filter($this->env, ($context["lng"] ?? null), "html", null, true);
        echo ", lat: ";
        echo twig_escape_filter($this->env, ($context["lat"] ?? null), "html", null, true);
        echo "},
    features = [{type: \"Marker\", name: \"";
        // line 24
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\", desc: \"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\", color: \"red\", icon: \"cir\", offset: {x: -9, y: -20}, lnglat: {lng: ";
        echo twig_escape_filter($this->env, ($context["lng"] ?? null), "html", null, true);
        echo ", lat: ";
        echo twig_escape_filter($this->env, ($context["lat"] ?? null), "html", null, true);
        echo " } }];

    function loadFeatures() {
        for (var feature, data, i = 0, len = features.length, j, jl, path; i < len; i++) {
            data = features[i];
            switch (data.type) {
                case \"Marker\":
                    feature = new AMap.Marker({
                        map: map, position: new AMap.LngLat(data.lnglat.lng, data.lnglat.lat),
                        zIndex: 3, extData: data, offset: new AMap.Pixel(data.offset.x, data.offset.y), title: data.name,
                        content: '<div class=\"icon icon-' + data.icon + ' icon-' + data.icon + '-' + data.color + '\"></div>'
                    });
                    break;
                case \"Polyline\":
                    for (j = 0, jl = data.lnglat.length, path = []; j < jl; j++) {
                        path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                    }
                    feature = new AMap.Polyline({
                        map: map, path: path, extData: data, zIndex: 2,
                        strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity
                    });
                    break;
                case \"Polygon\":
                    for (j = 0, jl = data.lnglat.length, path = []; j < jl; j++) {
                        path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                    }
                    feature = new AMap.Polygon({
                        map: map, path: path, extData: data, zIndex: 1,
                        strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity,
                        fillColor: data.fillColor, fillOpacity: data.fillOpacity
                    });
                    break;
                default: feature = null;
            }
            if (feature) { AMap.event.addListener(feature, \"click\", mapFeatureClick); }
        }
    }

    function mapFeatureClick(e) {
        if (!infoWindow) { infoWindow = new AMap.InfoWindow({ autoMove: true }); }
        var extData = e.target.getExtData();
        infoWindow.setContent(\"<h5>\" + extData.name + \"</h5><div>\" + extData.desc + \"</div>\");
        infoWindow.open(map, e.lnglat);
    }

    map = new AMap.Map(\"mapContainer-";
        // line 69
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\", { center: new AMap.LngLat(center.lng, center.lat), level: level });

    loadFeatures();

    map.on('complete', function () {
        map.plugin([\"AMap.ToolBar\", \"AMap.OverView\", \"AMap.Scale\"], function () {
            map.addControl(new AMap.ToolBar);
            map.addControl(new AMap.OverView({ isOpen: true }));
            map.addControl(new AMap.Scale);
        });
    })
            
        }();
    })
</script>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/partials/gdmap.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 69,  56 => 24,  50 => 23,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .my-map {
        margin: 0 auto;
        width: 100%;
        height: 400px;
    }

.my-map .icon { background: url(http://lbs.amap.com/console/public/show/marker.png) no-repeat; }
\t\t.my-map .icon-cir { height: 31px; width: 28px; }
\t\t.my-map .icon-cir-red { background-position: -11px -5px; }
    .amap-container {
        height: 100%;
    }
</style>
<div id=\"wrap\" class=\"my-map\">
    <div id=\"mapContainer-{{ id }}\" style='width:{{ width }};height:{{ height }}'></div>
</div>
<script src=\"//webapi.amap.com/maps?v=1.3&key=8325164e247e15eea68b59e89200988b\"></script>
<script>
    \$(function(){
    !function () {
        var infoWindow, map, level = 18,
            center = { lng: {{ lng }}, lat: {{ lat }}},
    features = [{type: \"Marker\", name: \"{{name}}\", desc: \"{{description}}\", color: \"red\", icon: \"cir\", offset: {x: -9, y: -20}, lnglat: {lng: {{lng}}, lat: {{lat}} } }];

    function loadFeatures() {
        for (var feature, data, i = 0, len = features.length, j, jl, path; i < len; i++) {
            data = features[i];
            switch (data.type) {
                case \"Marker\":
                    feature = new AMap.Marker({
                        map: map, position: new AMap.LngLat(data.lnglat.lng, data.lnglat.lat),
                        zIndex: 3, extData: data, offset: new AMap.Pixel(data.offset.x, data.offset.y), title: data.name,
                        content: '<div class=\"icon icon-' + data.icon + ' icon-' + data.icon + '-' + data.color + '\"></div>'
                    });
                    break;
                case \"Polyline\":
                    for (j = 0, jl = data.lnglat.length, path = []; j < jl; j++) {
                        path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                    }
                    feature = new AMap.Polyline({
                        map: map, path: path, extData: data, zIndex: 2,
                        strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity
                    });
                    break;
                case \"Polygon\":
                    for (j = 0, jl = data.lnglat.length, path = []; j < jl; j++) {
                        path.push(new AMap.LngLat(data.lnglat[j].lng, data.lnglat[j].lat));
                    }
                    feature = new AMap.Polygon({
                        map: map, path: path, extData: data, zIndex: 1,
                        strokeWeight: data.strokeWeight, strokeColor: data.strokeColor, strokeOpacity: data.strokeOpacity,
                        fillColor: data.fillColor, fillOpacity: data.fillOpacity
                    });
                    break;
                default: feature = null;
            }
            if (feature) { AMap.event.addListener(feature, \"click\", mapFeatureClick); }
        }
    }

    function mapFeatureClick(e) {
        if (!infoWindow) { infoWindow = new AMap.InfoWindow({ autoMove: true }); }
        var extData = e.target.getExtData();
        infoWindow.setContent(\"<h5>\" + extData.name + \"</h5><div>\" + extData.desc + \"</div>\");
        infoWindow.open(map, e.lnglat);
    }

    map = new AMap.Map(\"mapContainer-{{ id }}\", { center: new AMap.LngLat(center.lng, center.lat), level: level });

    loadFeatures();

    map.on('complete', function () {
        map.plugin([\"AMap.ToolBar\", \"AMap.OverView\", \"AMap.Scale\"], function () {
            map.addControl(new AMap.ToolBar);
            map.addControl(new AMap.OverView({ isOpen: true }));
            map.addControl(new AMap.Scale);
        });
    })
            
        }();
    })
</script>", "E:\\workspace\\shawen\\install-master/themes/hd/partials/gdmap.htm", "");
    }
}
