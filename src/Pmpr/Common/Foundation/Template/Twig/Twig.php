<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;


class Twig extends Common
{
    
    protected ?Engine $engine = null;
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
    public function __construct()
    {
        $this->engine = Engine::symcgieuakksimmu();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'load'])->qcsmikeggeemccuu('after_setup_theme', [$this, 'kgkmwucmkcqaksmo'], 99, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw('add_templating_path'), [$this, 'wkosicsekwkigyss'], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function load()
    {
        $this->uykissogmuaaocsg()->load();
    }
    
    public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca)
    {
        $this->uykissogmuaaocsg()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
    }
    public function kgkmwucmkcqaksmo()
    {
        $goqqimcssiyagkwy = $this->uykissogmuaaocsg();
        Filter::symcgieuakksimmu($goqqimcssiyagkwy);
        Action::symcgieuakksimmu($goqqimcssiyagkwy);
    }
}
