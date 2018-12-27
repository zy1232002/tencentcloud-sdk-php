<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLoadBalancerId() 获取负载均衡实例 ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID
 * @method string getListenerId() 获取应用型负载均衡监听器 ID
 * @method void setListenerId(string $ListenerId) 设置应用型负载均衡监听器 ID
 * @method array getLocationIds() 获取要删除的转发规则的ID组成的数组
 * @method void setLocationIds(array $LocationIds) 设置要删除的转发规则的ID组成的数组
 * @method string getDomain() 获取要删除的转发规则的域名，已提供LocationIds参数时本参数不生效
 * @method void setDomain(string $Domain) 设置要删除的转发规则的域名，已提供LocationIds参数时本参数不生效
 * @method string getUrl() 获取要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效
 * @method void setUrl(string $Url) 设置要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效
 */

/**
 *DeleteRule请求参数结构体
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID
     */
    public $LoadBalancerId;

    /**
     * @var string 应用型负载均衡监听器 ID
     */
    public $ListenerId;

    /**
     * @var array 要删除的转发规则的ID组成的数组
     */
    public $LocationIds;

    /**
     * @var string 要删除的转发规则的域名，已提供LocationIds参数时本参数不生效
     */
    public $Domain;

    /**
     * @var string 要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效
     */
    public $Url;
    /**
     * @param string $LoadBalancerId 负载均衡实例 ID
     * @param string $ListenerId 应用型负载均衡监听器 ID
     * @param array $LocationIds 要删除的转发规则的ID组成的数组
     * @param string $Domain 要删除的转发规则的域名，已提供LocationIds参数时本参数不生效
     * @param string $Url 要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationIds",$param) and $param["LocationIds"] !== null) {
            $this->LocationIds = $param["LocationIds"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}