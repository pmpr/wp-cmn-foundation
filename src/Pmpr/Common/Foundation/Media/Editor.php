<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\57\x63\154\x61\163\x73\55\x77\160\55\151\x6d\x61\x67\145\55\x65\144\151\x74\x6f\162\x2e\160\150\160";
require_once ABSPATH . WPINC . "\57\x63\154\x61\163\x73\55\x77\160\55\151\x6d\141\x67\145\x2d\145\x64\x69\x74\x6f\162\55\147\x64\x2e\160\x68\160";

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
        asqgmcaauoaeoeos:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto ookqckwksqwoekiy;
        ookqckwksqwoekiy:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\x69\x72\x6e\x61\155\145"];
        goto xumakocukyysuseg;
        ciauiegykcqkccqq:
        qqsieucekawaiwww:
        goto yeouiccygkgcauiq;
        meseuyammmyuuwgs:
        goto imeseaegeeiguiqs;
        goto cmmwsqyociiokaiu;
        eqmawsymeeaswsew:
        goto imeseaegeeiguiqs;
        goto weqsciomuwmoocke;
        ieqcwaqqkgqecogy:
        sggsqoimcswqyoii:
        goto qyqqmmieeeuceawg;
        ikuyswyameomqgyo:
        $mwweeceqggqmogwk = "\x31\x78\61";
        goto ciauiegykcqkccqq;
        gcguaakuuuiymwci:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto mumqecckiuimiqei;
        qmkyaaiuymgieqmy:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto eugokmswcmogmgik;
        }
        goto gmyocwoeuugkoiyu;
        rsgyucycsycgesiq:
        aaqwwyccekouwawg:
        goto sqwieygmgqomaksy;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\x2e{$new_ext}";
        goto qmmewcqkiaugaass;
        iwmgiqogkaqyoqck:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto sesuwiiwmyccwaum;
        }
        goto qmkyaaiuymgieqmy;
        yeouiccygkgcauiq:
        imeseaegeeiguiqs:
        goto ayysiuycoqkgikks;
        cmmwsqyociiokaiu:
        mkkwkugqkmyoqmuw:
        goto kyoaukgysoyeawwi;
        cekyyawuusagaggk:
        $mwweeceqggqmogwk = '';
        goto mgukmsekywicuigc;
        woaeegswqqamukke:
        kigmywmmywoouoge:
        goto miwaociiwmomieeg;
        gmkissoyacsksyko:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto eyasmquoaokeamwq;
        iqismgeasiycywoq:
        $prefix_array[0] = (int) $prefix_array[0];
        goto yimewosgeusckeeo;
        weqsciomuwmoocke:
        sesuwiiwmyccwaum:
        goto suqkayoqgmsgqaqm;
        gemykaoaqwicmeag:
        $mwweeceqggqmogwk = "\64\170\63";
        goto qkcasgegweeoeqao;
        kwcwakssmquiykuc:
        cmkicwoqsokugmuu:
        goto uwseyususaysawwm;
        yimewosgeusckeeo:
        $prefix_array[1] = (int) $prefix_array[1];
        goto iwmgiqogkaqyoqck;
        wwwcqcsimcgkkgqg:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto ysmqigiqiwsyymcc;
        }
        goto gemykaoaqwicmeag;
        miwaociiwmomieeg:
        if ('' != $mwweeceqggqmogwk) {
            goto sggsqoimcswqyoii;
        }
        goto gmkissoyacsksyko;
        oucqgwwoisakkgsa:
        $mwweeceqggqmogwk = "\61\66\x78\x39";
        goto rsgyucycsycgesiq;
        qyqqmmieeeuceawg:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\56{$new_ext}";
        goto kwcwakssmquiykuc;
        oooqmgaaiwkcyyyy:
        myaageuswgawcqak:
        goto ieosoksooeowgwuo;
        ayysiuycoqkgikks:
        kskywmmcaugieuiw:
        goto asqgmcaauoaeoeos;
        xumakocukyysuseg:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\170\x74\145\156\163\151\x6f\156"];
        goto yigoymociiyaeeqe;
        yigoymociiyaeeqe:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}");
        goto gcguaakuuuiymwci;
        suqkayoqgmsgqaqm:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto aaqwwyccekouwawg;
        }
        goto oucqgwwoisakkgsa;
        ieosoksooeowgwuo:
        $prefix_array = explode("\170", $yuwymayicwwqiske);
        goto cekyyawuusagaggk;
        sqwieygmgqomaksy:
        goto imeseaegeeiguiqs;
        goto gyqumicuqcwwcess;
        caigegksaaycqqgy:
        $miawkwqioaeasiig = $_dest_path;
        goto woaeegswqqamukke;
        gyqumicuqcwwcess:
        eugokmswcmogmgik:
        goto wwwcqcsimcgkkgqg;
        kyoaukgysoyeawwi:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto qqsieucekawaiwww;
        }
        goto ikuyswyameomqgyo;
        ooiaiemksqmaswks:
        
        if ($yuwymayicwwqiske) {
            goto myaageuswgawcqak;
        }
        goto ioawmqwmiwwawcms;
        ioawmqwmiwwawcms:
        $yuwymayicwwqiske = $this->get_suffix();
        goto oooqmgaaiwkcyyyy;
        qmmewcqkiaugaass:
        goto cmkicwoqsokugmuu;
        goto ieqcwaqqkgqecogy;
        gmyocwoeuugkoiyu:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto mkkwkugqkmyoqmuw;
        }
        goto eqmawsymeeaswsew;
        mumqecckiuimiqei:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto kigmywmmywoouoge;
        }
        goto caigegksaaycqqgy;
        qkcasgegweeoeqao:
        ysmqigiqiwsyymcc:
        goto meseuyammmyuuwgs;
        mgukmsekywicuigc:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto kskywmmcaugieuiw;
        }
        goto iqismgeasiycywoq;
        uwseyususaysawwm:
    }
}
