<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response;

use DobryProgramator\iDoklad\Enum\ItemType;
use DobryProgramator\iDoklad\Enum\PriceType;
use DobryProgramator\iDoklad\Enum\VatRateType;
use JMS\Serializer\Annotation as Serializer;
use DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Item\Prices;

final class Item
{
    /**
     * @Serializer\SerializedName("Amount")
     * @Serializer\Type("float")
     */
    private float $amount;

    /**
     * @Serializer\SerializedName("Code")
     * @Serializer\Type("string")
     */
    private string $code;

    /**
     * @Serializer\SerializedName("DiscountName")
     * @Serializer\Type("string")
     */
    private string $discountName;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     * @Serializer\Type("float")
     */
    private float $discountPercentage;

    /**
     * @Serializer\SerializedName("Id")
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsTaxMovement")
     * @Serializer\Type("bool")
     */
    private bool $isTaxMovement;

    /**
     * @Serializer\SerializedName("ItemType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\ItemType'>")
     */
    private ItemType $itemType;

    /**
     * @Serializer\SerializedName("Name")
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("PriceListItemId")
     * @Serializer\Type("string")
     */
    private ?int $priceListItemId;

    /**
     * @Serializer\SerializedName("Prices")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\IssuedInvoices\NewInvoice\Response\Item\Prices")
     */
    private Prices $prices;

    /**
     * @Serializer\SerializedName("PriceType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\PriceType'>")
     */
    private PriceType $priceType;

    /**
     * @Serializer\SerializedName("Unit")
     * @Serializer\Type("string")
     */
    private string $unit;

    /**
     * @Serializer\SerializedName("VatCodeId")
     * @Serializer\Type("int")
     */
    private ?int $vatCodeId;

    /**
     * @Serializer\SerializedName("VatRate")
     * @Serializer\Type("float")
     */
    private float $vatRate;

    /**
     * @Serializer\SerializedName("VatRateType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\VatRateType'>")
     */
    private VatRateType $vatRateType;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDiscountName(): string
    {
        return $this->discountName;
    }

    public function getDiscountPercentage(): float
    {
        return $this->discountPercentage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isTaxMovement(): bool
    {
        return $this->isTaxMovement;
    }

    public function getItemType(): ItemType
    {
        return $this->itemType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceListItemId(): int
    {
        return $this->priceListItemId;
    }

    public function getPrices(): Prices
    {
        return $this->prices;
    }

    public function getPriceType(): PriceType
    {
        return $this->priceType;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getVatCodeId(): int
    {
        return $this->vatCodeId;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function getVatRateType(): VatRateType
    {
        return $this->vatRateType;
    }
}
