// In Timesheet.php
/**
* @ORM\Column(type="string", length=255, nullable=true)
*/
private $photoPath;

// Getter
public function getPhotoPath(): ?string
{
return $this->photoPath;
}

// Setter
public function setPhotoPath(?string $photoPath): self
{
$this->photoPath = $photoPath;
return $this;
}
