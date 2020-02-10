<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 11:21 PM
 */

namespace App\Repositories;

use App\Models\AccountModel;

/**
 * Class AccountsRepository
 * @package App\Repositories
 */
class AccountsRepository
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function create($data)
    {
        try {
            return AccountModel::create($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $ano
     * @param $data
     *
     * @return mixed
     */
    public function update($ano, $data)
    {
        return AccountModel::where('account_number', $ano)->update($data);
    }

    /**
     * @param $ano
     *
     * @return mixed
     */
    public function read($ano)
    {
        return AccountModel::where('account_number', $ano)->first();
    }

    /**
     * @param $ano
     *
     * @return int
     */
    public function delete($ano)
    {
        return AccountModel::destroy($ano);
    }

    public function softDelete()
    {
        
    }
}