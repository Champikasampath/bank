<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/18/20
 * Time: 11:21 PM
 */

namespace App\Repositories;


use App\Models\TransactionModel;

class TransactionsRepository
{
    /**
     * @param $data
     *
     * @return string
     */
    public function create($data)
    {
        try {
            return TransactionModel::create([$data]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $id
     * @param $data
     *
     * @return string
     */
    public function update($id, $data)
    {
        try {
            return TransactionModel::find($id)->update($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function read($id)
    {
        try {
            return TransactionModel::find($id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $from
     * @param $to
     * @param $ano
     *
     * @return string
     */
    public function getTransactions($from, $to, $ano)
    {
        try {
            return TransactionModel::where()->get();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}