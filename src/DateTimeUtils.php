<?php
declare(strict_types=1);

namespace Palicao\PhpRedisTimeSeries;

use DateTimeImmutable;
use DateTimeInterface;

class DateTimeUtils
{
    public static function dateTimeFromTimestampWithMs(int $timestamp) : DateTimeInterface
    {
        return DateTimeImmutable::createFromFormat('U.u', sprintf('%.03f', $timestamp / 1000));
    }

    public static function timestampWithMsFromDateTime(DateTimeInterface $dateTime) : int
    {
        return (int)round((int)$dateTime->format('Uu') / 1000);
    }
}
