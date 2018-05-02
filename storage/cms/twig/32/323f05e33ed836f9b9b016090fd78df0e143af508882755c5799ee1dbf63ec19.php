<?php

/* E:\workspace\shawen\install-master/themes/hd/pages/index.htm */
class __TwigTemplate_d9268e4a2efb62177bc7535f11c86e6a46edc07ab18e84bf52499dd8c71a0a42 extends Twig_Template
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
        echo "<div class=\"swiper-container gallery\">
    <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\">
            <!-- <div class=\"slide-inner\">
                <h2 class='am-text-white'>Hello,world</h2>
            </div> -->
            <img src=\"/themes/hd/assets/images/banner.jpg\" />
        </div>
       <!--  <div class=\"swiper-slide\">
           <img src=\"https://www.hodakatec.com/data/files/home/gallery/1483610725943437381.jpg\" />
       </div> -->
    </div>
    
    <!-- 如果需要导航按钮 -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
</div>
    <div class=\"am-container\">
        <p class=\"am-text-primary am-text-center i-caption\">COMPANY PROFILE</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">广州和德</span>
        </div>

        <div class=\"am-g img-max-100\">
            <div class=\"am-u-lg-5 am-u-sm-12\">
                <p>
                    <img src=\"/themes/hd/assets/css/about-hede-home.jpg\">
                </p>
            </div>
            <div class=\"am-u-lg-7 am-u-sm-12 text-indent\">
               ";
        // line 31
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("static-pages/hede"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 32
        echo "            </div>
        </div>

        <p class=\"am-text-primary am-text-center i-caption\">NEWS CENTER</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">最新消息</span>
        </div>

        <div class=\"am-g img-max-100\">
            ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newslist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    
        </div>
    </div>
    <div class=\"product\">
        <div class=\"am-container\">
            <div class=\"am-g\">
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img1.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">400T液态模锻设备列</p>
                    <p class=\"summary\">HVSC400T卧式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img2.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">650T液态模锻设备</p>
                    <p class=\"summary\">VSC650T立式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img3.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">800T液态模锻设备</p>
                    <p class=\"summary\">HVSC800T卧式&HVSC800T立式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"/themes/hd/assets/images/1469502978920535.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">1250T液态模锻设备</p>
                    <p class=\"summary\">HVSC1250T卧式&HVSC1250T立式</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"am-container sm-no-padding\">
        <p class=\"am-text-primary am-text-center i-caption\">PRODUCT APPLICATION</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">产品应用</span>
        </div>

        <div class='scroll'>
            <ul class=\"transform-square am-cf\">
                <div class=\"am-g\">
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"";
        // line 90
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/track");
        echo "\" class=\"icon\" title='轨道交通'>
                                <img src=\"/themes/hd/assets/images/product-icon-1.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform1.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"";
        // line 101
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/health");
        echo "\" class=\"icon\" title='健康运动'>
                                <img src=\"/themes/hd/assets/images/product-icon-2.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform2.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"";
        // line 112
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/road");
        echo "\" class=\"icon\" title='公路运输'>
                                <img src=\"/themes/hd/assets/images/product-icon-3.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform3.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"";
        // line 123
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/communication");
        echo "\" class=\"icon\" title='通讯'>
                                <img src=\"/themes/hd/assets/images/product-icon-4.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform4.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"";
        // line 134
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/machine");
        echo "\" class=\"icon\" title='机械'>
                                <img src=\"/themes/hd/assets/images/product-icon-5.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform-5.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"";
        // line 145
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("product/product-other");
        echo "\" class=\"icon\" title='其他'>
                                <img src=\"/themes/hd/assets/images/product-icon-6.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform-6.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
   <script type=\"text/javascript\">
    window.onload = function(){
         var swiper = new Swiper('.gallery',{
             autoplay:true,
             effect:'fade',
             loop:true,
             autoHeight:true,
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
             })
    }
    </script>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 145,  176 => 134,  162 => 123,  148 => 112,  134 => 101,  120 => 90,  66 => 41,  55 => 32,  51 => 31,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"swiper-container gallery\">
    <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\">
            <!-- <div class=\"slide-inner\">
                <h2 class='am-text-white'>Hello,world</h2>
            </div> -->
            <img src=\"/themes/hd/assets/images/banner.jpg\" />
        </div>
       <!--  <div class=\"swiper-slide\">
           <img src=\"https://www.hodakatec.com/data/files/home/gallery/1483610725943437381.jpg\" />
       </div> -->
    </div>
    
    <!-- 如果需要导航按钮 -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
</div>
    <div class=\"am-container\">
        <p class=\"am-text-primary am-text-center i-caption\">COMPANY PROFILE</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">广州和德</span>
        </div>

        <div class=\"am-g img-max-100\">
            <div class=\"am-u-lg-5 am-u-sm-12\">
                <p>
                    <img src=\"/themes/hd/assets/css/about-hede-home.jpg\">
                </p>
            </div>
            <div class=\"am-u-lg-7 am-u-sm-12 text-indent\">
               {% content 'static-pages/hede' %}
            </div>
        </div>

        <p class=\"am-text-primary am-text-center i-caption\">NEWS CENTER</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">最新消息</span>
        </div>

        <div class=\"am-g img-max-100\">
            {% component 'newslist' %}    
        </div>
    </div>
    <div class=\"product\">
        <div class=\"am-container\">
            <div class=\"am-g\">
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img1.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">400T液态模锻设备列</p>
                    <p class=\"summary\">HVSC400T卧式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img2.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">650T液态模锻设备</p>
                    <p class=\"summary\">VSC650T立式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"https://www.hodakatec.com/themes/zh-tw/assets/images/img3.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">800T液态模锻设备</p>
                    <p class=\"summary\">HVSC800T卧式&HVSC800T立式</p>
                </div>
                <div class=\"product-item am-u-sm-12 am-u-lg-3\">
                    <div class=\"cover\">
                        <img src=\"/themes/hd/assets/images/1469502978920535.jpg\" alt=\"\">
                    </div>
                    <p class=\"caption\">1250T液态模锻设备</p>
                    <p class=\"summary\">HVSC1250T卧式&HVSC1250T立式</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"am-container sm-no-padding\">
        <p class=\"am-text-primary am-text-center i-caption\">PRODUCT APPLICATION</p>
        <div class='i-caption-complex'>
            <span class=\"i-caption am-text-primary am-text-center\">产品应用</span>
        </div>

        <div class='scroll'>
            <ul class=\"transform-square am-cf\">
                <div class=\"am-g\">
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"{{ 'product/track'|app }}\" class=\"icon\" title='轨道交通'>
                                <img src=\"/themes/hd/assets/images/product-icon-1.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform1.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"{{ 'product/health'|app }}\" class=\"icon\" title='健康运动'>
                                <img src=\"/themes/hd/assets/images/product-icon-2.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform2.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"{{ 'product/road'|app }}\" class=\"icon\" title='公路运输'>
                                <img src=\"/themes/hd/assets/images/product-icon-3.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform3.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"{{ 'product/communication'|app }}\" class=\"icon\" title='通讯'>
                                <img src=\"/themes/hd/assets/images/product-icon-4.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform4.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li>
                            <a href=\"{{ 'product/machine'|app }}\" class=\"icon\" title='机械'>
                                <img src=\"/themes/hd/assets/images/product-icon-5.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform-5.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                    <div class=\"am-u-sm-6 am-u-lg-2 square-item\">
                        <li class=\"fall\">
                            <a href=\"{{ 'product/product-other'|app }}\" class=\"icon\" title='其他'>
                                <img src=\"/themes/hd/assets/images/product-icon-6.png\" alt=\"\">
                            </a>
                            <div class=\"cover\">
                                <img src=\"/themes/hd/assets/images/transform-6.jpg\" alt=\"\">
                            </div>
                            <div class=\"shadow\"></div>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
   <script type=\"text/javascript\">
    window.onload = function(){
         var swiper = new Swiper('.gallery',{
             autoplay:true,
             effect:'fade',
             loop:true,
             autoHeight:true,
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
             })
    }
    </script>", "E:\\workspace\\shawen\\install-master/themes/hd/pages/index.htm", "");
    }
}
