<?php

namespace App;

enum DonationTransactionStatus: string
{
    case PENDING = 'PENDING';
    case FAILED = 'FAILED';
    case SUCCESSFUL = 'SUCCESSFUL';
    case CANCELLED = 'CANCELLED';
}
