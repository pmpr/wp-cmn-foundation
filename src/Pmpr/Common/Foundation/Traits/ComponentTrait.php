<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Container\Storage;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;

trait ComponentTrait
{
    use TemplateTrait;
    
    public final function gkieogwukagigisy($miawkwqioaeasiig)
    {
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        $this->ycgwemyyomeiuake();
        $this->kkcywkucqsawqqqo();
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        if (!$ymqmyyeuycgmigyo) {
            $wksoawcgagcgoask = self::couwksyewgyeooqe();
            if ($wksoawcgagcgoask) {
                $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
            }
        }
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms('COMPONENTS_ACTIVE', 0);
        if (!$ggocakcisguuokai && $ymqmyyeuycgmigyo) {
            $omkysikckkcieckq = DecoratorOption::get("component-{$ymqmyyeuycgmigyo}", []);
            $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        }
        return $ggocakcisguuokai;
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("pr__{$sqeykgyoooqysmca}__" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
        return $wksoawcgagcgoask instanceof Component;
    }
    
    public static final function uqggkiomyiceyooa() : string
    {
        return get_called_class();
    }
    
    public static function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array
    {
        return Storage::misumgawyweoagic($sqeykgyoooqysmca);
    }
    
    public static function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string
    {
        if (!$egkyssmuqcwaciya) {
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        }
        $sqeykgyoooqysmca = '';
        $uomewyckeuqoqocu = explode('\\', $egkyssmuqcwaciya);
        if ($uomewyckeuqoqocu) {
            $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
            switch ($sqeykgyoooqysmca) {
                case 'package':
                    $sqeykgyoooqysmca = self::PKG;
                    goto gicyayswqyuoekcq;
                case 'common':
                    $sqeykgyoooqysmca = self::CMN;
                    goto gicyayswqyuoekcq;
                case 'theme':
                    $sqeykgyoooqysmca = self::THM;
                    goto gicyayswqyuoekcq;
                default:
                    $sqeykgyoooqysmca = self::CTM;
            }
            iikiiioqiyegyaak:
            gicyayswqyuoekcq:
        }
        return $sqeykgyoooqysmca;
    }
    
    public static function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component
    {
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo);
    }
    
    public static function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string
    {
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        $kcismmoemwgiymuq = '';
        if ($wksoawcgagcgoask) {
            $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        }
        return $kcismmoemwgiymuq;
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        if (!$egkyssmuqcwaciya) {
            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        }
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        if (!$sqeykgyoooqysmca) {
            wp_die('can not register component: ' . $egkyssmuqcwaciya);
        }
        $uomewyckeuqoqocu = explode('\\', $egkyssmuqcwaciya);
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        return ManipulateString::ogimogiceeekegoi("pr__{$sqeykgyoooqysmca}__{$wksoawcgagcgoask}");
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        $ksiyqouuaoymsycg = null;
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            if ($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw) {
                $ksiyqouuaoymsycg = $wksoawcgagcgoask;
                goto uiosisocuwokwkie;
            }
            cuumeogeomowqisc:
        }
        uiosisocuwokwkie:
        return $ksiyqouuaoymsycg;
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        if ($wksoawcgagcgoask) {
            $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        } else {
            $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
            $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        }
        return $mkomwsiykqigmqca;
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        if (!$mokawwccycoiqeka) {
            $wksoawcgagcgoask = self::couwksyewgyeooqe();
            if ($wksoawcgagcgoask) {
                $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
            }
        }
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy('plugin_locale', determine_locale(), $mokawwccycoiqeka);
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}.mo";
        if (!$mkomwsiykqigmqca) {
            $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . '/translation';
        }
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}/{$egcekquqcyayskcm}"));
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        $wissqeyocyayguas = $this->sscegwueamckwmcy('get_pmpr_plugin_api_key', '');
        if (!is_string($wissqeyocyayguas)) {
            $wissqeyocyayguas = null;
        }
        return $wissqeyocyayguas;
    }
}
