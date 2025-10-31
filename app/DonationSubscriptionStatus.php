<?php

namespace App;

enum DonationSubscriptionStatus: string
{
    case PENDING = 'PENDING';
    case ACTIVE = 'ACTIVE';
    case CANCELLED = 'CANCELLED';
}
