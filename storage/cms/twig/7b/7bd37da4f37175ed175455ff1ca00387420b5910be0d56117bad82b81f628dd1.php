<?php

/* E:\workspace\shawen\install-master/plugins/october/demo/components/gdmap/default.htm */
class __TwigTemplate_c09c9c6cb76cbc99279aa98054a8b59cba6c5fb8f2477652b6f80fbde157dc87 extends Twig_Template
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

    .amap-container {
        height: 100%;
    }
</style>
<div id=\"wrap\" class=\"my-map\">
    <div id=\"mapContainer-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "id"), "method"), "html", null, true);
        echo "\" style='width:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
        echo ";height:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
        echo "'></div>
</div>
<!-- <script src=\"//webapi.amap.com/maps?v=1.3&key=8325164e247e15eea68b59e89200988b\"></script> -->
<script>
    \$(function(){
    !function () {
        var infoWindow, map, level = 8,
            center = { lng: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "lng"), "method"), "html", null, true);
        echo ", lat: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "lat"), "method"), "html", null, true);
        echo "},
    features = [];

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
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "id"), "method"), "html", null, true);
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
        return "E:\\workspace\\shawen\\install-master/plugins/october/demo/components/gdmap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 66,  47 => 20,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .my-map {
        margin: 0 auto;
        width: 100%;
        height: 400px;
    }

    .amap-container {
        height: 100%;
    }
</style>
<div id=\"wrap\" class=\"my-map\">
    <div id=\"mapContainer-{{ __SELF__.property('id') }}\" style='width:{{ __SELF__.property('width') }};height:{{ __SELF__.property('height') }}'></div>
</div>
<!-- <script src=\"//webapi.amap.com/maps?v=1.3&key=8325164e247e15eea68b59e89200988b\"></script> -->
<script>
    \$(function(){
    !function () {
        var infoWindow, map, level = 8,
            center = { lng: {{ __SELF__.property('lng') }}, lat: {{ __SELF__.property('lat') }}},
    features = [];

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

    map = new AMap.Map(\"mapContainer-{{ __SELF__.property('id') }}\", { center: new AMap.LngLat(center.lng, center.lat), level: level });

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
</script>", "E:\\workspace\\shawen\\install-master/plugins/october/demo/components/gdmap/default.htm", "");
    }
}
