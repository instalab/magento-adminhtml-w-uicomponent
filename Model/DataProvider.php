<?php

namespace MyCompany\NewExtension\Model;
use \Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    public function prepareMeta(array $meta)
    {
        return [];
    }
    
    public function getData()
    {
        $ret = [array(
            "title"=>"Some Text"
        )];
        
        return $ret;
    }
}

