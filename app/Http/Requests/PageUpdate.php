<?php

namespace App\Http\Requests;

class PageUpdate extends PageStore
{
    protected function uniqueTitleRule() {
        return parent::uniqueTitleRule()->ignore($this->page->id);
    }
}
