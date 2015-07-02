<?php namespace HynMe\MultiTenant\Repositories;

use HynMe\Framework\Repositories\BaseRepository;
use HynMe\MultiTenant\Contracts\TenantRepositoryContract;

class TenantRepository extends BaseRepository implements TenantRepositoryContract
{

    /**
     * @var \HynMe\MultiTenant\Models\Tenant
     */
    protected $tenant;

    /**
     * Removes tenant and everything related
     *
     * @param $name
     * @return mixed
     */
    public function forceDeleteByName($name)
    {
        return $this->tenant->where('name', $name)->first()->delete();
    }
}