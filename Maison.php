<?php


class Maison extends Habitation
{
    private bool $jardin;
    private int $etages;
    private bool $garage;

    /**
     * Maison constructor.
     * @param string $pays
     * @param string $ville
     * @param int|null $cp
     * @param int $chambre
     * @param int $piece
     * @param bool $jardin
     * @param int $etages
     * @param bool $garage
     */
    public function __construct(
        string $pays, string $ville, ?int $cp, int $chambre, int $piece, bool $jardin, int $etages, bool $garage)
    {
        parent::__construct($pays, $ville, $cp, $chambre, $piece);

        $this->jardin = $jardin;
        $this->etages = $etages;
        $this->garage = $garage;
    }

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}
