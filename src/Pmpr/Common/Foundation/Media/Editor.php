<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\x2f\x63\154\141\163\163\x2d\167\x70\x2d\151\155\x61\147\145\55\145\144\151\164\157\x72\x2e\160\150\x70";
require_once ABSPATH . WPINC . "\57\143\x6c\x61\163\163\x2d\x77\160\55\x69\x6d\x61\147\x65\x2d\x65\x64\x69\164\157\x72\x2d\x67\x64\56\160\x68\x70";

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
        ioawmqwmiwwawcms:
        $yuwymayicwwqiske = $this->get_suffix();
        goto oooqmgaaiwkcyyyy;
        qyqqmmieeeuceawg:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\x2e{$new_ext}";
        goto kwcwakssmquiykuc;
        iwmgiqogkaqyoqck:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto sesuwiiwmyccwaum;
        }
        goto qmkyaaiuymgieqmy;
        gmkissoyacsksyko:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto eyasmquoaokeamwq;
        cekyyawuusagaggk:
        $mwweeceqggqmogwk = '';
        goto mgukmsekywicuigc;
        kyoaukgysoyeawwi:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto qqsieucekawaiwww;
        }
        goto ikuyswyameomqgyo;
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
        ooiaiemksqmaswks:
        
        if ($yuwymayicwwqiske) {
            goto myaageuswgawcqak;
        }
        goto ioawmqwmiwwawcms;
        eqmawsymeeaswsew:
        goto imeseaegeeiguiqs;
        goto weqsciomuwmoocke;
        qmmewcqkiaugaass:
        goto cmkicwoqsokugmuu;
        goto ieqcwaqqkgqecogy;
        ayysiuycoqkgikks:
        kskywmmcaugieuiw:
        goto asqgmcaauoaeoeos;
        ieqcwaqqkgqecogy:
        sggsqoimcswqyoii:
        goto qyqqmmieeeuceawg;
        ciauiegykcqkccqq:
        qqsieucekawaiwww:
        goto yeouiccygkgcauiq;
        gemykaoaqwicmeag:
        $mwweeceqggqmogwk = "\x34\170\63";
        goto qkcasgegweeoeqao;
        sqwieygmgqomaksy:
        goto imeseaegeeiguiqs;
        goto gyqumicuqcwwcess;
        gyqumicuqcwwcess:
        eugokmswcmogmgik:
        goto wwwcqcsimcgkkgqg;
        suqkayoqgmsgqaqm:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto aaqwwyccekouwawg;
        }
        goto oucqgwwoisakkgsa;
        oooqmgaaiwkcyyyy:
        myaageuswgawcqak:
        goto ieosoksooeowgwuo;
        woaeegswqqamukke:
        kigmywmmywoouoge:
        goto miwaociiwmomieeg;
        mumqecckiuimiqei:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto kigmywmmywoouoge;
        }
        goto caigegksaaycqqgy;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\x2e{$new_ext}";
        goto qmmewcqkiaugaass;
        gmyocwoeuugkoiyu:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto mkkwkugqkmyoqmuw;
        }
        goto eqmawsymeeaswsew;
        ikuyswyameomqgyo:
        $mwweeceqggqmogwk = "\61\170\61";
        goto ciauiegykcqkccqq;
        caigegksaaycqqgy:
        $miawkwqioaeasiig = $_dest_path;
        goto woaeegswqqamukke;
        qmkyaaiuymgieqmy:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto eugokmswcmogmgik;
        }
        goto gmyocwoeuugkoiyu;
        yigoymociiyaeeqe:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}");
        goto gcguaakuuuiymwci;
        ieosoksooeowgwuo:
        $prefix_array = explode("\x78", $yuwymayicwwqiske);
        goto cekyyawuusagaggk;
        meseuyammmyuuwgs:
        goto imeseaegeeiguiqs;
        goto cmmwsqyociiokaiu;
        rsgyucycsycgesiq:
        aaqwwyccekouwawg:
        goto sqwieygmgqomaksy;
        ookqckwksqwoekiy:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\x64\x69\x72\156\141\x6d\145"];
        goto xumakocukyysuseg;
        asqgmcaauoaeoeos:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto ookqckwksqwoekiy;
        iqismgeasiycywoq:
        $prefix_array[0] = (int) $prefix_array[0];
        goto yimewosgeusckeeo;
        cmmwsqyociiokaiu:
        mkkwkugqkmyoqmuw:
        goto kyoaukgysoyeawwi;
        oucqgwwoisakkgsa:
        $mwweeceqggqmogwk = "\61\x36\x78\71";
        goto rsgyucycsycgesiq;
        weqsciomuwmoocke:
        sesuwiiwmyccwaum:
        goto suqkayoqgmsgqaqm;
        miwaociiwmomieeg:
        if ('' != $mwweeceqggqmogwk) {
            goto sggsqoimcswqyoii;
        }
        goto gmkissoyacsksyko;
        qkcasgegweeoeqao:
        ysmqigiqiwsyymcc:
        goto meseuyammmyuuwgs;
        gcguaakuuuiymwci:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto mumqecckiuimiqei;
        yeouiccygkgcauiq:
        imeseaegeeiguiqs:
        goto ayysiuycoqkgikks;
        kwcwakssmquiykuc:
        cmkicwoqsokugmuu:
        goto uwseyususaysawwm;
        yimewosgeusckeeo:
        $prefix_array[1] = (int) $prefix_array[1];
        goto iwmgiqogkaqyoqck;
        xumakocukyysuseg:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\x78\x74\x65\156\163\151\x6f\156"];
        goto yigoymociiyaeeqe;
        uwseyususaysawwm:
    }
}
