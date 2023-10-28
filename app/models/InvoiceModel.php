<?php

/**
 * InvoiceModel Model
 */

class InvoiceModel
{
    use Model;

    protected $table = 'invoice';
    protected $limit = 10000000000;
    protected $order_type   = "DESC";
    protected $order_column = "id";
    protected $allowedColumns = [
        "inv_key",
        "inv_cli",
        "inv_ref",
        "inv_title",
        "inv_amnt",
    ];

    public function validate($data)
    {
        $this->errors = [];

        /** DATA VALIDATION EXAMPLE START */
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                $this->errors[] = strtoupper($key) . " - Cannot be empty";
            }
        }
        /** DATA VALIDATION EXAMPLE END */

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
