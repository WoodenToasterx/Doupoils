<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestationtemplate
 *
 * @ORM\Table(name="prestationtemplate")
 * @ORM\Entity
 */
class Prestationtemplate
{
    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_HAIR", type="string", length=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prestationtemplateHair;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_SIZE", type="string", length=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prestationtemplateSize;

    /**
     * @var int
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_VERSION", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prestationtemplateVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_HYGIENE", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prestationtemplateHygiene;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_DISENTANGLING", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prestationtemplateDisentangling;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_SHAMPOO", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prestationtemplateShampoo;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_DRYING", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prestationtemplateDrying;

    /**
     * @var string
     *
     * @ORM\Column(name="PRESTATIONTEMPLATE_PRICE", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prestationtemplatePrice;

    public function getPrestationtemplateHair(): ?string
    {
        return $this->prestationtemplateHair;
    }

    public function getPrestationtemplateSize(): ?string
    {
        return $this->prestationtemplateSize;
    }

    public function getPrestationtemplateVersion(): ?int
    {
        return $this->prestationtemplateVersion;
    }

    public function getPrestationtemplateHygiene()
    {
        return $this->prestationtemplateHygiene;
    }

    public function setPrestationtemplateHygiene($prestationtemplateHygiene): self
    {
        $this->prestationtemplateHygiene = $prestationtemplateHygiene;

        return $this;
    }

    public function getPrestationtemplateDisentangling()
    {
        return $this->prestationtemplateDisentangling;
    }

    public function setPrestationtemplateDisentangling($prestationtemplateDisentangling): self
    {
        $this->prestationtemplateDisentangling = $prestationtemplateDisentangling;

        return $this;
    }

    public function getPrestationtemplateShampoo()
    {
        return $this->prestationtemplateShampoo;
    }

    public function setPrestationtemplateShampoo($prestationtemplateShampoo): self
    {
        $this->prestationtemplateShampoo = $prestationtemplateShampoo;

        return $this;
    }

    public function getPrestationtemplateDrying()
    {
        return $this->prestationtemplateDrying;
    }

    public function setPrestationtemplateDrying($prestationtemplateDrying): self
    {
        $this->prestationtemplateDrying = $prestationtemplateDrying;

        return $this;
    }

    public function getPrestationtemplatePrice()
    {
        return $this->prestationtemplatePrice;
    }

    public function setPrestationtemplatePrice($prestationtemplatePrice): self
    {
        $this->prestationtemplatePrice = $prestationtemplatePrice;

        return $this;
    }


}
?>
