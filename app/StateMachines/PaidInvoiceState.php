<?php


namespace App\StateMachines;


use App\Enums\InvoiceState;

class PaidInvoiceState extends BaseInvoiceState implements InvoiceStateContract
{
    public function getName(): InvoiceState
    {
        return InvoiceState::Paid;
    }
}