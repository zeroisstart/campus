<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

/**
 * Session请求参数结构体
 */
class Session extends AbstractResponse
{
    // 用户唯一id
    public $OpenUserId;
    // UserName
    public $UserName;
    // 用户在一个学校的唯一id
    public $OrgUserId;
    // 角色id
    public $RoleId;
    // 学校id
    public $OrgId;
    // 扩展字段
    public $ExtData;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OpenUserId', $param) && $param['OpenUserId'] !== null) {
            $this->OpenUserId = $param['OpenUserId'];
        }

        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->UserName = $param['UserName'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('ExtData', $param) && $param['ExtData'] !== null) {
            $this->ExtData = new ExtData();
            $this->ExtData->deserialize($param['ExtData']);
        }
    }
}
