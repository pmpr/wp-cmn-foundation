<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6807a4c742978             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Modal extends Component { use SegmentsTrait; protected ?string $contentTemplate = null; public function qiccuiwooiquycsg() { if (!$this->mwikyscisascoeea()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $this->id = $yyauwyaeewsickwk->ogimogiceeekegoi($yyauwyaeewsickwk->mkwcwqkqeqkqyggc(static::class)); } if (!$this->contentTemplate) { $this->contentTemplate = $this->eskggqsasgsiommy($this->mwikyscisascoeea()); } $this->type = Constants::ismwycwsasweqomi; $this->template = Constants::ismwycwsasweqomi; $this->templateClass = self::class; } public function rsysgcucogueguuk() : array { return []; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu['close_icon'] = IconInterface::ucomcyskmkiqysee; return $kkeqqkkkqwkocsyu; } }
