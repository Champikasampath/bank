<?php
/**
 * Created by PhpStorm.
 * User: champika
 * Date: 1/17/20
 * Time: 11:11 PM
 */

namespace App\Services\User;


use App\Repositories\CustomersRepository;

class Customer
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $address;

    /**
     * @var CustomersRepository
     */
    private $customer_repository;

    /**
     * Customer constructor.
     */
    public function __construct()
    {
        $this->customer_repository = new CustomersRepository();
    }

    /**
     * @param $name
     * @param $address
     *
     * @return string
     */
    public static function create($name, $address)
    {
        $customer = new Customer();
        $customer->setData($name, $address);
        return $customer->saveCustomerData();
    }

    /**
     * @param $name
     * @param $address
     */
    private function setData($name, $address) {
        $this->setAddress($address);
        $this->setName($name);
    }

    /**
     *saveCustomerData
     */
    public function saveCustomerData()
    {
        return $this->customer_repository->create([
            'full_name' => $this->name,
            'address' => $this->address,
        ]);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}