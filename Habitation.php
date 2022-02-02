<?php


class Habitation
{
    private string $pays;
    private string $ville;
    private ?int $cp;
    private int $chambre;
    private int $piece;

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return int|null
     */
    public function getCp(): ?int
    {
        return $this->cp;
    }

    /**
     * @param int|null $cp
     */
    public function setCp(?int $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return int
     */
    public function getChambre(): int
    {
        return $this->chambre;
    }

    /**
     * @param int $chambre
     */
    public function setChambre(int $chambre): void
    {
        $this->chambre = $chambre;
    }

    /**
     * @return int
     */
    public function getPiece(): int
    {
        return $this->piece;
    }

    /**
     * @param int $piece
     */
    public function setPiece(int $piece): void
    {
        $this->piece = $piece;
    }


}