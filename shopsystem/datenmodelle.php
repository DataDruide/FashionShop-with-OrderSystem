// Produkt-Datenmodell
class Produkt
{
public int $produktId;
public string $produktname;
public string $produktbeschreibung;
public string $produktbild;
public int $produktkategorieId;
public float $produktpreis;
public int $produktbestand;

public function __construct(int $produktId, string $produktname, string $produktbeschreibung, string $produktbild, int
$produktkategorieId, float $produktpreis, int $produktbestand)
{
$this->produktId = $produktId;
$this->produktname = $produktname;
$this->produktbeschreibung = $produktbeschreibung;
$this->produktbild = $produktbild;
$this->produktkategorieId = $produktkategorieId;
$this->produktpreis = $produktpreis;
$this->produktbestand = $produktbestand;
}
}


// Kategorie-Datenmodell
class Kategorie
{
public int $kategorieId;
public string $kategoriename;
public string $kategoriebeschreibung;

public function __construct(int $kategorieId, string $kategoriename, string $kategoriebeschreibung)
{
$this->kategorieId = $kategorieId;
$this->kategoriename = $kategoriename;
$this->kategoriebeschreibung = $kategoriebeschreibung;
}
}