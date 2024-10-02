<?php

namespace Brick\Money;
interface CurrencyInterface
{
    public function __construct(string $currencyCode, int $numericCode, string $name, int $defaultFractionDigits);

    public static function of(string|int $currencyCode): self;

    public static function ofCountry(string $countryCode): self;

    public function getCurrencyCode(): string;

    public function getNumericCode(): int;

    public function getName(): string;

    public function getDefaultFractionDigits(): int;

    public function is(Currency|string|int $currency): bool;

    public function jsonSerialize(): string;

    public function __toString(): string;
}