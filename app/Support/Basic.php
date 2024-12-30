<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Value;
use Spatie\Csp\Policies\Policy;
use Spatie\Csp\Keyword;

class Basic extends Policy
{
    public function configure()
    {
        $this
            ->addDirective(Directive::BASE, Keyword::NONE)
            ->addDirective(Directive::CONNECT, Keyword::NONE)
            ->addDirective(Directive::DEFAULT, Keyword::NONE)
            ->addDirective(Directive::FORM_ACTION, Keyword::NONE)
            ->addDirective(Directive::IMG, Keyword::NONE)
            ->addDirective(Directive::MEDIA, Keyword::NONE)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT_ELEM, Keyword::NONE)
            ->addDirective(Directive::STYLE, Keyword::NONE)
            ->addDirective(Directive::STYLE_ELEM, Keyword::NONE)
            ->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
    }
}