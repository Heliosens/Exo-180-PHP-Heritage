<?php


class Appartement extends Habitation
{
    private bool $garage;

    /**
     * Appartement constructor.
     * @param string $pays
     * @param string $ville
     * @param string $cp
     * @param int $chambre
     * @param int $piece
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, string $cp, int $chambre, int $piece, bool $garage)
    {
        parent::__construct($pays, $ville, $cp, $chambre, $piece);

        $this->garage = $garage;
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