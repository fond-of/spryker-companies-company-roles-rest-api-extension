<?php

namespace FondOfSpryker\Glue\CompaniesCompanyRolesRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CompanyRoleTransfer;

interface CompaniesCompanyRolesPreGetPluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after company role object is be get.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyRoleTransfer $creditMemoTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyRoleTransfer
     */
    public function preGet(CompanyRoleTransfer $creditMemoTransfer): CompanyRoleTransfer;
}
