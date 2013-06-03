<!DOCTYPE html>
<html>
    <head>
        <title>UTF-8 charmap and HTML characters map <?php echo $_GET["page"] > 0 ? "• Page " . $_GET["page"] : ""; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="http://www.onlinecreation.pro">
        <meta name="description" content="<?php echo $_GET["page"] > 0 ? "UTF-8 and HTML charmap, Page " . $_GET["page"] . ", from char nr." . (($_GET["page"] - 1) * 1000) . " to char nr." . ($_GET["page"] * 1000 - 1) . "." : "Certainly the biggest unicode character map in the world. Each char is associated with its HTML code."; ?>" />
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
        <link href='css/style.css' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="img/icon_128.png" />
        <meta property="og:image" content="/img/icon_128.png"/>
    </head>
    <body>
        <div class="char welcome">
            <strong>uuu.tf</strong>
            The biggest HTML UTF-8 charmap you can imagine !
        </div>
        <div class="char socials">
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="http://uuu.tf" addthis:title="uuu.tf">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
            </div>
        </div>
        <?php
        if ($_GET['page'] > 1) {
            echo '<a class="char clear" href="' . ($_GET['page'] - 1) . '"><strong>«</strong>Previous</a>';
        } elseif ($_GET['page'] == 1) {
            echo '<a class="char clear" href="/"><strong>«</strong>Previous</a>';
        }else{
            echo '<div class="clear"></div>';
        }
        if (!is_numeric($_GET['page']) || $_GET["page"] < 1) {
            $charmap = array("&#8592;", "&#8593;", "&#8594;", "&#8595;", "&#8596;", "&#8597;", "&#8598;", "&#8599;", "&#8600;", "&#8601;", "&#8602;", "&#8603;", "&#8604;", "&#8605;", "&#8606;",
                "&#8607;", "&#8608;", "&#8609;", "&#8610;", "&#8611;", "&#8612;", "&#8613;", "&#8614;", "&#8615;", "&#8616;", "&#8617;", "&#8618;", "&#8619;", "&#8620;", "&#8621;", "&#8622;",
                "&#8623;", "&#8624;", "&#8625;", "&#8626;", "&#8627;", "&#8628;", "&#8629;", "&#8630;", "&#8631;", "&#8632;", "&#8633;", "&#8636;", "&#8637;", "&#8638;", "&#8639;", "&#8640;",
                "&#8641;", "&#8642;", "&#8643;", "&#8644;", "&#8645;", "&#8646;", "&#8647;", "&#8648;", "&#8649;", "&#8650;", "&#8651;", "&#8652;", "&#8653;", "&#8654;", "&#8655;", "&#8656;",
                "&#8658;", "&#8660;", "&#8661;", "&#8662;", "&#8663;", "&#8664;", "&#8665;", "&#8666;", "&#8667;", "&#8668;", "&#8669;", "&#8670;", "&#8671;", "&#8672;", "&#8673;", "&#8674;",
                "&#8675;", "&#8676;", "&#8677;", "&#8678;", "&#8679;", "&#8680;", "&#8681;", "&#8682;", "&#10132;", "&#10136;", "&#10137;",
                "&#10138;", "&#10139;", "&#10140;", "&#10141;", "&#10142;", "&#10143;", "&#10144;", "&#10145;", "&#10146;", "&#10147;", "&#10148;", "&#10149;", "&#10150;", "&#10151;", "&#10152;",
                "&#10153;", "&#10154;", "&#10155;", "&#10156;", "&#10157;", "&#10158;", "&#10159;", "&#10160;", "&#10161;", "&#10162;", "&#10163;", "&#10164;", "&#10165;", "&#10166;", "&#10167;",
                "&#10168;", "&#10169;", "&#10170;", "&#10171;", "&#10172;", "&#10173;", "&#10174;", "&#11013;", "&#11014;", "&#11015;", "&#9754;",
                "&#9755;", "&#9756;", "&#9757;", "&#9758;", "&#9759;", "&#9166;", "&#9733;", "&#9734;", "&#11088;", "&#9055;", "&#9745;", "&#9746;", "&#9747;", "&#10063;", "&#10064;", "&#10065;",
                "&#10066;", "&#9985;", "&#9986;", "&#9987;", "&#9872;", "&#9873;", "&#9874;", "&#9876;", "&#9878;", "&#9883;", "&#9996;", "&#10047;", "&#10048;",
                "&#9794;", "&#9890;", "&#9891;", "&#9892;", "&#9893;", "&#9894;", "&#9842;", "&#9850;", "&#9851;", "&#9784;", "&#9875;", "&#10010;", "&#9764;", "&#9021;", "&#9000;", "&#8984;",
                "&#8998;", "&#9749;", "&#9832;",
                "&#9970;", "&#9971;", "&#9973;", "&#9978;", "&#9981;", "&#9992;", "&#9917;", "&#9918;", "&#9904;", "&#9905;", "&#9760;", "&#9940;",
                "&#9855;", "&#8856;", "&#8855;", "&#9768;", "&#9769;", "&#9773;", "&#9774;",
                "&#9775;", "&#8733;", "&#9762;", "&#9763;", "&#9888;", "&#9889;", "&#9812;", "&#9813;", "&#9814;", "&#9815;", "&#9816;", "&#9817;", "&#9818;", "&#9819;", "&#9820;", "&#9821;",
                "&#9822;", "&#9823;", "&#9824;", "&#9825;", "&#9826;", "&#9827;", "&#9828;", "&#9829;", "&#10084;", "&#9830;", "&#9831;", "&#9856;", "&#9857;", "&#9858;", "&#9859;", "&#9860;",
                "&#9861;", "&#9742;", "&#9743;", "&#9990;", "&#8226;", "&#8227;", "&#9193;", "&#9194;", "&#9195;", "&#9196;", "&#9993;",
                "&#9999;", "&#10002;", "&#9997;", "&#9998;", "&#9999;", "&#10000;", "&#9200;", "&#8986;", "&#9203;", "&#8987;", "&#10013;", "&#10017;", "&#9770;",
                "&#9962;", "&#9765;", "&#9840;", "&#9841;", "&#9728;", "&#9729;", "&#9730;", "&#9731;", "&#10052;", "&#9788;", "&#9789;", "&#9790;", "&#9748;", "&#9924;",
                "&#9925;", "&#8451;", "&#8457;", "&#8481;", "&#8482;", "&#8361;", "&#8364;", "&#8359;", "&#8263;", "&#8264;", "&#8265;",
                "&#8267;", "&#8253;", "&#174;", "&#169;", "&#339;", "&#201;", "&#7449;", "&#171;", "&#187;", "&#191;", "&#8709;", "&#8728;", "&#8734;", "&#8771;", "&#8772;", "&#8776;", "&#8777;",
                "&#8800;", "&#8805;", "&#8804;", "&#8240;", "&#8241;", "&#8224;", "&#8225;", "&#177;", "&#247;", "&#8730;", "&#8712;", "&#8713;", "&#188;", "&#189;", "&#9608;", "&#9487;", "&#9491;",
                "&#9495;", "&#9499;", "&#9473;", "&#9475;", "&#9500;", "&#9508;", "&#9524;", "&#9516;", "&#9552;", "&#9553;", "&#9556;", "&#9559;", "&#9562;", "&#9565;", "&#9571;", "&#9568;", "&#9574;",
                "&#9577;", "&#9581;", "&#9582;", "&#9584;", "&#9583;", "&#9833;", "&#9834;", "&#9835;", "&#9836;", "&#9837;", "&#9838;", "&#9839;", "&#12302;", "&#12303;", "&#12304;",
                "&#12305;", "&#12306;", "&#12310;", "&#12311;", "'&#7461;'", "&#12320;", "&#9786;", "&#9785;", "&#9787;", "&#12471;", "&#8179;", "&#13189;",
                "&#13190;", "&#13191;", "&#13192;", "&#13193;", "&#13197;", "&#13198;", "&#13199;", "&#13200;", "&#13211;", "&#13212;", "&#13213;", "&#13214;", "&#13215;", "&#13216;", "&#13217;",
                "&#13218;", "&#13219;", "&#13220;", "&#13221;", "&#13222;",
                "&#9398;", "&#9399;", "&#9400;", "&#9401;", "&#9402;", "&#9403;", "&#9404;", "&#9405;", "&#9406;", "&#9407;", "&#9408;", "&#9409;", "&#9410;", "&#9411;", "&#9412;", "&#9413;",
                "&#9414;", "&#9415;", "&#9416;", "&#9417;", "&#9418;", "&#9419;", "&#9420;", "&#9421;", "&#9422;", "&#9423;", "&#9424;", "&#9425;", "&#9426;", "&#9427;", "&#9428;", "&#9429;",
                "&#9430;", "&#9431;", "&#9432;", "&#9433;", "&#9434;", "&#9435;", "&#9436;", "&#9437;", "&#9438;", "&#9439;", "&#9440;", "&#9441;", "&#9442;", "&#9443;", "&#9444;", "&#9445;",
                "&#9446;", "&#9447;", "&#9448;", "&#9449;", "&#9312;", "&#9313;", "&#9314;", "&#9315;", "&#9316;", "&#9317;", "&#9318;", "&#9319;", "&#9320;", "&#9321;", "&#9322;", "&#9323;",
                "&#9324;", "&#9325;", "&#9326;", "&#9327;", "&#9328;", "&#9329;", "&#9330;", "&#9331;", "&#9352;", "&#9353;", "&#9354;", "&#9355;", "&#9356;", "&#9357;", "&#9358;", "&#9359;",
                "&#9360;", "&#9361;", "&#9362;", "&#9363;", "&#9364;", "&#9365;", "&#9366;", "&#9367;", "&#9368;", "&#9369;", "&#9370;", "&#9371;");
            foreach ($charmap as $char) {
                echo '<div class="char"><strong>' . $char . '</strong>' . htmlentities($char) . '</div>';
            }
        } else {
            for ($i = (($_GET['page'] - 1) * 1000); $i < ($_GET['page'] * 1000); $i++) {
                echo '<div class="char"><strong>&#' . $i . ';</strong>&amp;#' . $i . ';</div>';
            }
        }
        echo '<a class="char" href="' . (is_numeric($_GET['page']) ? $_GET['page'] + 1 : 1) . '"><strong>»</strong>Next</a>';
        ?>
        <div class="char footer clear">
            Charmap under GPL licence. If you find any interests into this 
            humble site, you can use it and its source code as much as you wish :
            <a href="https://github.com/onlinecreation/uuu.tf">Download and fork source code</a>;
            if you make something great with this code, 
            <a href="http://www.onlinecreation.pro/#bottom">please let us know</a> !
            
        </div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51aaf7be7c3d94b2"></script>
    </body>
</html>