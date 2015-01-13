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
     * @MongoDB\String
     */
    protected $date_created;
    
    /**
     * @MongoDB\String
     */
    protected $date_started;
    
    /**
     * @MongoDB\String
     */
    protected $date_closed;
    
    /**
     * @MongoDB\String
     */
    protected $status_code;
    
    protected $time_options = array("10" => 10, "20" => 20, "30" => 30);
    
    /**
     * @MongoDB\Int
     */
    protected $topic_time;
    
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

    /**
     * Set statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->status_code = $statusCode;
        return $this;
    }

    /**
     * Get statusCode
     *
     * @return string $statusCode
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Set dateCreated
     *
     * @param string $dateCreated
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return string $dateCreated
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set dateStarted
     *
     * @param string $dateStarted
     * @return self
     */
    public function setDateStarted($dateStarted)
    {
        $this->date_started = $dateStarted;
        return $this;
    }

    /**
     * Get dateStarted
     *
     * @return string $dateStarted
     */
    public function getDateStarted()
    {
        return $this->date_started;
    }

    /**
     * Set dateClosed
     *
     * @param string $dateClosed
     * @return self
     */
    public function setDateClosed($dateClosed)
    {
        $this->date_closed = $dateClosed;
        return $this;
    }

    /**
     * Get dateClosed
     *
     * @return string $dateClosed
     */
    public function getDateClosed()
    {
        return $this->date_closed;
    }

    /**
     * Set topicTime
     *
     * @param int $topicTime
     * @return self
     */
    public function setTopicTime($topicTime)
    {
        $this->topic_time = $topicTime;
        return $this;
    }

    /**
     * Get topicTime
     *
     * @return int $topicTime
     */
    public function getTopicTime()
    {
        return $this->topic_time;
    }
    
    /**
     * Get timeOptions
     *
     * @return array $timeOptions
     */
    public function getTimeOptions()
    {
        return $this->time_options;
    }
}
