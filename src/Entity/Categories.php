<?php
namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Categories {
      /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @ORM\ManyToOne(targetEntity="Product")
   * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
   *
   */
  private $product;
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
  public function product()
  {
    return $this->product;
  }
  /**
   * @param mixed $id
   */
  public function setProduct($product)
  {
    $this->product = $product;
  }
}