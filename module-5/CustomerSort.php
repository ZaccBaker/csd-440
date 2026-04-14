<?php 
    function sortCustomersOver30($customers){
        $customersOver30 = array_filter($customers, fn($customer) => $customer["Age"] > 30);
        return $customersOver30;
    }

    function sortCustomersByFirstName($customers, $name){
        $customersByName = array_filter($customers, fn($customer) => $customer["First Name"] == $name);
        return $customersByName;
    }
?>