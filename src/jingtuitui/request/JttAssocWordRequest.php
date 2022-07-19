<?php

namespace Mylarge\UnionSdk\jingtuitui\request;

use Mylarge\UnionSdk\jingtuitui\RequestBase;

/**
 * http://japi.jingtuitui.com/api/assoc_word
 * @ApiDescr   
 * @createTime 2022-01-05 20:38:24
 * @link       http://www.jingtuitui.com/api_item?id=5
 **/
class JttAssocWordRequest extends RequestBase
{

    /**
     * 接口名字
     * @var string
     */
    Protected $apiName = 'assoc_word';
    
    /**
     * api版本
     * @var string
     */
    protected $version = 'v1';
    
    /**
     * 必填参数列表
     * @var array
     */
    Protected $mustParamList = ['word'];
    
    
    /**
     * 关键词
     * @param string  $word
     * @isMust       必填
     * @exampleValue 纸巾
     * @return JttAssocWordRequest
     */
    public function setWord(string $word)
    {
        $this->params['word'] = $word;
        return $this;
    }

}