<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\57\x63\x6c\141\x73\x73\x2d\x77\160\55\x69\x6d\x61\147\x65\x2d\145\x64\x69\x74\x6f\162\x2e\x70\150\160";
require_once ABSPATH . WPINC . "\x2f\143\x6c\141\163\163\55\167\x70\x2d\151\x6d\141\x67\x65\x2d\145\144\151\164\x6f\162\x2d\147\x64\x2e\x70\150\x70";

class Editor extends WP_Image_Editor_GD
{
    const TOLERANCE = 0.01;
    const MIN_WIDTH_16_9 = 1200;
    const MIN_HEIGHT_16_9 = 675;
    const MIN_WIDTH_4_3 = 1200;
    const MIN_HEIGHT_4_3 = 900;
    const MIN_WIDTH_1_1 = 1200;
    const MIN_HEIGHT_1_1 = 1200;
    
    public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null)
    {
        goto ooiaiemksqmaswks;
        gmkissoyacsksyko:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto eyasmquoaokeamwq;
        iqismgeasiycywoq:
        $prefix_array[0] = (int) $prefix_array[0];
        goto yimewosgeusckeeo;
        qkcasgegweeoeqao:
        ysmqigiqiwsyymcc:
        goto meseuyammmyuuwgs;
        gyqumicuqcwwcess:
        eugokmswcmogmgik:
        goto wwwcqcsimcgkkgqg;
        weqsciomuwmoocke:
        sesuwiiwmyccwaum:
        goto suqkayoqgmsgqaqm;
        xumakocukyysuseg:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\x78\x74\x65\x6e\163\x69\x6f\x6e"];
        goto yigoymociiyaeeqe;
        ieqcwaqqkgqecogy:
        sggsqoimcswqyoii:
        goto qyqqmmieeeuceawg;
        yimewosgeusckeeo:
        $prefix_array[1] = (int) $prefix_array[1];
        goto iwmgiqogkaqyoqck;
        sqwieygmgqomaksy:
        goto imeseaegeeiguiqs;
        goto gyqumicuqcwwcess;
        ikuyswyameomqgyo:
        $mwweeceqggqmogwk = "\x31\x78\61";
        goto ciauiegykcqkccqq;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\56{$new_ext}";
        goto qmmewcqkiaugaass;
        oucqgwwoisakkgsa:
        $mwweeceqggqmogwk = "\61\66\170\71";
        goto rsgyucycsycgesiq;
        gmyocwoeuugkoiyu:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto mkkwkugqkmyoqmuw;
        }
        goto eqmawsymeeaswsew;
        caigegksaaycqqgy:
        $miawkwqioaeasiig = $_dest_path;
        goto woaeegswqqamukke;
        yigoymociiyaeeqe:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}");
        goto gcguaakuuuiymwci;
        miwaociiwmomieeg:
        if ('' != $mwweeceqggqmogwk) {
            goto sggsqoimcswqyoii;
        }
        goto gmkissoyacsksyko;
        rsgyucycsycgesiq:
        aaqwwyccekouwawg:
        goto sqwieygmgqomaksy;
        mumqecckiuimiqei:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto kigmywmmywoouoge;
        }
        goto caigegksaaycqqgy;
        qyqqmmieeeuceawg:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\x2e{$new_ext}";
        goto kwcwakssmquiykuc;
        woaeegswqqamukke:
        kigmywmmywoouoge:
        goto miwaociiwmomieeg;
        suqkayoqgmsgqaqm:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto aaqwwyccekouwawg;
        }
        goto oucqgwwoisakkgsa;
        gcguaakuuuiymwci:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto mumqecckiuimiqei;
        oooqmgaaiwkcyyyy:
        myaageuswgawcqak:
        goto ieosoksooeowgwuo;
        meseuyammmyuuwgs:
        goto imeseaegeeiguiqs;
        goto cmmwsqyociiokaiu;
        yeouiccygkgcauiq:
        imeseaegeeiguiqs:
        goto ayysiuycoqkgikks;
        kwcwakssmquiykuc:
        cmkicwoqsokugmuu:
        goto uwseyususaysawwm;
        ciauiegykcqkccqq:
        qqsieucekawaiwww:
        goto yeouiccygkgcauiq;
        kyoaukgysoyeawwi:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto qqsieucekawaiwww;
        }
        goto ikuyswyameomqgyo;
        asqgmcaauoaeoeos:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto ookqckwksqwoekiy;
        cmmwsqyociiokaiu:
        mkkwkugqkmyoqmuw:
        goto kyoaukgysoyeawwi;
        qmkyaaiuymgieqmy:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto eugokmswcmogmgik;
        }
        goto gmyocwoeuugkoiyu;
        ooiaiemksqmaswks:
        
        if ($yuwymayicwwqiske) {
            goto myaageuswgawcqak;
        }
        goto ioawmqwmiwwawcms;
        cekyyawuusagaggk:
        $mwweeceqggqmogwk = '';
        goto mgukmsekywicuigc;
        ioawmqwmiwwawcms:
        $yuwymayicwwqiske = $this->get_suffix();
        goto oooqmgaaiwkcyyyy;
        wwwcqcsimcgkkgqg:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto ysmqigiqiwsyymcc;
        }
        goto gemykaoaqwicmeag;
        mgukmsekywicuigc:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto kskywmmcaugieuiw;
        }
        goto iqismgeasiycywoq;
        ayysiuycoqkgikks:
        kskywmmcaugieuiw:
        goto asqgmcaauoaeoeos;
        iwmgiqogkaqyoqck:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto sesuwiiwmyccwaum;
        }
        goto qmkyaaiuymgieqmy;
        gemykaoaqwicmeag:
        $mwweeceqggqmogwk = "\64\170\x33";
        goto qkcasgegweeoeqao;
        ookqckwksqwoekiy:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\151\x72\156\141\x6d\x65"];
        goto xumakocukyysuseg;
        qmmewcqkiaugaass:
        goto cmkicwoqsokugmuu;
        goto ieqcwaqqkgqecogy;
        ieosoksooeowgwuo:
        $prefix_array = explode("\170", $yuwymayicwwqiske);
        goto cekyyawuusagaggk;
        eqmawsymeeaswsew:
        goto imeseaegeeiguiqs;
        goto weqsciomuwmoocke;
        uwseyususaysawwm:
    }
}
