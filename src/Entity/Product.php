<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="Product")
 */
class Product {
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $name;

  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $sku;
  /**
   * @ORM\Column(type="string", length=100)
   *
   */
  private $price;
  /**
   * @ORM\Column(type="datetime")
   *
   */
  private $date;
  /**
   * @ORM\Column(type="datetime")
   *
   */
  private $lastUpdateAt;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param mixed $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  
  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return mixed
   */
  public function getSKU()
  {
    return $this->sku;
  }
  /**
   * @param mixed
   */
  public function setSKU($sku)
  {
    $this->sku = $sku;
  }
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * @param mixed
   */
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function getDate()
  {
    return $this->date;
  }
  /**
   * @param mixed
   */
  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getLastUpdatedAt()
  {
    return $this->LastUpdatedAt;
  }
  /**
   * @param mixed
   */
  public function setLastUpdatedAt($date)
  {
    $this->LastUpdatedAt = $date;
  }
}