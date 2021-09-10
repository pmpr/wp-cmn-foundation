<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Variation extends Common
{
    
    protected array $options = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('woocommerce_available_variation', [$this, 'ookoqeoqaqiqakum'])->qcsmikeggeemccuu('woocommerce_save_product_variation', [$this, 'save'], 10, 2)->qcsmikeggeemccuu('woocommerce_variation_options', [$this, 'iiuegksycemayqym'], 10, 3);
        parent::wigskegsqequoeks();
    }
    
    public function ookoqeoqaqiqakum($isweyuoisomqyaag)
    {
        return $this->ykqmgooyokusewai($this->gkwkqmwweiawigae(), $isweyuoisomqyaag);
    }
    
    public function ykqmgooyokusewai($ikgwqyuyckaewsow, $isweyuoisomqyaag)
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $aokagokqyuysuksm = $this->mcogocsgqayggguu($aiowsaccomcoikus);
            $isweyuoisomqyaag[$aokagokqyuysuksm] = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag['variation_id']);
            guykyqecgswcsmws:
        }
        wyuemgggaqogsmsq:
        return $isweyuoisomqyaag;
    }
    
    public function save($yyoiikyymyqcwmky, $ciyackuwsqkoqese)
    {
        foreach ($this->gkwkqmwweiawigae() as $omkysikckkcieckq) {
            $aokagokqyuysuksm = $this->mcogocsgqayggguu($omkysikckkcieckq);
            if (isset($_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese])) {
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm, $_POST[$aokagokqyuysuksm][$ciyackuwsqkoqese], $yyoiikyymyqcwmky);
            } else {
                ManipulatePost::smqukgcyacswysqa($aokagokqyuysuksm, $yyoiikyymyqcwmky);
            }
            miweggwqeiaeweia:
        }
        kkumywowcoycymeo:
    }
    
    public function iiuegksycemayqym($qgqgaykggoemycsk, $icwicymcioeyeyek, $isweyuoisomqyaag)
    {
        $this->iuaucuookgoqiiio($this->gkwkqmwweiawigae(), $qgqgaykggoemycsk, $isweyuoisomqyaag);
    }
    
    public function iuaucuookgoqiiio($ikgwqyuyckaewsow, $qgqgaykggoemycsk, $isweyuoisomqyaag)
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $eqgoocgaqwqcimie = $this->eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag);
            $eukwicwqggokmweg = "[{$qgqgaykggoemycsk}]";
            $nsmgceoqaqogqmuw = '';
            if ($aiowsaccomcoikus instanceof Field) {
                $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie)->usuqmwksoeaayaig($aiowsaccomcoikus->aakmagwggmkoiiyu() . $eukwicwqggokmweg);
                $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render();
            } else {
                if (is_array($aiowsaccomcoikus)) {
                    $aiowsaccomcoikus[self::VALUE] = $eqgoocgaqwqcimie;
                    $aiowsaccomcoikus[self::NAME] = $aiowsaccomcoikus[self::NAME] . $eukwicwqggokmweg;
                    switch (ManipulateArray::get($aiowsaccomcoikus, self::TYPE)) {
                        case 'checkbox':
                            $nsmgceoqaqogqmuw = ManipulateWoocommerce::uwyscmkeyeuqyukk($aiowsaccomcoikus);
                            goto ogsaaqsaogcqiouy;
                    }
                    iwekmyyccgiyuecc:
                    ogsaaqsaogcqiouy:
                }
            }
            echo $nsmgceoqaqogqmuw;
            ousiuuwgwkiyikyq:
        }
        kqqiegkuqagcqsya:
    }
    
    public function mcogocsgqayggguu($aiowsaccomcoikus)
    {
        $aokagokqyuysuksm = null;
        if ($aiowsaccomcoikus instanceof Field) {
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        } else {
            if (is_array($aiowsaccomcoikus)) {
                $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::NAME);
            }
        }
        return $aokagokqyuysuksm;
    }
    
    public function qeaaoyowyqkmusca($aiowsaccomcoikus)
    {
        $sqeykgyoooqysmca = null;
        if ($aiowsaccomcoikus instanceof Field) {
            $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        } else {
            if (is_array($aiowsaccomcoikus)) {
                $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            }
        }
        return $sqeykgyoooqysmca;
    }
    
    public function eakquuwmkweaeygy($aiowsaccomcoikus, $isweyuoisomqyaag)
    {
        return ManipulatePost::igawqaomowicuayw($this->mcogocsgqayggguu($aiowsaccomcoikus), $isweyuoisomqyaag, true);
    }
    
    public function gkwkqmwweiawigae() : array
    {
        if (!$this->options) {
            $this->options = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('woocommerce_variation_option_fields'), []);
        }
        return $this->options;
    }
}
