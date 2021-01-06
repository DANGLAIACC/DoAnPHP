<?php 
    function formatMoney($money)
    {
        return str_replace(',', '.', number_format($money, 0)) . '₫';
    }  