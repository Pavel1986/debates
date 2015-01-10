<?php
// src/Deb/TopicsBundle/Document/Topic.php
namespace Deb\TopicsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document
 */
class Topic
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\String
     * @Assert\NotBlank( message = "topic.form_create.name.blank")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "topic.form_create.name.min",
     *      maxMessage = "topic.form_create.name.max"
     * )
     */
    protected $name;
    
    /**
     * @MongoDB\String
     * @Assert\NotBlank( message = "topic.form_create.description.blank" )
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "topic.form_create.description.min",
     *      maxMessage = "topic.form_create.description.max"
     * )
     */
    protected $description;
    
    /**
     * @MongoDB\ObjectId
     */
    protected $author_id;
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set authorId
     *
     * @param object_id $authorId
     * @return self
     */
    public function setAuthorId($authorId)
    {
        $this->author_id = $authorId;
        return $this;
    }

    /**
     * Get authorId
     *
     * @return object_id $authorId
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }
}
